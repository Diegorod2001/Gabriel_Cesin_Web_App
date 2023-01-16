function login(){
    var user, password

    user = document.getElementById("username").value;
    password = document.getElementById("contraseña").value;

    if(user == "marcris" && password == "1***"){
        window.location.href= "admin.php";
    } else{
        alert("Datos Incorrectos")
    }
}