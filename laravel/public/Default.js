let username = document.getElementById("Uname-id");
let password = document.getElementById("P-id");
var formlogn = document.getElementById("formLogin-id");
var statusLogin = localStorage.getItem("statusLogin");
var statusAdmin = localStorage.getItem("statusAdmin");

function login(){
    formlogn.action = "/Dashboard";
    if(username.value == "" || password.value == ""){
        window.alert("Masukkan Password/Username !!")
    }else if(username.value == "Iqnaz" && password.value == "aa"){
        //formlogn.action = "Dashboard_Login.html";
        localStorage.setItem("statusLogin", "true");
        localStorage.setItem("statusAdmin", "false");
    }else if(username.value == "AlifAdmin" && password.value == "alif123"){
        window.alert("Anda Login Sebagai Admin")
        //formlogn.action = "Dashboard.html";
        localStorage.setItem("statusLogin", "true");
        localStorage.setItem("statusAdmin", "true");
    }else{
        formlogn.action = "/LoginCheck";
        localStorage.setItem("statusLogin", "true");
        localStorage.setItem("statusAdmin", "false");
    }
}

function cekLogin(){
    var LoginBar = document.getElementById("LoginBar");
    var signUpBar = document.getElementById("SignUpBar");
    var porfileBar = document.getElementById("ProfileBar");
    var signOutBar = document.getElementById("SignOutBar");
    var profBar = document.getElementById("ProfBar");
    if(statusLogin == "false"){
        //window.alert("Harap Login untuk menggunakan fitur ini");
        porfileBar.style.display = 'none';
        signOutBar.style.display = 'none';
        profBar.style.display = 'none';
        return false;
    }else{
        profBar.style.display = 'none';
        LoginBar.style.display = 'none';
        signUpBar.style.display = 'none';
        return true;
    }
}

function cekAdmin(){
    var DropdownMenu = document.getElementById("dropdown");
    if(statusAdmin == "false"){
        DropdownMenu.style.display = 'none';
        return false;
    }
    var porfileBar = document.getElementById("ProfileBar");
    porfileBar.innerHTML = '<a href="/Profile" class="form-text" style="color: white;">Admin</a>';
}

function LogOut(){
    localStorage.setItem("statusLogin", "false");
    localStorage.setItem("statusAdmin", "false");
}


function AlertLogin(){
    if(statusLogin == "false"){
        window.alert("Harap Login untuk menggunakan fitur ini");
        return false;
    }else{
        location.href = "/Create-Artikel";
        return true;
    }
}