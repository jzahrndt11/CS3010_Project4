document.addEventListener('DOMContentLoaded', function() {

    //-------------------------- UserName Verification ------------------------------------------
    const usrInput = document.getElementById('userName');
    const usrError = document.getElementById('userNameError')

    usrInput.addEventListener('blur',usrValidation);
    function usrValidation() {
        const usrValue = usrInput.value.trim();
        const length = usrValue.length

        if (length < 6) {
            //error message
            usrError.textContent="Required Field: (Minimum-6 Characters) (Maximum-50 Characters)";
            usrInput.classList.add("invalid");
            document.getElementById('submit').disabled = true;
        } else {
            usrError.textContent="";
            usrInput.classList.remove("invalid");
            usrInput.classList.add("valid");
            document.getElementById('submit').disabled = false;
        }
    }

    //-------------------------- Password Matching Verification ------------------------------------------
    const psw1 = document.getElementById("password");
    const psw2 = document.getElementById("passwordVerification");
    const errMsg = document.getElementById('matchingError');

    psw1.addEventListener('input',passwordMatcher)
    psw2.addEventListener('input',passwordMatcher)
    function passwordMatcher() {
        if (psw1.value !== psw2.value || psw2.value !== psw1.value) {
                errMsg.textContent='Passwords do not Match. Please try again!'
                document.getElementById('submit').disabled = true;
                psw1.classList.add('invalid');
                psw2.classList.add('invalid');
        }   else {
                errMsg.textContent=''
                document.getElementById('submit').disabled = false;
                psw1.classList.remove('invalid');
                psw2.classList.remove('invalid');
                psw1.classList.add('valid');
                psw2.classList.add('valid');
        }
    }

    //-------------------------- FirstName Verification ------------------------------------------
    const fNameInput = document.getElementById('firstName');
    const fNameError = document.getElementById('firstNameError');

    fNameInput.addEventListener('blur',fNameValidation);
    function fNameValidation() {
        const fNameValue = fNameInput.value.trim();
        const length = fNameValue.length

        if (length < 1) {
            //error message
            fNameError.textContent="Required Field: (Maximum-50 Characters)";
            fNameInput.classList.add("invalid");
            document.getElementById('submit').disabled = true;
        } else {
            fNameError.textContent="";
            fNameInput.classList.remove("invalid");
            fNameInput.classList.add("valid");
            document.getElementById('submit').disabled = false;
        }
    }

    //-------------------------- LastName Verification ------------------------------------------
    const lNameInput = document.getElementById('lastName');
    const lNameError = document.getElementById('lastNameError');

    lNameInput.addEventListener('blur',lNameValidation);
    function lNameValidation() {
        const lNameValue = lNameInput.value.trim();
        const length = lNameValue.length

        if (length < 1) {
            //error message
            lNameError.textContent="Required Field: (Maximum-50 Characters)";
            lNameInput.classList.add("invalid");
            document.getElementById('submit').disabled = true;
        } else {
            lNameError.textContent="";
            lNameInput.classList.remove("invalid");
            lNameInput.classList.add("valid");
            document.getElementById('submit').disabled = false;
        }
    }

    //-------------------------- AddressLine1 Verification ------------------------------------------
    const addyInput = document.getElementById('addressLine1');
    const addyError = document.getElementById('addressLine1Error');

    addyInput.addEventListener('blur',addyValidation);
    function addyValidation() {
        const addyValue = addyInput.value.trim();
        const length = addyValue.length

        if (length < 1) {
            //error message
            addyError.textContent="Required Field: (Maximum-50 Characters)";
            addyInput.classList.add("invalid");
            document.getElementById('submit').disabled = true;
        } else {
            addyError.textContent="";
            addyInput.classList.remove("invalid");
            addyInput.classList.add("valid");
            document.getElementById('submit').disabled = false;
        }
    }

    //-------------------------- City Verification ------------------------------------------
    const cityInput = document.getElementById('city');
    const cityError = document.getElementById('cityError');

    cityInput.addEventListener('blur',cityValidation);
    function cityValidation() {
        const cityValue = cityInput.value.trim();
        const length = cityValue.length

        if (length < 1) {
            //error message
            cityError.textContent="Required Field: (Maximum-50 Characters)";
            cityInput.classList.add("invalid");
            document.getElementById('submit').disabled = true;
        } else {
            cityError.textContent="";
            cityInput.classList.remove("invalid");
            cityInput.classList.add("valid");
            document.getElementById('submit').disabled = false;
        }
    }

    //-------------------------- State Verification ------------------------------------------
    const stateInput = document.getElementById('state');
    const stateError = document.getElementById('stateError');

    stateInput.addEventListener('blur',stateValidation);
    function stateValidation() {
        const stateValue = stateInput.value.trim();
        const length = stateValue.length

        if (length < 1) {
            //error message
            stateError.textContent="Required Field: (Please select your State from drop box)";
            stateInput.classList.add("invalid");
            document.getElementById('submit').disabled = true;
        } else {
            stateError.textContent="";
            stateInput.classList.remove("invalid");
            stateInput.classList.add("valid");
            document.getElementById('submit').disabled = false;
        }
    }

    //-------------------------- ZipCode Verification ------------------------------------------
    const zipInput = document.getElementById('zipCode');
    const zipError = document.getElementById('zipCodeError');

    zipInput.addEventListener('input',zipCodeValidation);

    function zipCodeValidation() {
        let zipValue = zipInput.value.trim();
        let length = zipValue.length;

        zipValue = zipValue.replace('-', '');

        if (isNaN(zipValue) || length < 5) {
            zipError.textContent = "Required Field: (Valid Zip Code 5-9 digits)";
            zipInput.classList.add('invalid');
        } else {
            let formattedZip;
            if (length === 5) {
                formattedZip = zipValue;
            } else {
                formattedZip = `${zipValue.slice(0, 5)}${zipValue.slice(5).replace(/[^0-9]/g, '')}`;
                if (formattedZip.length > 5) {
                    formattedZip = `${formattedZip.slice(0, 5)}-${formattedZip.slice(5)}`;
                }
            }
            zipInput.value = formattedZip;
            zipError.textContent = '';
            zipInput.classList.remove('invalid');
            zipInput.classList.add('valid');
        }
    }

    //-------------------------- Phone Number Verification ------------------------------------------
    const phoneNumInput = document.getElementById('phoneNumber');
    const phoneNumError = document.getElementById('phoneNumberError');

    phoneNumInput.addEventListener('blur',phoneNumValidation);

    function phoneNumValidation() {
        let phoneNumValue = phoneNumInput.value.trim();
        let length = phoneNumValue.length;

        if (length !== 10) {
            phoneNumError.textContent = 'Required Field: (Please enter valid phone number)';
            phoneNumInput.classList.add('invalid');
            document.getElementById('submit').disabled = true;
        } else {
            const formattedPhone = `${phoneNumValue.slice(0, 3)}-${phoneNumValue.slice(3, 6)}-${phoneNumValue.slice(6)}`;
            phoneNumInput.value = formattedPhone;
            phoneNumError.textContent='';
            phoneNumInput.classList.remove('invalid');
            phoneNumInput.classList.add('valid');
            document.getElementById('submit').disabled = false;
        }
    }

});