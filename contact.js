const form = document.getElementById('contact');

const name = document.getElementById('name');

const email = document.getElementById('mail');

const phone = document.getElementById('phone');

const pref_phone = document.getElementById('Pphone');

const pref_mail = document.getElementById('Pmail');

const mon = document.getElementById('mon');
const tue = document.getElementById('tue');
const wed = document.getElementById('wed');
const thu = document.getElementById('thu');
const fri = document.getElementById('fri');
const sat = document.getElementById('sat');
const sun = document.getElementById('sun');

form.addEventListener('submit', (e) => {
    e.preventDefault()
    checkInputs()
});

function checkInputs() {
    //name check
    const nameValue = name.value.trim();

    if(nameValue.length < 3){
        alert("Name value too short. ")
    }
    //email check
    const emailValue = email.value.trim();
    const regExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (regExp.test(emailValue) == false){
        alert("Invalid Email address.")
    }
    //phone check
    const phoneValue = phone.value.trim();
    const regExp1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
    if (regExp1.test(phoneValue) == false){
        alert("Invalid phone number.")
    }
    //preferred contact check
    if(pref_phone.checked == false && pref_mail.checked == false){
        alert("You must select a preferred contact method.")
    }
    //availability check
    if(mon.checked == false && tue.checked == false && wed.checked == false && thu.checked == false && fri.checked == false && sat.checked == false && sun.checked == false){
        alert("You must select atleast one available day.")
    }
    alert("Your contact for has been successfully submitted!")
    this.submit()
}
