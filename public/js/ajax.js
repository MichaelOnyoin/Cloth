function _(el){
    return document.getElementById(el);
}
function ajax_data(php_file,el,send_data){
    _(el).innerHTML="Logging...";
    var hr=new XMLHttpRequest();

    hr.open('POST','php_file',true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange=function(){
        if(hr.readyState==4 && hr.status==200){
            _(el).innerHTML=hr.responseText;
        }
    };
    hr.send(send_data);
}
function signup(){
    var formdata= new FormData();
    var ajax= new XMLHttpRequest();
    var email=_("email").value;
    var password=_("password").value;

    formdata.append("email",email);
    formdata.append("password",password);

    ajax_data.open("POST","http://localhost:8080/Cloth/register");
    ajax_data.send(formdata);
    ajax_data.onreadystatechange= function(){
        _("register_response").innerHTML=ajax.responseText;
    };

}
function signup_page(){
    ajax_data('http://localhost:8080/Cloth/register','page',null);
}
function login_page(){
    ajax_data('http://localhost:8080/Cloth/login','page',null);
}

function login(){
    var email=$('#Email').val();
    var password=$('#Password').val();
    $.ajax({
        type:"POST",
        url:"http://localhost:8080/Cloth/login",
        data:{
            email: Email,
            password: Password
        },
        success:function(response){
            $('#login-response').html(response);
            if(response=="login"){
                $('#login-response').html("Please Wait Redirecting...");
                setTimeout(function(){
                    window.location="http://localhost:8080/Cloth/men";


                },5000);
            }
        }
    })
}
