// registro.js
function mostrarRegistro() {
    document.getElementById('registerForm').style.display = 'block';
    document.getElementById('loginForm').style.display = 'none'; // Cerrar el formulario de inicio de sesión
}

function cerrarRegistro() {
    document.getElementById('registerForm').style.display = 'none';
}

// Puedes incluir esta función si deseas cerrar el formulario de inicio de sesión
function cerrarLoginForm() {
    document.getElementById("loginForm").style.display = "none";
}
