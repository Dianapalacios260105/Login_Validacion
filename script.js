function validarFormulario() {
    let user = document.getElementById('user').value;
    let password = document.getElementById('password').value;
    let edad = document.getElementById('edad').value;

    if (user === '' || password === '' || edad === '') {
        alert('Todos los campos son obligatorios.');
        return false;
    }

    edad = parseInt(edad);
    if (isNaN(edad) || edad < 18) {
        alert('Debe ingresar una edad válida y ser mayor de 18 años.');
        return false;
    }

    return true;
}