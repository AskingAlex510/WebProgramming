const form = document.getElementById('register');

const email = document.getElementById('mail');

const phone = document.getElementById('phone');

const pswd = document.getElementById('pswd');
const re_pswd = document.getElementById('pswd-con');

const fname = document.getElementById('name_first');
const lname = document.getElementById('name_last');
const address = document.getElementById('address');
const city = document.getElementById('city');
const zip = document.getElementById('zip');

form.addEventListener('submit', (e) => {
    e.preventDefault()
    checkInputs()
});

function checkInputs() {
    //email check
    const emailValue = email.value.trim();
    const regExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (regExp.test(emailValue) == false){
        alert("Invalid Email address.")
    }
        //phone check
        const phoneValue = phone.value.trim();
        const regExp1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
        if (regExp1.test(phoneValue) == false) {
            alert("Invalid phone number.")
        }
        //password check
        const pswdValue = pswd.value
        const regExp2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/
        if (regExp2.test(pswdValue) == false) {
            alert("Invalid Password. Must contain 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character.")
        }
        //re password check
        const re_pswdValue = re_pswd.value
        if(re_pswdValue !== pswdValue){
            alert("Passwords do not match.")
        }
        //fname check
        const fnameValue = fname.value.trim();
        if(fnameValue.length < 3){
        alert("First name value too short. ")
        }
        //lname check
         const lnameValue = lname.value.trim();
         if(lnameValue.length < 3){
         alert("Last name value too short. ")
         }
        //address check
        const addressValue = address.value.trim();
         if(addressValue.length < 3){
         alert("Address value too short. ")
         }
        //city check
         const cityValue = city.value.trim();
         if(cityValue.length < 3){
        alert("City value too short. ")
        }
        //zip check
        const zipValue = zip.value
        const regExp3 = /[0-9]/
        if (regExp3.test(zipValue) == false || zipValue.length < 4 || zipValue.length > 7){
            alert("Zip code is invalid.")
        }
}
