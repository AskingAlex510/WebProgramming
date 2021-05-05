function validateForm() {
    // Begin name length Validation
    var x = document.forms["contact"]["name"].length;

    if (x < 3) {
        alert("Name invalid. Must be 3 or more characters.")
    }
    //End name length validation
    //Begin email validation
    var y = document.forms["contact"]["mail"];

    function validateEmail(email) {
        const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        return re.test(email);
    }
    if(validateEmail(y) == false){
        alert("Email address invalid.")
    }
    //End email validation
    //Begin phone validation
    var z = document.forms["contact"]["phone"];

    function validatePhone(phone) {
        const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
        return re.test(phone);
    }
    if(validatePhone(z) ==false){
        alert("Phone number invalid.")
    }
    //End phone validation
    //Begin preferred contact validation
    var c = document.forms["contact"]["Pmail"];
    var a = document.forms["contact"]["Pphone"];
    if(c&&a==null){
        alert("One preferred contact method must be selected.")
    }
    //End preferred contact validation
    //Begin availability validation
    var d = document.forms["contact"]["available"];
    if(d==null){
        alert("At-least one contact date must be selected.")
    }
    //End availability validation
    //Begin message validation

    //End message validation
}
