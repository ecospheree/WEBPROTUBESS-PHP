let username = document.getElementById("Uname-id");
let password = document.getElementById("P-id");
var formlogn = document.getElementById("formLogin-id");
var statusLogin = localStorage.getItem("statusLogin");
var statusAdmin = localStorage.getItem("statusAdmin");

function login(){
    if(username.value == "" || password.value == ""){
        window.alert("Masukkan Password/Username !!")
    }else if(username.value == "Iqnaz" && password.value == "aa"){
        localStorage.setItem("statusLogin", "true");
        localStorage.setItem("statusAdmin", "false");
    }else if(username.value == "AlifAdmin" && password.value == "alif123"){
        formlogn.action = "/Dashboard";
        window.alert("Anda Login Sebagai Admin")
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
    if(statusLogin == "false"){
        // window.alert("Harap Login untuk menggunakan fitur ini");
        porfileBar.style.display = 'none';
        signOutBar.style.display = 'none';
        return false;
    }else{
        LoginBar.style.display = 'none';
        signUpBar.style.display = 'none';
        return true;
    }
}

function cekAdmin(){
    var DropdownMenu = document.getElementById("dropdown");
    statusAdmin = false;
    if(statusAdmin == "false"){
        DropdownMenu.style.display = 'none';
        return false;
    }
    var porfileBar = document.getElementById("ProfileBar");
    porfileBar.innerHTML = '<a href="/Profile" class="form-text" style="color: black;">Admin</a>';
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