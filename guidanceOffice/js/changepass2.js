function checkPass()
{
    var pass1 = document.getElementById('newpassword');
    var pass2 = document.getElementById('conpassword');
    var message = document.getElementById('check');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Password Match!"
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password Do Not Match!"
    }
} 