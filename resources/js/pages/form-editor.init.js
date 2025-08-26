/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Editor Js
 */

import Quill from "quill";

const blogForm = $('form#blogForm');
const destinationForm = $('form#destinationForm');
const blogContent = $('div#blog-content');
const tourHighlightDetails = $('div#tour-highlight-details');

if (blogContent.length > 0) {
  const quill = new Quill("div#blog-content", {
    readOnly: true,
    modules: {
      toolbar: null
    },
    theme: 'snow',
  });
  const data = $('input#blog-content').val()
  quill.setContents(JSON.parse(data));
  $('input#blog-content').remove();
}

if (tourHighlightDetails.length > 0) {
  const quill = new Quill("div#tour-highlight-details", {
    readOnly: true,
    modules: {
      toolbar: null
    },
    theme: 'snow',
  });
  const data = $('input#tour-highlight-details-content').val()
  quill.setContents(JSON.parse(data));
  $('input#tour-highlight-details-content').remove()
}

if (blogForm.length > 0) {
  const quill = new Quill("#editor", {
    theme: 'snow',
    modules: {
      toolbar: [
        [{ 'font': [] }],
        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'align': [] }],
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }],
        [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction
        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        ['blockquote', 'code-block'],
        ['link', 'image', 'video', 'formula'],
        ['clean']                                         // remove formatting button
      ]
    }
  });

  $('form#blogForm').on('submit', function (event) {
    event.preventDefault();
    if (quill.getLength() > 1) $('input#content').val(JSON.stringify(quill.getContents()));
    this.submit()
  });
  const content = $('input#content').val();
  if (content && content.length > 0) {
    quill.setContents(JSON.parse(content));

  }
}

if (destinationForm.length > 0) {
  const quill = new Quill("div#highlight_details", {
    theme: 'snow',
    modules: {
      toolbar: [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }],
        ['clean']                                         // remove formatting button
      ]
    }
  });


  $(destinationForm).on('submit', function (event) {
    event.preventDefault();
    if (quill.getLength() > 1) $('input#highlight_details').val(JSON.stringify(quill.getContents()));
    this.submit()
  });
  const content = $('input#highlight_details').val();
  if (content && content.length > 0) {
    quill.setContents(JSON.parse(content));
  }
}

