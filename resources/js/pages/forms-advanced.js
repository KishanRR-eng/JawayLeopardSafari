/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Form Advanced Js
 */
import { Datepicker } from 'vanillajs-datepicker';
import intlTelInput from 'intl-tel-input';



if ($('#mobile_no').length > 0) {
  const intl = intlTelInput(document.querySelector("#mobile_no"), {
    initialCountry: "in",
    strictMode: true,
    loadUtils: () => import("intl-tel-input/build/js/utils.js"),
  });

  $("input#mobile_no").focusin(function () {
    const countryData = intl.getSelectedCountryData();
    $('input#phone_code').val(countryData.dialCode);
  });
}


if ($('#date').length > 0) {
  let options = {
    format: 'yyyy-mm-dd',
    minDate: new Date(),
    autohide: true,
  };
  window.datePicker = new Datepicker(document.getElementById('date'), options);
}


