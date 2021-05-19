function validar() {
    mail = document.getElementById('user').value
    pass = document.getElementById('password').value
    mensaje = document.getElementById('mensaje')

    if (user == '' && password == '') {
        mensaje.innerHTML = 'Campo user y contraseña obligatorios'
        return false
    } else if (user == '') {
        mensaje.innerHTML = 'Campo user obligatorio'

        return false
    } else if (password == '') {
        mensaje.innerHTML = 'Campo contraseña obligatorio'
        return false
    } else if (user == '*admin*') {
        mensaje.innerHTML = 'No intentes hackearme pillin'
        return false
    } else {
        return true
    }
}