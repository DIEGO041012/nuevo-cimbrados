document.addEventListener('DOMContentLoaded', function(){
    clickOnbuttons();
});

function clickOnbuttons() {
    
    
    $('#guardar').click(function(elm){
        elm.preventDefault();

        var formulario = document.getElementById('miFormulario');
        var formData = new FormData(formulario);

        formData.forEach(function(valor, clave){
            console.log(clave + ": " + valor);
        });
        
        fetch('constructor_reporte_diario.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => {
            if (response.ok) {
                
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'La operación se completó correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                  })
                  .then(data =>{
                    window.location.href= '/formulario_reporte_diario.php';
                  }); 
            } else {
                // throw new Error(JSON.stringify({ status: response.status, message: response.statusText }));
                Swal.fire({
                    title: '¡Error!',
                    text: 'Hubo un problema al procesar la solicitud.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                  });
            }
        })


    });
}




function handleAreaChange(selectElement) {
    // Ocultar todos los campos
    document.getElementById('campoActivoObra').classList.add('oculto');
    document.getElementById('campoActivoPlanta').classList.add('oculto');
    document.getElementById('campoInactivo').classList.add('oculto');

    // Mostrar el campo seleccionado
    var selectedOption = selectElement.value;

    if (selectedOption === 'Activo obra') {
        document.getElementById('campoActivoObra').classList.remove('oculto');
    } else if (selectedOption === 'Activo en planta') {
        document.getElementById('campoActivoPlanta').classList.remove('oculto');
    } else if (selectedOption === 'Inactivida') {
        document.getElementById('campoInactivo').classList.remove('oculto');
    }
}