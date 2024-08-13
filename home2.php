<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tu perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-image: url('https://image.tmdb.org/t/p/original/5pZccfZT5fMrfRxCIaPmRFQqJ19.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            max-height: 90vh;
            overflow: hidden;
            padding: 20px;
        }

        h1 {
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
            font-size: 1.5rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0 10px;
            width: 100%;
        }

        .profile-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .profile {
            position: relative;
            width: 150px;
            text-align: center;
        }

        .profile a {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            border: 5px solid transparent;
        }

        .profile:hover img {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
            border-color: #4682B4;
        }

        .profile-name {
            margin-top: 10px;
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            font-size: 0.8rem;
        }

        .edit-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background: white;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }

        .edit-icon i {
            color: #000;
        }

        .edit-profile-btn {
            margin-top: 20px;
        }

        .edit-profile-btn button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .edit-profile-btn button:hover {
            background-color: #0056b3;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            transition: opacity 0.3s ease;
        }

        .modal {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            transform: translateY(-20px);
        }

        .modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px; /* Reduce el padding para disminuir la altura */
    border-bottom: 1px solid #ddd; /* Línea separadora opcional */
}


.modal-title {
    font-size: 1.2rem; /* Ajusta el tamaño de la fuente del título */
    margin: 0; /* Elimina márgenes innecesarios */
}

.modal-close {
    font-size: 1.5rem; /* Ajusta el tamaño del botón de cierre */
    background: none;
    border: none;
    color: #007bff; /* Color del botón de cierre */
    cursor: pointer;
    transition: color 0.3s ease;
}


.modal-close:hover {
    color: #0056b3; /* Color del botón de cierre al pasar el cursor */
}

        .modal-body {
            margin-bottom: 20px;
        }

        .modal-body img {
            width: 100%;
            max-width: 200px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .modal-body label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .modal-body input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .gallery img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 2px solid transparent;
            cursor: pointer;
            transition: border-color 0.3s ease, transform 0.3s ease;
            border-radius: 8px;
        }

        .gallery img:hover {
            border-color: #007bff;
            transform: scale(1.05);
        }

        .selected {
            border-color: #007bff;
            border-width: 2px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .modal-footer button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal-footer button:hover {
            background-color: #0056b3;
        }



        .image-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-bottom: 15px;
            /* Espacio debajo de la imagen */
        }

        .profile-img {

            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #007bff;
        }


        @media (max-width: 768px) {
            h1 {
                font-size: 1.2rem;
                margin-bottom: 15px;
                padding: 0 15px;
                text-align: center;
            }

            .profile-container {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
                gap: 15px;
                justify-content: center;
            }

            .profile {
                width: 120px;
            }

            .profile img {
                width: 120px;
                height: 120px;
            }

            .profile-name {
                font-size: 0.8rem;
            }

            .edit-profile-btn {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>Selecciona tu perfil</h1>
        <div class="profile-container">
            <div class="profile">
                <a href="#perfil1">
                    <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg" id="perfil1">
                    <div class="profile-name">Perfil 1</div>
                    <div class="edit-icon" onclick="openModal('editModal1')">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="#perfil1">
                    <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg" id="perfil1">
                    <div class="profile-name">Perfil 1</div>
                    <div class="edit-icon" onclick="openModal('editModal1')">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="#perfil1">
                    <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg" id="perfil1">
                    <div class="profile-name">Perfil 1</div>
                    <div class="edit-icon" onclick="openModal('editModal1')">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="#perfil1">
                    <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg" id="perfil1">
                    <div class="profile-name">Perfil 1</div>
                    <div class="edit-icon" onclick="openModal('editModal1')">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="#perfil1">
                    <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg" id="perfil1">
                    <div class="profile-name">Perfil 1</div>
                    <div class="edit-icon" onclick="openModal('editModal1')">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                </a>
            </div>

            <!-- Repite para cada perfil con identificadores únicos -->
        </div>
        <br>
        <div class="edit-profile-btn">
            <button id="editProfilesBtn">Editar perfiles</button>

        </div>
       
    </div>

    <!-- Modal for Perfil 1 -->
    <div class="modal-overlay" id="editModal1">
        <div class="modal">
            <div class="modal-header">
                <h5 class="modal-title">Editar Perfil 1</h5>
                <button type="button" class="modal-close" onclick="closeModal('editModal1')">&times;</button>
            </div>
            <div class="modal-body">
                <form action="">
                    <br>
                    <div class="image-container">

                        <img class="profile-img" src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/2Orm6l3z3zukF1q0AgIOUqvwLeB.jpg">
                    </div>

                    <label for="">cambiar nombre de usuario:</label>
                    <input type="text" value="Nombre de usuario">

                    <label for="foto-perfl">Cambiar foto de usuario:</label>
                    <div class="grupo-imagenes-perfil">
                        <div class="gallery">
                            <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/wqGOVOsHzZaHeHymIS40elGCnY0.jpg" onclick="selectImage('foto-perfl', 'https://media.themoviedb.org/t/p/w300_and_h450_bestv2/wqGOVOsHzZaHeHymIS40elGCnY0.jpg')" alt="">
                            <img src="https://media.themoviedb.org/t/p/w300_and_h450_bestv2/g325OIjIHrFr0te8ewPfhKQ2SKj.jpg" onclick="selectImage('foto-perfl', 'https://media.themoviedb.org/t/p/w300_and_h450_bestv2/g325OIjIHrFr0te8ewPfhKQ2SKj.jpg')" alt="">
                            <!-- Añade más imágenes según sea necesario -->
                        </div>
                        <input type="text" id="foto-perfl" readonly>
                    </div>
                    <label for="fondo-perfl">Cambiar fondo de usuario:</label>
                    <div class="grupo-fondo-perfil">
                        <div class="gallery">
                            <img src="https://image.tmdb.org/t/p/original/9l1eZiJHmhr5jIlthMdJN5WYoff.jpg" onclick="selectImage('fondo-perfl', 'https://image.tmdb.org/t/p/original/9l1eZiJHmhr5jIlthMdJN5WYoff.jpg')" alt="">
                            <img src="https://image.tmdb.org/t/p/original/260JYN2n3dTSlOYDGk9KjjJ3pSd.jpg" onclick="selectImage('fondo-perfl', 'https://image.tmdb.org/t/p/original/260JYN2n3dTSlOYDGk9KjjJ3pSd.jpg')" alt="">
                            <!-- Añade más imágenes según sea necesario -->
                        </div>
                        <input type="text" id="fondo-perfl" readonly>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal('editModal1')">Cerrar</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('editProfilesBtn').addEventListener('click', function() {
            var icons = document.querySelectorAll('.edit-icon');
            var button = this;
            var editing = button.textContent.trim() === 'Editar perfiles';

            if (editing) {
                icons.forEach(icon => icon.style.display = 'block');
                button.textContent = 'Listo';
            } else {
                icons.forEach(icon => icon.style.display = 'none');
                button.textContent = 'Editar perfiles';
            }
        });

        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>
    <script>
        function selectImage(inputId, imageUrl) {
            document.getElementById(inputId).value = imageUrl;
        }
    </script>
</body>

</html>