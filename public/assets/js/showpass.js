

function showPassword() {
    let passwordField = document.getElementById("password");
    let passwordField2 = document.getElementById("password_confirmation");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        if(passwordField2 !== null) {
            passwordField2.type = "text";
        }
    }
    else {
        passwordField.type = "password";
        if(passwordField2 !== null) {
            passwordField2.type = "password";
        }
    }
    let eyeIcon = document.getElementById("eye-icon");
    let eyeIcon2 = document.getElementById("eye-icon-2");
    if (eyeIcon2 !== null) {
        if (eyeIcon2.classList.contains("bi-eye-slash-fill")) {
            eyeIcon2.classList.remove("bi-eye-slash-fill");
            eyeIcon2.classList.add("bi-eye-fill");
        } else {
            eyeIcon2.classList.remove("bi-eye-fill");
            eyeIcon2.classList.add("bi-eye-slash-fill");
        }   
    }


    if (eyeIcon.classList.contains("bi-eye-slash-fill")) {
        eyeIcon.classList.remove("bi-eye-slash-fill");
        eyeIcon.classList.add("bi-eye-fill");
    } else {
        eyeIcon.classList.remove("bi-eye-fill");
        eyeIcon.classList.add("bi-eye-slash-fill");
    }   
}






