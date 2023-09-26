function serviceCheck() {
        let first, last, email, service;
        
        first = document.getElementById("firstname").value;
        last = document.getElementById("lastname").value;
        email = document.getElementById("emailaddress").value;
        service = document.getElementById("service").value;
        
        //errors
        firsterror = document.getElementById("sfirsterror").innerHTML = "";
        lasterror = document.getElementById("slasterror").innerHTML = "";
        emailerror = document.getElementById("semailerror").innerHTML = "";
        serviceerror = document.getElementById("sserviceerror").innerHTML = "";
        
        if(first == "") {
                firsterror.innerHTML = "Required Field";
        }
        else if(last == "") {
                lasterror.innerHTML = "Required Field";
        }
        else if(email == "") {
                emailerror.innerHTML = "Required Field";
        }
        else if(last == "") {
                serviceerror.innerHTML = "Required Field";
        }
        else {
        document.getElementById("success").innerHTML = "Interest Form Received!";
        }
         
        
}