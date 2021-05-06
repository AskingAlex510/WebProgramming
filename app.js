
function popup() {
    if (sessionStorage.getItem("consent") === null){
    // var x = document.getElementById("consentPopup")
    document.getElementById("consentPopup").style.display = 'block';
} else {
    document.getElementById("consentPopup").style.display = 'none';
}
}
    function consent() {
    sessionStorage.setItem("consent", "True");
    document.getElementById("consentPopup").style.display = 'none';
}

// keep the login status
function loggedStatus() {
    var key = localStorage.getItem("log-mail");
    if (key === null) {
        window.open("login.html");
    }
    else {
        window.open("account.html");
    }
}
