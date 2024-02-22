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
        
        fetch('constructor_requisiciones.php', {
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
                    window.location.href= '/formularios_requisiciones.php';
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

    });
});
}
document.getElementById('btnMostrarSeccion').addEventListener('click', function () {
    var seccionAbajo = document.getElementById('seccionAbajo');
    seccionAbajo.style.display = (seccionAbajo.style.display === 'none' || seccionAbajo.style.display === '') ? 'block' : 'none';
});
