$("#formulario_f").submit(function(event){
    event.preventDefault();//almacena los datos sin refrescar el sitio web
    enviar();
});

function enviar(){
    var datos = $("#formulario_f").serialize(); //el serialize toma todos los datos 'name' y los lleva a un arreglo
    //console.log(datos);
    $.ajax({
        type: "post",
        url:"sendcontact.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                 document.getElementById("formulario_f").reset();
                correcto();


            }else{
                phperror(texto);
            }
        }
    })
}

function correcto(){
    $("#mensajeExito").removeClass("display");  
    $("#mensajeError").addClass("display");

}

function phperror(texto){
    $("#mensajeError").removeClass("display");
    $("#mensajeError").html(texto); //el .html nos permite escribir dentro de la caja de texto
}