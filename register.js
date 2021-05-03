console.log("this file is working");

function validMail(email) {
    var mailPatten = /^[a-zA-Z0-9]([a-zA-Z0-9]\.?){1,}[a-zA-Z0-9]@[a-zA-Z0-9]+(\.?[a-zA-Z0-9]){1,}\.[a-zA-Z0-9]{2,5}$/;
    if (mailPatten.test(email)){
        return true;
    }
    
    else{
        alert("Wrong email format, please enter again");
        return false;
    }
}

/*  Original Javascript soursed and adapted for educational purposes:
    https://www.w3resource.com/javascript/form/email-validation.php */

function validPhone(phoneNum) {
    var phonePatten = /^[^.-\s]([0-9][.-\s]?){9,11}[^.-\s]$/;
    if (phonePatten.test(phoneNum)) {
        return true;
    }
    else {
        alert("please re-enter your phone number");
        return false;
    }

}
/*  Original Javascript soursed and adapted for educational purposes:
    https://www.w3resource.com/javascript/form/email-validation.php */

function validPass(passWord) {
    var passPatten = /([a-z]+[A-Z]+[0-9]+[!@#$%^&*]+){8,20}/;
    if (passPatten.test(passWord)) {
        return true;
    }

    else{
        alert("please re-enter your password");
        return false;
    }

}

function confirmPassword() {
    var pass = document.getElementById("pswd");
    var confirmPass = document.getElementById("pswd-con");

    if (pass.value !== confirmPass.value) {
        return false;
    }
    return true;
}

/*  Original Javascript soursed and adapted for educational purposes:
    https://stackoverflow.com/questions/7770187/returning-a-boolean-value-in-a-javascript-function */ 

function validStr(str) {
    const patten = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{3,}/;

    if (patten.test(str)) {
        return true;
    }
    else {
        alert("please re-enter your credentials");
        return false;
    }
}

function validZip(zip) {
    var zipPatten = /[0-9]{4,6}/;

    if (zipPatten.test(zip)) {
        return true;
    }
    else {
        return false;
    }
}

