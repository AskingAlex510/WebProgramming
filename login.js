function login() {
    var email = document.querySelector("#mail");
    var pass = document.querySelector("#pswd");
    if (pass.value == "password" && email.value != "" ) {
        localStorage.setItem("log-mail", email.value);
        alert("Login sucessful, loading account informations");
        window.location = "account.html";
    }
    else if (email.value== ''){
        alert("Please enter your email");
    } 
    else if (pass.value==""){
        alert("please enter your password");
    }else{
        alert("Wrong credentials, please enter again");
        window.location = "login.html";
    }
}

