function valida() {
    var pass1 = document.updata.pass.value;
    var pass2 = document.updata.pass1.value;

    
   if (pass1 == "" && pass2 == ""){
        document.updata.pass.style.borderColor = "#E34234";
        document.updata.pass1.style.borderColor = "#E34234";
    }else if(pass1 == "" || pass2 == ""){
        document.updata.pass.style.borderColor = "#E34234";
        document.updata.pass1.style.borderColor = "#E34234";
    }else{
        document.updata.submit();
        
    }
}
