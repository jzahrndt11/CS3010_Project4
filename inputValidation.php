<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    //UserName Validation
    $userName = clean_input($_POST["userName"]);
    if (empty($userName)) {
        $userNameError = "<ul><li>User Name is required.</li></ul>";
        $isValid = false;
    } else {
        // check if username has less than 6 or more than 50 characters
        if (strlen($userName) < 6) {
            $userNameError = "<ul><li>Must be at least 6 characters.</li></ul>";
            $isValid = false;
        } elseif (strlen($userName) > 50) {
            $userNameError = "<ul><li>Must be less than 50 characters.</li></ul>";
            $isValid = false;
        }
    }

    //Password Validation
    $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,50}$/";

    $password = clean_input($_POST["password"]);
    if (empty($password)) {
        $passwordError = "<ul><li>Password is required.</li></ul>";
        $isValid = false;
    } else {
        if (!preg_match($passwordRegex, $password)) {
            $passwordError = "<h6>Password Requirements:</h6><ul><li>Must contain at least 8 characters.</li>
                                <li>Must Be less than 50 characters.</li><li>Must contain a capital letter, 
                                lowercase letter, one digit, and one special character.</li></ul>";
            $isValid = false;
        }
    }

    //Repeat Password Validation
    $extraPassword = clean_input($_POST["passwordVerification"]);
    if (empty($extraPassword)) {
        $extraPasswordError = "<ul><li>Password Verification is required.</li></ul>";
        $isValid = false;
    } else {
        if ($password != $extraPassword) {
            $extraPasswordError = "<ul><li>Passwords are not matching correctly!</li></ul>";
            $isValid = false;
        }
    }

    //First Name Validation
    $firstName = clean_input($_POST["firstName"]);
    if (empty($firstName)) {
        $firstNameError = "<ul><li>First Name is required.</li></ul>";
        $isValid = false;
    } else {
        // check if first name has more than 50 characters
        if (strlen($firstName) > 50) {
            $firstNameError = "<ul><li>Must be less than 50 characters.</li></ul>";
            $isValid = false;
        }
    }

    //Last Name Validation
    $lastName = clean_input($_POST["lastName"]);
    if (empty($lastName)) {
        $lastNameError = "<ul><li>Last Name is required.</li></ul>";
        $isValid = false;
    } else {
        // check if last name has more than 50 characters
        if (strlen($lastName) > 50) {
            $lastNameError = "<ul><li>Must be less than 50 characters.</li></ul>";
            $isValid = false;
        }
    }

    //Address Line 1 Validation
    $addy1 = clean_input($_POST["addressLine1"]);
    if (empty($addy1)) {
        $addy1Error = "<ul><li>Address Line #1 is required.</li></ul>";
        $isValid = false;
    } else {
        // check if address has more than 100 characters
        if (strlen($addy1) > 100) {
            $addy1Error = "<ul><li>Must be less than 100 characters.</li></ul>";
            $isValid = false;
        }
    }

    //Address Line 2 Validation
    $addy2 = clean_input($_POST["addressLine2"]);
    if (strlen($addy2) > 100) {
        $addy2Error = "<ul><li>Must be less than 100 characters.</li></ul>";
        $isValid = false;
    }

    //City Validation
    $city = clean_input($_POST["city"]);
    if (empty($city)) {
        $cityError = "<ul><li>City is required.</li></ul>";
        $isValid = false;
    } else {
        // check if city has more than 50 characters
        if (strlen($city) > 50) {
            $addy1Error = "<ul><li>Must be less than 50 characters.</li></ul>";
            $isValid = false;
        }
    }

    //State Validation
    if(isset($_POST["state"])){
        if(empty(trim($_POST["state"]))){
            $stateError = "<ul><li>State is required.</li></ul>";
            $isValid=false;
        }elseif(strlen(trim($_POST["state"]))> 52){
            $stateError = "<ul><li>Must be less than 52 characters.</li></ul>";
            $isValid=false;
        }else{
            $state=trim($_POST["state"]);
            $isValid=true;
        }
    }

//    $state = clean_input($_POST["state"]);
//    if (empty($state)) {
//        $stateError = "<ul><li>State is required.</li></ul>";
//        $isValid = false;
//    } else {
//        // check if state has more than 52 characters
//        if (strlen($state) > 52) {
//            $stateError = "<ul><li>Must be less than 52 characters.</li></ul>";
//            $isValid = false;
//        }
//    }

    //Zip Code Validation
    $zipCode1Regex = "/[0-9][0-9][0-9][0-9][0-9]/";
    $zipCode2Regex = "/[0-9][0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]/";

    $zipCode = clean_input($_POST["zipCode"]);
    if (empty($zipCode)) {
        $zipCodeError = "<ul><li>Zip Code is required.</li></ul>";
        $isValid = false;
    } else {
        if (strlen($zipCode) < 5) {
            $zipCodeError = "<ul><li>Invalid zip code format. - (xxxxx) or (xxxxx-xxxx)</li></ul>";
            $isValid = false;
        } elseif (strlen($zipCode) > 5) {
            if (!preg_match($zipCode2Regex, $zipCode)) {
                $zipCodeError = "<ul><li>Invalid zip code format. - (xxxxx) or (xxxxx-xxxx)</li></ul>";
                $isValid = false;
            }
        }
    }

    //Phone Number Validation
    $phoneRegex = "/[0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]/";

    $phone = clean_input($_POST["phoneNumber"]);
    if (empty($phone)) {
        $phoneError = "<ul><li>Phone Number is required.</li></ul>";
        $isValid = false;
    } else {
        // check if phone number is in correct format
        if (!preg_match($phoneRegex, $phone)) {
            $phoneError = "<ul><li>Invalid phone format. - (xxx-xxx-xxxx)</li></ul>";
            $isValid = false;
        }
    }

    //Email Validation
    $email = clean_input($_POST["email"]);
    if (empty($email)) {
        $emailError = "<ul><li>Email is required.</li></ul>";
        $isValid = false;
    } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            /*
            The filter_var() function is the easiest and safest way
            to check whether an email address is well-formed.
            */
            $emailError = "<ul><li>Invalid email format.</li></ul>";
            $isValid = false;
        }
    }

    //Gender Validation
    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderError = "<ul><li>Gender is required.</li></ul>";
            $isValid = false;
        }
    } else {
        $genderError = "<ul><li>Gender is required.</li></ul>";
        $isValid = false;
    }

    //Marital Status Validation
    if (isset($_POST["maritalStatus"])) {
        $maritalStatus = clean_input($_POST["maritalStatus"]);
        if (empty($_POST["maritalStatus"])) {
            $maritalStatusError = "<ul><li>Marital Status is required.</li></ul>";
            $isValid = false;
        }
    } else {
        $maritalStatusError = "<ul><li>Marital Status is required.</li></ul>";
        $isValid = false;
    }

    //Date of Birth Validation
    $dateOfBirthRegex = "/^\d{2}\/\d{2}\/\d{4}$/";
    $dateOfBirth = clean_input($_POST["birthDay"]);
    if (empty($dateOfBirth)) {
        $dateOfBirthError = "<ul><li>Date of Birth is required.</li></ul>";
        $isValid = false;
    }
//    } else {
//        if (!preg_match($dateOfBirthRegex, $dateOfBirth)) {
//            $dateOfBirthError = "<ul><li>Invalid date of birth format. - (MM/DD/YYYY)</li></ul>";
//            $isValid = false;
//        }
//    }
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>