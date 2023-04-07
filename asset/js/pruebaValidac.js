window.addEventListener("load", function(){
    //practica de storage 
    
    if (this.localStorage.getItem("nombreUsuario") == null){
        let nombre = this.prompt.apply("decime tu nombre:");
        document.querySelector(".bienvenida").innerHTML = "Hola " + nombre;
        
        this.localStorage.setItem("nombreUsuario", nombre);
    } else {
        let nombre = this.localStorage.getItem("nombreUsuario");
        document.querySelector(".bienvenida").innerHTML = "Hola " + nombre;
    }
    


    //practica validacion de datos de formulario
    let formulario = document.querySelector("form.datosEvento");


    formulario.addEventListener("submit", function(e){
        e.preventDefault();

        let errores = [];

        let campoNombre = document.querySelector("input.name");
        
        if (campoNombre.value == "" || campoNombre.value == null){
            errores.push("completa el campo de nombres");
        } else if (campoNombre.value.length < 3) {
            errores.push("debe tener mas de 3 digitos")
        }

        let campoFecha = document.querySelector("fecha-inicio");
        
        if (campoFecha.value == "" || campoFecha.value == null){
            errores.push("completa el campo de nombres");
        }

        for (let i = 0; i < errores.length; i++){
            ulErrores.innerHTML += "<li>" + errores[i] + "</li"
        }

        if (errores.length > 0) {
            e.preventDefault();
            
        }
    });
})