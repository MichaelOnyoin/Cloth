function validation()  
        {  
            var id=document.login.Email.value;  
            var ps=document.login.Password.value;  
            if(id.length=="" && ps.length=="") {  
                alert("Email field and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("Email field is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  