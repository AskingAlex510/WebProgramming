function login() {
    var email = document.querySelector("#mail");
    var pass = document.querySelector("#pswd");
    if (email.value == '') {
        alert("Please enter your email");       
    }
    if (pass.value == "password" && email.value != "" ) {
        alert("Login sucessful, loading account informations");
        window.open = "account.html";
    }else if (pass.value==""){
        alert("please enter your password");
    }else{
        alert("Wrong credentials, please enter again");
    }



}
