//Signup and contact form validation functions
function validate_signup() {
    var phone_entry = document.querySelector("#phone").value;
    if (phone_entry.length != 10 || isNaN(phone_entry)) {
        alert("Phone number is invalid or is formatted incorrectly. Please don't include any spaces or symbols.");
        return false;
    }
    else {
        alert("Thank you for submitting the sign-up form! We'll get in touch with you soon.");
    }
}

function validate_contact() {
    alert("Thank you for submitting the contact form! We'll address your message as soon as we can.");
}