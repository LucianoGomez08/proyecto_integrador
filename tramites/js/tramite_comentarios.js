function comentarTramite(idTramite) {
    Swal.fire({
        title: 'Agregar Comentario',
        input: 'textarea',
        inputLabel: 'Escribe tu comentario',
        inputPlaceholder: 'Ingrese el comentario aquí...',
        showCancelButton: true,
        confirmButtonText: 'Guardar',
        cancelButtonText: 'Cancelar',
        preConfirm: (comentario) => {
            if (!comentario) {
                Swal.showValidationMessage('El comentario no puede estar vacío');
            }
            return comentario;
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Llamar a la función para guardar el comentario
            guardarComentario(idTramite, result.value);
        }
    });
}

function guardarComentario(idTramite, comentario) {
    $.ajax({
        url: 'http://localhost/api/api-Alumnos/tramite_comentarios.php',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            id_tramite: idTramite,
            comentario: comentario
        }),
        success: function(response) {
            // Aquí actualizamos el DOM con el nuevo comentario
            $('#tramite-' + idTramite + ' .comentarios').text('Comentarios: ' + comentario); // Asegúrate de que este selector sea correcto
            Swal.fire({
                title: 'Éxito',
                text: 'Comentario guardado correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar',
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        },
        error: function() {
            Swal.fire('Error', 'No se pudo guardar el comentario', 'error');
        }
    });       
}