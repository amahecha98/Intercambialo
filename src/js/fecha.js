function validar() {

    var date = document.registro.date.value;
    //var datearray = date.split("/");
    //var newdate = datearray[1] + '/' + datearray[0] + '/' + datearray[2];


    var birthday = new Date(date);
    var today = new Date();
    var years = today.getFullYear() - birthday.getFullYear();

    // Reset birthday to the current year.
    birthday.setFullYear(today.getFullYear());

    // If the user's birthday has not occurred yet this year, subtract 1.
    if (today > birthday) {
        years--;
    }else if (years >=18){
        
    }

}
