function actualizar() {
    var name = document.updat.name.value;
    var lastname = document.updat.lastname.value;
    var email = document.updat.email.value;
    var phone = document.updat.phone.value;
    var profesion = document.updat.profession.value;
    var des= document.updat.description.value;
    var ciuda = document.updat.city.value;


        //valido los campos n sean iguales
         if (email == "" || name== "" || lastname == "" || phone == "" || profesion == "" || des == ""){
            alert('nose puede dejar espacios vacios');
        }
        //valido los campos que sean iguales
        else {
        alert('Actulizo');
        javascript:document.updat.submit();
        
        
    }

}
