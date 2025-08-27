import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import $ from "jquery";

window.$ = window.jQuery = $;


/**
 * File upload utility function.
 *
 * @param {Object} options - Configuration options for the file uploader.
 * @param {HTMLInputElement} options.input - The file input element to process.
 * @param {number} options.maxFiles - Maximum number of files that can be uploaded.
 * @param {number} options.maxSize - Maximum total size of all files (in kilobytes).
 * @param {number} options.maxFileSize - Maximum size of a single file (in kilobytes).
 * @param {string[]} [options.allowedTypes=[]] - Array of allowed MIME types for the files.
 * @param {boolean} [options.errorPopup=false] - Whether to show a popup for errors. Defaults to `false`.
 * @param {boolean} [options.response=false] - Whether to return a response object containing the upload status and errors. Defaults to `false`.
 * @returns {Object} - An object with methods to handle file uploads and validations.
 */
window.fileUploader = ({ input, maxFiles, maxSize, maxFileSize, allowedTypes = [], errorPopup = false, response = false }) => {
    if (allowedTypes.length == 0 && input.accept) {
        allowedTypes = input.accept.split(',');
    }
    const errors = [];
    const typeMap = {
        png: ["image/png"],
        jpg: ["image/jpeg"],
        jpeg: ["image/jpeg"],
        pdf: ["application/pdf"],
    };
    const types = [];
    for (const key in typeMap) {
        allowedTypes.forEach(ele => {
            if (typeMap[key].includes(ele)) types.push(key);
        });
    }
    const errorMessages = {
        maxFiles: `You can upload a maximum of ${maxFiles} files.`,
        maxFileSize: `File size should be under ${Math.round(maxFileSize / 1024)} MB.`,
        maxSize: `Total file size should be under ${Math.round(maxSize / 1024)} MB.`,
        allowedTypes: `Only ${types.join(', ')} are allowed.`
    };
    const previousFiles = Number($(`#${input.id}_old_files`).val());
    const newFiles = input.files.length;
    return {
        handleFileUpload: function () {
            if (maxFiles) this.checkMaxFiles();
            if (maxSize && errors.length == 0) this.checkMaxSize();
            if (maxFileSize && errors.length == 0) this.checkFilesSize();
            if (allowedTypes && errors.length == 0) this.checkAllowedTypes();

            if (response) return { status: errors.length == 0, errors: errors };
        },
        checkMaxFiles: function () {
            if ((newFiles + previousFiles) > maxFiles) {
                errors.push(errorMessages.maxFiles);
                this.resetInput();
                if (errorPopup) {
                    toastr.error(errorMessages.maxFiles);
                }
            }
        },
        checkMaxSize: function () {
            let totalSize = 0;
            for (let i = 0; i < newFiles; i++) {
                totalSize += Math.round(input.files[i].size / 1024);
            }
            if (totalSize > maxSize) {
                errors.push(errorMessages.maxSize);
                this.resetInput();
                if (errorPopup) {
                    toastr.error(errorMessages.maxSize);
                }
            }
        },
        checkFilesSize: function () {
            if (maxFileSize < Math.round(input.files[0].size / 1024)) {
                errors.push(errorMessages.maxFileSize);
                this.resetInput();
                if (errorPopup) {
                    toastr.error(errorMessages.maxFileSize);
                }
            }
        },
        checkAllowedTypes: function () {
            if (allowedTypes.length > 0) {
                for (let i = 0; i < newFiles; i++) {
                    if (!allowedTypes.includes(input.files[i].type)) {
                        errors.push(errorMessages.allowedTypes);
                        this.resetInput();
                        if (errorPopup) {
                            toastr.error(errorMessages.allowedTypes);
                        }
                        break;
                    }
                }
            }
        },
        resetInput: function () {
            $(input).val('');
            $(`#${input.id}_files .new-attached-files`).remove();
        },
    }
};



/**
 * File download utility function.
 *
 * @param {Object} options - Configuration options for file downloading.
 * @param {string} options.id - The ID of the file to be downloaded.
 * @param {string} options.downloadType - The type of download (e.g., 'single' or 'bulk').
 * @param {boolean} [options.response=false] - Whether to return a response object from the download operation. Defaults to `false`.
 * @returns {Object} - An object with a method to initiate the file download.
 */
window.fileDownloader = function ({ url, id, downloadType, response = false }) {
    return {
        downloadFile: function () {
            console.log($('meta[name="_token"]').attr('content'));

            $.ajax({
                url,
                method: "POST",
                data: { id, downloadType },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                xhrFields: {
                    responseType: 'blob'
                },
                success: function (data, _, xhr) {
                    const fileName = xhr.getResponseHeader('fileName');
                    if (response) return { data, fileName };
                    const blob = new Blob([data], { type: xhr.getResponseHeader('content-type') });
                    const link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = fileName;
                    link.click();
                    link.remove();

                },
                error: function (data) {
                    if (response) return data;
                    if (data.status == 404) {
                        toastr.error('Attachment not found');
                        return;
                    }
                    toastr.error('Something went wrong');
                }
            });
        }
    }
};
