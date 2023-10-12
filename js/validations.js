function validateFname() {
    var field = document.regform.fname;
    var err = document.getElementById("errFname");

    if (field.value == "") {
        err.style.display = "block";
        return false;
    } else {
        err.style.display = "none";
    }
    return true;
}

function validatePhone() {
    var field = document.regform.phone;
    var err = document.getElementById("errPhone");

    if (field.value == "") {
        err.style.display = "block";
        return false;
    } else {
        err.style.display = "none";
    }
    return true;
}

function validateEmail() {
    var field = document.regform.email;
    var emailPattern = /^[a-zA-Z0-9_\.\-]+\@[a-zA-Z0-9\-]+\.[a-zA-Z\.]{2,5}$/;
    var err = document.getElementById("errorEmail");
    var errValid = document.getElementById("errValidEmail");

    if (field.value == "") {
        err.style.display = "block";
        return false;
    } else {
        err.style.display = "none";
        if (!emailPattern.test(field.value)) {
            errValid.style.display = "block";
            return false;
        } else {
            errValid.style.display = "none";
        }
    }
    return true;
}
function validateForm() {
    var fname = validateFname();

    var email = validateEmail();


    if (fname && email) {
        return true;
    } else {
        return false;
    }
}
