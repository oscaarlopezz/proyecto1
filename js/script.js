function validar() {
    mail = document.getElementById('user').value
    pass = document.getElementById('password').value
    mensaje = document.getElementById('mensaje')

    if (user == '' && password == '') {
        mensaje.innerHTML = 'Campo email y contraseña obligatorios'
        return false
    } else if (user == '') {
        mensaje.innerHTML = 'Campo email obligatorio'
        return false
    } else if (password == '') {
        mensaje.innerHTML = 'Campo contraseña obligatorio'
        return false
    } else {
        return true
    }

}