
function validar() {
    var pass1 = document.registro.pass.value;
    var pass2 = document.registro.pass1.value;
    var name = document.registro.name.value;
    var user = document.registro.user.value;
    var date = document.registro.date.value;
    var email = document.registro.email.value;
    var ok = document.registro.ok.value;
    var edad;




    //valido los campos desiguales
    if (name == "") {
        document.registro.name.style.borderColor = "#E34234";
    }
    //valido que los campos esten llenos
    else if (user == "") {
        document.registro.user.style.borderColor = "#E34234";
    }
    // valido que el nombre no este vacio
    else if (pass1 == "" || pass2 == "") 
    {
        document.registro.pass.style.borderColor = "#E34234";
        document.registro.pass1.style.borderColor = "#E34234";
    }
    // valido el usuario
    else if (pass1 != pass2) {
            //alert("Passwords Do not match");
            document.registro.pass.style.borderColor = "#E34234";
            document.registro.pass1.style.borderColor = "#E34234";
            alert('no son iguales');
    }
    else if (email == "") {
        alert('inserte email');
        document.registro.email.style.borderColor = "#E34234";
    }
    // valido terminos
    else if (ok == 1) {

        javascript: document.registro.submit();

    }
    //valido los campos que sean iguales
    else {
        document.registro.ok.style.borderColor = "#E34234";
        alert('Acepte terminos y condiciones');
    }

}


