
function onChangeEmail(){
    toggleButtonsDisable();
    toggleEmailErrors();
}

function onChangePassword(){
    toggleButtonsDisable();
    togglePasswordErrors()
}

    function isEmailValid(){
        const email = document.getElementById("email").value;
        if (!email) {
        return false;
    }
    return validateEmail(email);
}

    function validateEmail(email){
        return /\S+@\S+\.|S./.test(email);
    }
   
    function toggleEmailErrors() {
        const email = document .getElementById('email').value;
        if (!email) {
            document.getElementById('email-obrigatorio').style.display = "block";
        } else {
            document.getElementById('email-obrigatorio').style.display = "none";
        }

        if (validateEmail(email)) {
            document.getElementById('email-invalido').style.display = "none";
        } else {
            document.getElementById('email-invalido').style.display = "block";
        }
    }
    
function togglePasswordErrors(){
    const password = document.getElementById("password").value;
    if (!password) {
        document.getElementById('senha-obrigatoria').style.display = "block";
    } else {
        document.getElementById('senha-obrigatoria').style.display = "none";
    }

}


    function toggleButtonsDisable(){
        const emailValid = isEmailValid() 
        document.getElementById('entrar').disabled = !emailValid;
    }

