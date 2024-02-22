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
        
        fetch('constructor_horas_extras.php', {
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
                    window.location.href= 'formulario_horas_extras.php';
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
    // Ocultar todos los campos relacionados con las diferentes opciones
    document.getElementById('campoPermiso').classList.add('oculto');
    document.getElementById('campoVacaciones').classList.add('oculto');
    document.getElementById('campoCompensatorio').classList.add('oculto');

    // Mostrar el campo seleccionado
    var selectedOption = selectElement.value;

    if (selectedOption === 'PERMISO') {
        document.getElementById('campoPermiso').classList.remove('oculto');
    } else if (selectedOption === 'VACACIONES') {
        document.getElementById('campoVacaciones').classList.remove('oculto');
    } else if (selectedOption.includes('COMPENSATORIO')) {
        document.getElementById('campoCompensatorio').classList.remove('oculto');
    }

}