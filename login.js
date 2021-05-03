function login() {
    var email = document.getElementById("mail").value;
    var pass = document.getElementById("pswd").value;
   
    if (pass == "password") {
        alert("Login sucessful, loading account informations");
        window.location="account.html";
    }else if (email == '') {
        alert("Please enter your email");       
    }
    else if (pass == '') {
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
