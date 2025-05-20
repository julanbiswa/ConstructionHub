const NavBar = document.getElementById("nav-bar");
const btn = document.getElementById("show-hide");
const registerbtn = document.getElementById("register-button");
// const registerShow = document.getElementById("register-modal");


// function ShowHide(){
//     btn=NavBar.classList.toggle("show");
// }

function ShowHide() {
    document.getElementById("nav-bar").classList.toggle("show");
}

// Open login modal
document.querySelectorAll('.login-section a')[1].addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById("login-modal").classList.remove("hidden");
});

// Close modal
function closeLogin() {
    document.getElementById("login-modal").classList.add("hidden");
}


function registerShow(){
    document.getElementById("login-modal").classList.add("hidden");
    
        document.getElementById("register-modal").classList.remove("hidden");

        
    }
    // Close modal
function closeRegister() {
document.getElementById("register-modal").classList.add("hidden");    
}
   

function loginShow(){
    document.getElementById("register-modal").classList.add("hidden");
    
        document.getElementById("login-modal").classList.remove("hidden");
    
    
    }

    
  