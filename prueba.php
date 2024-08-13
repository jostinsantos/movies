<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .modal-lg {
            max-width: 90%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Botones para abrir el modal con diferentes contenidos -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-content="contenido1">Mostrar Contenido 1</button>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal" data-content="contenido2">Mostrar Contenido 2</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" data-content="contenido3">Mostrar Contenido 3</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título del Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body-content">
                        <!-- Contenido se actualizará aquí -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para manejar el contenido del modal y los parámetros de la URL -->
    <script>
        $(document).ready(function() {
            // Manejador para actualizar el contenido del modal según el botón
            $('#myModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Botón que disparó el modal
                var content = button.data('content'); // Extraer el contenido del atributo data

                var modalBody = $(this).find('.modal-body');

                // Actualizar el contenido del modal basado en el botón
                switch (content) {
                    case 'contenido1':
                        modalBody.html('<p>Este es el Contenido 1 del modal...</p>');
                        break;
                    case 'contenido2':
                        modalBody.html('<p>Este es el Contenido 2 del modal...</p>');
                        break;
                    case 'contenido3':
                        modalBody.html('<p>Este es el Contenido 3 del modal...</p>');
                        break;
                    default:
                        modalBody.html('<p>Contenido no encontrado.</p>');
                }
            });

            // Manejo del parámetro en la URL para abrir el modal con el contenido específico
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('ver')) {
                const content = urlParams.get('ver');
                $('#myModal').on('show.bs.modal', function () {
                    var modalBody = $(this).find('.modal-body');
                    switch (content) {
                        case 'contenido1':
                            modalBody.html('<p>Este es el Contenido 1 del modal...</p>');
                            break;
                        case 'contenido2':
                            modalBody.html('<p>Este es el Contenido 2 del modal...</p>');
                            break;
                        case 'contenido3':
                            modalBody.html('<p>Este es el Contenido 3 del modal...</p>');
                            break;
                        default:
                            modalBody.html('<p>Contenido no encontrado.</p>');
                    }
                });
                $('#myModal').modal('show');
            }
        });
    </script>
</body>
</html>
