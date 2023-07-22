

// ---- Dark-Light-Mode Switch -----------------------------------------------------------------------------------------
/**
 * Get value of CSS-Element.
 * @param propKey
 * @returns {string}
 */
const getCSSCustomProp = (propKey) => {
  let response = getComputedStyle(document.documentElement).getPropertyValue(propKey);
  if (response.length) {
    response = response.replace(/['"]/g, '').trim();
  }
  return response;
};

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

if (getCSSCustomProp('--color-mode') === 'dark') toggleSwitch.checked = true;

/**
 * Switch dark-light-mode
 * @param e
 */
function switchTheme(e) {
  e.preventDefault();

  if (e.target.checked) {
    document.documentElement.setAttribute('data-user-color-scheme', 'dark');
  }
  else {
    document.documentElement.setAttribute('data-user-color-scheme', 'light');
  }
}
toggleSwitch.addEventListener('change', switchTheme, false);
// ---------------------------------------------------------------------------------------------------------------------



// ---- Contact form interpretation
// ---- Update: 2019-02-12 for Bootstrap v4.3x
// ---------------------------------------------------------
$(function() {

  // ---- Language Settings
  let language = "en";
//  let language = "de";
  // ----------------------

  const msgGraphic  = '<div class="text-center fa-3x"><i class="fas fa-spinner fa-spin"></i></div>';

  let msgEmail, msgEmpty, msgNotSent, msgNoPhpFile, msgServer, msgEquation1, msgEquation2, msgSuccess, fieldName,
    fieldEmailFormat, fieldEmail, fieldMessage, fieldHumanResult, fieldHuman, humanQuestion, humanEquation, result,
    goodToGoName, goodToGoEmail, goodToGoMsg, goodToGoHuman;

  if (language !== "de") {
    msgEmail          = 'Please check your email address';
    msgEmpty          = 'You must fill all the form fields to proceed!';
    msgNotSent        = 'Internal error. E-mail was not sent. Please try again!';
    msgNoPhpFile      = 'We could not fetch the data from the server. Please try again!';
    msgServer         = 'Request can not be send';
    msgEquation1      = 'Please check the equation. The result is NOT <strong>';
    msgEquation2      = '</strong>.';
    msgSuccess        = 'Your email was sent successfully.';
    fieldName         = 'Please enter your name.';
    fieldEmailFormat  = 'Check the formatting of your email address and try again.';
    fieldEmail        = 'Please enter your email address.';
    fieldMessage      = 'Please enter your message.';
    fieldHumanResult  = 'The result is wrong.';
    fieldHuman        = 'Please enter the sum of the equation.';
    humanQuestion     = 'Are you Human or a Bot?';
    humanEquation     = 'What is';

    $('#subject').attr('placeholder', 'Your Subject');
    // $('#email').attr('placeholder', 'Your e-mail address');
    $('#message').attr('placeholder', 'Enter Your Message');
    // $('#human').attr('placeholder', 'Answer?');
    $('#submit').html('Send Message<i class="fab fa-telegram-plane pl-2"></i>');
    $('#reset').html('Delete Message<i class="far fa-times-circle pl-2"></i>').on('click', function(){location.reload();});
  }

});
