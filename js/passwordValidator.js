var psw = document.getElementById("password");
var lowLetter = document.getElementById("lowercase");
var capLetter = document.getElementById("capital");
var num = document.getElementById("number");
var leng = document.getElementById("length");
var sChar = document.getElementById("special");

psw.onfocus = function () {
    document.getElementById("passwordMessage").style.display = "block";
}

psw.onblur = function () {
    document.getElementById("passwordMessage").style.display = "none";
}

psw.onkeyup = function () {
    //Validate lowercase letters
    if(psw.value.match(/[a-z]/g)) {
        lowLetter.classList.remove("invalid");
        lowLetter.classList.add("valid");
    } else {
        lowLetter.classList.remove("valid");
        lowLetter.classList.add("invalid");
    }

    //Validate capital letters
    if(psw.value.match(/[A-Z]/g)) {
        capLetter.classList.remove("invalid");
        capLetter.classList.add("valid");
    } else {
        capLetter.classList.remove("valid");
        capLetter.classList.add("invalid");
    }

    //Validate numbers
    if(psw.value.match(/[0-9]/g)) {
        num.classList.remove("invalid");
        num.classList.add("valid");
    } else {
        num.classList.remove("valid");
        num.classList.add("invalid");
    }

    //Validate length
    if(psw.value.length >= 8 && psw.value.length <= 50) {
        leng.classList.remove("invalid");
        leng.classList.add("valid");
    } else {
        leng.classList.remove("valid");
        leng.classList.add("invalid");
    }

    //Validate special character
    if(psw.value.match(/[^A-Za-z0-9]/g)) {
        sChar.classList.remove("invalid");
        sChar.classList.add("valid");
    } else {
        sChar.classList.remove("valid");
        sChar.classList.add("invalid");
    }
}

var psw2 = document.getElementById("passwordVerification");
var lowLetter2 = document.getElementById("lowercase2");
var capLetter2 = document.getElementById("capital2");
var num2 = document.getElementById("number2");
var leng2 = document.getElementById("length2");
var sChar2 = document.getElementById("special2");
var equalTo = document.getElementById("equal");

psw2.onfocus = function () {
    document.getElementById("passwordMessage2").style.display = "block";
}

psw2.onblur = function () {
    document.getElementById("passwordMessage2").style.display = "none";
}

psw2.onkeyup = function () {
    //Validate lowercase letters
    if(psw2.value.match(/[a-z]/g)) {
        lowLetter2.classList.remove("invalid");
        lowLetter2.classList.add("valid");
    } else {
        lowLetter2.classList.remove("valid");
        lowLetter2.classList.add("invalid");
    }

    //Validate capital letters
    if(psw2.value.match(/[A-Z]/g)) {
        capLetter2.classList.remove("invalid");
        capLetter2.classList.add("valid");
    } else {
        capLetter2.classList.remove("valid");
        capLetter2.classList.add("invalid");
    }

    //Validate numbers
    if(psw2.value.match(/[0-9]/g)) {
        num2.classList.remove("invalid");
        num2.classList.add("valid");
    } else {
        num2.classList.remove("valid");
        num2.classList.add("invalid");
    }

    //Validate length
    if(psw2.value.length >= 8 && psw.value.length <= 50) {
        leng2.classList.remove("invalid");
        leng2.classList.add("valid");
    } else {
        leng2.classList.remove("valid");
        leng2.classList.add("invalid");
    }

    //Validate special character
    if(psw2.value.match(/[^A-Za-z0-9]/g)) {
        sChar2.classList.remove("invalid");
        sChar2.classList.add("valid");
    } else {
        sChar2.classList.remove("valid");
        sChar2.classList.add("invalid");
    }

    //Validate password1 and password2 are the same
    if (psw.value != psw2.value) {
        equalTo.classList.remove("valid");
        equalTo.classList.add("invalid");
    } else {
        equalTo.classList.remove("invalid");
        equalTo.classList.add("valid");
    }
}