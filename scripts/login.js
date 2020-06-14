function openLogin() {
    var register = document.getElementById('login');
    register.style.display = 'flex';
}

var closeRegister = document.getElementById('login-exit');

for(let i = 0; i < 1; i++) {
    closeRegister.addEventListener('click', leaveRegister);
}

function leaveRegister() {
    var register = document.getElementById('login');
    register.style.display = 'none';
}