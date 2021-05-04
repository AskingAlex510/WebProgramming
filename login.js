function login() {
    var email = document.querySelector("#mail");
    var pass = document.querySelector("#pswd");
   
    if (pass.value == "password") {
        // alert("Login sucessful, loading account informations");
        // window.location="account.html";
        locate();
    }else if (email.value == '') {
        alert("Please enter your email");       
    }
    else if (pass.value == '') {
        alert("please enter your password");
    }
    else {
        alert("Wrong credentials, please enter again");
        clear()
    }

}

function clear() {
    document.getElementById("mail").value='';
    document.getElementById("pswd").value='';
}

function locate() {
    window.location = "account.html";
}