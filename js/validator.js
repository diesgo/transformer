function valida_envia() {

    var nombre = nombre();
    var apellidos = apellidos();
    var email = email();
    var fecha_dia = dia();
    var fecha_mes = mes();
    var fecha_anyo = anyo();
    var acepto = v_checked();

    if (!nombre || !apellidos || !email || !correu || !dni || !acepto ) {

        document.getElementById('mostra').innerHTML = "Alguno de los campos contiene errores";
        mostra.style.color = "#FF0000";
        return false;
    } else {
        document.getElementById('mostra').innerHTML = "Procesamos el envio";
        mostra.style.color = "#068B3E";
        return true;
    }
};

function nombre() {
    var ptrNombre = /^[A-Z¿]{1}[a-zA-Z¿-ˇ\u00f1\u00d1\s]{2,40}$/;
    var nombre = document.register.nombre.value;
    if (!nombre.match(ptrNombre)) {
        element = document.register.nombre;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.nombre;
    element.classList.remove('invalid');
    return true;
};

function apellidos() {
    var ptrApellidos = /^[A-Z¿]{1}[a-zA-Z¿-ˇ\u00f1\u00d1\s]{2,40}$/;
    var apellidos = document.register.apellidos.value;
    if (!apellidos.match(ptrApellidos)) {
        element = document.register.apellidos;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.apellidos;
    element.classList.remove('invalid');
    return true;
};

function email() {
    var ptrEmail = /^[a-z0-9_-]+(\.[a-z0-9-_]+)*@[a-z0-9-_]+(\.[a-z0-9-_]+)*(\.[a-z]{2,6})$/;
    var correu = document.register.email.value;
    if (!ptrEmail.test(correu)) {
        element = document.register.email;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.email;
    element.classList.remove('invalid');
    return true;
};



function dia() {
    var ptrdia = /^\d{1,2}$/;
    var dia = document.register.fecha_dia.value;
    if (!ptrdia.test(dia) || dia < 1 || dia > 31) {
        element = document.register.fecha_dia;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.fecha_dia;
    element.classList.remove('invalid');
    return true;
};

function mes() {
    var ptrmes = /^\d{1,2}$/;
    var mes = document.register.fecha_mes.value;
    if (!ptrmes.test(mes) || mes < 1 || mes > 12) {
        element = document.register.fecha_mes;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.fecha_mes;
    element.classList.remove('invalid');
    return true;
};

function anyo() {
    var ptranyo = /^\d{4}$/;
    var anyo = document.register.fecha_anyo.value;
    if (!ptranyo.test(anyo) || anyo <= 1900 || anyo > 1996) {
        element = document.register.fecha_anyo;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.fecha_anyo;
    element.classList.remove('invalid');
    return true;
};


function edad() {

    var fechaNacimiento = document.register.edad.value;
    var fechaNace = new Date(fechaNacimiento);
    var fechaActual = new Date()

    var mes = fechaActual.getMonth();
    var dia = fechaActual.getDate();
    var anyo = fechaActual.getFullYear();

    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(anyo);

    var medad = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365));
    if(medad>=18 && medad <=100){
     element = document.register.edad;
    element.classList.remove('invalid');
    return true;
    }
    element = document.register.edad;
    element.classList.add('invalid');
    return false;
};





function c_dni() {
    var dni = document.register.dni.value;
    var numero, let1, letra;
    var pdni = /^[XYZ]?\d{5,8}[A-Z]{1}$/;
    dni = dni.toUpperCase();

    if (pdni.test(dni) === true) {
        numero = dni.substr(0, dni.length - 1);
        numero = numero.replace('X', 0);
        numero = numero.replace('Y', 1);
        numero = numero.replace('Z', 2);

        let1 = dni.substr(dni.length - 1, 1);
        letra = "TRWAGMYFPDXBNJZSQVHLCKET";
        numero = numero % 23;
        letra = letra.substring(numero, numero + 1);
        if (letra != let1) {
                    element = document.register.dni;
        element.classList.add('invalid');
        return false;
    }
    element = document.register.dni;
    element.classList.remove('invalid');
    return true;
    } else {
         element = document.register.dni;
        element.classList.add('invalid');
        return false;
    }
};
function v_checked() {
    var acepto = document.register.condiciones.checked;
    if (!acepto) {

        element = document.getElementById('cont');
        element.classList.add('invalid');
        return false;
    }
 element = document.getElementById('cont');
    element.classList.remove('invalid');
    return true;
};

function avisoReset() {
    var reset = confirm("ATENCIÓN!!!!!!!\nSi confirmas, se borraran todos los datos del formulario");
    if (reset) {
        location.reload(true);
        return true;
    }
        return false;
};


function pasaValor(name) {
  var valor = document.register[name].value;
  var rfuncion;

  switch(name) {
  case 'nombre':
    rfuncion = nombre();
    if (rfuncion) {
      document.getElementById('infoNombre').innerHTML = valor + ": Validado";
      infoNombre.style.color = "#068B3E";
    } else {
      document.getElementById('infoNombre').innerHTML = valor + ": El nombre debería tener entre 2 y 20 carácteres ";
      infoNombre.style.color = "#FF0000";
    }
    break;

  case 'apellidos':
    rfuncion = apellidos();
    if (rfuncion) {
      document.getElementById('infoApellidos').innerHTML = valor + ": Validado";
      infoApellidos.style.color = "#068B3E";
    } else {
      document.getElementById('infoApellidos').innerHTML = valor + ": El Apellido debería tener entre 2 y 20 carácteres ";
      infoApellidos.style.color = "#FF0000";
    }
    break;

  case 'email':
    rfuncion = email();
    if (rfuncion) {
      document.getElementById('infoEmail').innerHTML = valor + ". Validado";
      infoEmail.style.color = "#068B3E";
    } else {
      document.getElementById('infoEmail').innerHTML = valor + ". Introduzca un correo electrónico válido incluyendo (@) y (.)";
      infoEmail.style.color = "#FF0000";
    }
    break;


  case 'fecha_dia':
    rfuncion = dia();
    if (rfuncion) {
      document.getElementById('mostra').innerHTML = valor + ". Validado";
      mostra.style.color = "#068B3E";
    } else {
      document.getElementById('mostra').innerHTML = valor + ". Solamente se aceptan entre el día 1 y 31 del mes";
      mostra.style.color = "#FF0000";
    }
    break;

  case 'fecha_mes':
    rfuncion = mes();
    if (rfuncion) {
      document.getElementById('mostra').innerHTML = valor + ". Validado";
      mostra.style.color = "#068B3E";
    } else {
      document.getElementById('mostra').innerHTML = valor + ". Solamente se aceptan valores entre 1 y 12";
      mostra.style.color = "#FF0000";
    }
    break;

  case 'fecha_anyo':
    rfuncion = anyo();
    if (rfuncion) {
      document.getElementById('mostra').innerHTML = valor + ". Validado";
      mostra.style.color = "#068B3E";
    } else {
      document.getElementById('mostra').innerHTML = valor + ". Ha de ser un año entre 1920 y 2002 incluidos";
      mostra.style.color = "#FF0000";
    }
    break;
      
  case 'condiciones':
    rfuncion = v_checked();
    if (rfuncion) {
      document.getElementById('mostra').innerHTML = valor+". Validado";
      mostra.style.color = "#068B3E";
    } else {
      document.getElementById('mostra').innerHTML = "<h3>Has de aceptar las condiciones \n y términos para enviar el formulario</h3>";
      mostra.style.color = "#FF0000";
    }
    break;
  }
};

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function guardarDatos() {
    var usuario = document.register.usuario.value;
    var tel = document.register.telefono.value;
    var dia = document.register.fecha_dia.value;
    var mes = document.register.fecha_mes.value;
    var anyo = document.register.fecha_anyo.value;
    var email = document.register.email.value;
    var dni = document.register.dni.value;

    setCookie("Usuario", usuario, 4);
    setCookie("Teléfono", tel, 4);
    setCookie("Día", dia, 4);
    setCookie("Mes", mes, 4);
    setCookie("Año", anyo, 4);
    setCookie("Correo", email, 4);
    setCookie("Dni", dni, 4);

    /*setCookie(nombre,valor,dias);*/
};

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
};

function obtenerDatos() {
    var muestraUser = getCookie('Usuario');
    var muestraTel = getCookie('Teléfono');
    var muestraDia = getCookie('Día');
    var muestraMes = getCookie('Mes');
    var muestraAnyo = getCookie('Año');
    var muestraMail = getCookie('Correo');
    var muestraDni = getCookie('Dni');

    document.register.usuario.value = muestraUser;
    document.register.telefono.value = muestraTel;
    document.register.fecha_dia.value = muestraDia;
    document.register.fecha_mes.value = muestraMes;
    document.register.fecha_anyo.value = muestraAnyo;
    document.register.email.value = muestraMail;
    document.register.dni.value = muestraDni;
}; 