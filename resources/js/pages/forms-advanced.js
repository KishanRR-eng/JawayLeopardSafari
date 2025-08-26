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
    datesDisabled: (date) => {
      if (location.pathname.includes('gir-jungle')) {
        if ((date.getMonth() == 5 && date.getDate() > 15) || (date.getMonth() == 9 && date.getDate() < 16)) return true;
        if (date.getMonth() > 5 && date.getMonth() < 9) return true;
      }
      return false;
    }
  };

  if (location.pathname.includes('gir-devaliya')) {
    options.daysOfWeekDisabled = [3];
  }
  window.datePicker = new Datepicker(document.getElementById('date'), options);
}


