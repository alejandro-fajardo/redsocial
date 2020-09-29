function changeRegister(){
    document.getElementById("register").style.opacity = 1;
    document.getElementById("register").style.display = "block";
    document.getElementById("content_login_div").style.opacity = 0;
    document.getElementById("content_login_div").style.display = "none";
}
function changeLogin(){
    document.getElementById("register").style.opacity = 0;
    document.getElementById("register").style.display = "none";
    document.getElementById("content_login_div").style.opacity = 1;
    document.getElementById("content_login_div").style.display = "block";
}