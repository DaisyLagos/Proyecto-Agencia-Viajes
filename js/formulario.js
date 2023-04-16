const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input');


const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos
	password: /^.{4,15}$/, // 4 a 15 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const validarPassword2 = () =>{
    const inputPassword1 = document.getElementById("contrasena");
    const inputPassword2 = document.getElementById("conf-contrasena");
    if(document.getElementById('conf-contrasena').value == ""){
        document.getElementById('conf-contrasena').classList.remove('formulario__grupo-correcto');
        document.getElementById('conf-contrasena').classList.remove('formulario__grupo-incorrecto');
        document.querySelector('#otra-contra .formulario__input-error').classList.remove('formulario__input-error-activo');
    }else{
        if(inputPassword1.value !== inputPassword2.value){
            document.getElementById('conf-contrasena').classList.remove('formulario__grupo-correcto');
            document.getElementById('conf-contrasena').classList.add('formulario__grupo-incorrecto');
            document.querySelector('#otra-contra .formulario__input-error').classList.add('formulario__input-error-activo');
        }
        else{
            document.getElementById('conf-contrasena').classList.add('formulario__grupo-correcto');
            document.getElementById('conf-contrasena').classList.remove('formulario__grupo-incorrecto');
            document.querySelector('#otra-contra .formulario__input-error').classList.remove('formulario__input-error-activo');
        }
    }
    
};

const validarCampos = (expresion, input, campo, idCampo) =>{
    
    if(document.getElementById(`${campo}`).value == ""){
        // console.log("Se ejecutó");
        document.getElementById(`${campo}`).classList.add('formulario__input-vacio');
        document.getElementById(`${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`${idCampo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
    }else{
        if(expresion.test(input.value)){
            console.log("Se ejecutó");
            document.getElementById(`${campo}`).classList.remove('formulario__grupo-incorrecto');
            document.getElementById(`${campo}`).classList.add('formulario__grupo-correcto');
            document.querySelector(`${idCampo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
            document.querySelector(`${idCampo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
         }
         else{
            console.log("Se ejecutó otra");
            document.getElementById(`${campo}`).classList.remove('formulario__grupo-correcto');
            document.getElementById(`${campo}`).classList.add('formulario__grupo-incorrecto');
            document.querySelector(`${idCampo} .formulario__input-error`).classList.add('formulario__input-error-activo');
         }
    }
};

const validarFormulario = (e) =>{
    switch(e.target.name){
        case "nombre":
            validarCampos(expresiones.nombre, e.target, 'nombre', '#nom');
            break;
        case "apellido":
                validarCampos(expresiones.nombre, e.target, "apellido", "#apelli");
                break;
        case "correo":
            validarCampos(expresiones.correo, e.target, "correo", "#usuario");
            break;
        case "contrasena":
            validarCampos(expresiones.password, e.target, "contrasena", "#contra");
            break;
        case "conf-contrasena":
            validarPassword2();
            break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});


// formulario.addEventListener('submit', (e) => {
    // e.preventDefault();
    // if(nombre=== null && contra === null){
    //     alert("")
    // }
// });


