function openRegister() {
    var register = document.getElementById('register');
    register.style.display = 'flex';
}

var closeRegister = document.getElementById('register');

for(let i = 0; i < 1; i++) {
    closeRegister.addEventListener('click', leaveRegister);
}

function leaveRegister() {
    closeRegister.style.display = 'none';
}