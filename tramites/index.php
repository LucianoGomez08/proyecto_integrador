<?php
session_start();

// URL de la API para obtener los tipos de trámites
$api_url_tramites_tipo = 'http://localhost/api/api-Alumnos/tramites_tipo.php';

// Obtener los datos de la API
$response = file_get_contents($api_url_tramites_tipo);
$tipos_tramites = json_decode($response, true);

// Asociar IDs de trámites con sus rutas de formularios correspondientes
$formularios = array(
    1 => 'formularios/alumno_regular.php',
    2 => 'formularios/justificar_inasistencia.php',
    3 => 'formularios/constancia_examen.php',
    4 => 'formularios/cambio_turno.php',
    5 => 'formularios/figura_oyente.php',
    6 => 'formularios/examen_final_libre.php',
);

$formularios_descripcion = array(
    1 => 'Solicita el certificado de alumno regular, necesario para trámites externos.',
    2 => 'Justifica inasistencias con la documentación correspondiente.',
    3 => 'Solicita constancia de examen indicando la materia y calificación.',
    4 => 'Solicita cambio de turno por motivos personales o laborales.',
    5 => 'Asiste como oyente a una materia para reforzar conocimientos.',
    6 => 'Inscríbete en un examen final en condición de libre.',
);


// Asociar IDs de trámites con sus íconos correspondientes
$iconos = array(
    1 => 'bxs-graduation', // Alumno regular
    2 => 'bxs-calendar-exclamation', // Justificar inasistencia
    3 => 'bxs-book-alt', // Constancia de examen
    4 => 'bxs-time-five', // Cambio de turno
    5 => 'bxs-user-circle', // Figura oyente
    6 => 'bxs-pencil', // Examen final libre
);

$formularios_path = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites - Instituto Tecnológico Beltran</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logo-fav.png" type="image/x-icon"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo-upright.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/tramites.css">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet"> <!-- Boxicons CSS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"> <!-- Toastify CSS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> <!-- Toastify JS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  <!-- SwettAlert -->
</head>
<body>
    <!-- Include Perfil -->
    <?php include("../includes/perfil.php");?>

    <!-- Include notificaciones -->
    <?php include("../includes/notificaciones.php");?>

        
    <div class="container-fluid">
        <div class="row">           
            <!-- Include del navbar -->
            <?php include("../includes/navbar.php"); ?>
            
            <div class="tm-main">
                <!-- Home section -->
                <div class="tm-section-wrap">
                    <!-- Titulo -->
                    <div class="mb-5 mt-3"> 
                        <h1 class="tm-text-primary">Crea un trámite</h1>
                    </div>

                    <!-- Botón de "Mis Trámites" -->
                    <div>
                        <a class="btn btn-primary mis-tramites-btn" href="mis_tramites.php" role="button">Mis Trámites</a>
                    </div>

                    <div class="row justify-content-center">
                        <?php
                            // Mostrar tarjetas de trámites disponibles
                            if (isset($tipos_tramites) && is_array($tipos_tramites)) {
                                foreach ($tipos_tramites as $tipo) {
                                    $id_tramite_tipo = htmlspecialchars($tipo['id_tramite_tipo']);
                                    $descripcion = htmlspecialchars($tipo['descripcion']);
                                    
                                    // Verificar si existe un formulario para este tipo de trámite
                                    if (array_key_exists($id_tramite_tipo, $formularios)) {
                                        $formularios_path = $formularios[$id_tramite_tipo];
                                        $descripcion_formulario = isset($formularios_descripcion[$id_tramite_tipo]) ? $formularios_descripcion[$id_tramite_tipo] : 'Descripción no disponible';
                                        $icono = isset($iconos[$id_tramite_tipo]) ? $iconos[$id_tramite_tipo] : 'bxs-file'; // Icono por defecto
                                        
                                        // Generar el HTML para cada tarjeta de trámite
                                        echo '<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">'; // Ajustar columnas para diferentes tamaños de pantalla
                                        echo '    <a href="' . $formularios_path . '?id=' . $id_tramite_tipo . '" class="tramite-card text-decoration-none h-100">';
                                        echo '        <div class="tramite-card-body d-flex flex-column justify-content-start align-items-center p-3 border rounded">';
                                        echo '            <div class="tramite-card-content">';
                                        echo '                <div class="tramite-card-title mb-2 h5">'.'<i class="bx ' . $icono . ' "></i>' .' '.$descripcion . '</div>';
                                        echo '                <div class="tramite-card-description">' . $descripcion_formulario . '</div>';
                                        echo '            </div>';
                                        echo '        </div>';
                                        echo '    </a>';
                                        echo '</div>';
                                    }
                                }
                            } else {
                                echo '<p>No se encontraron tipos de trámites.</p>';
                            }
                        ?>
                    </div> <!-- .row card--> 
                </div> <!-- .tm-section-wrap -->
            </div> <!-- .tm-main -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <script src="js/validar.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/perfil.js"></script>
    <script src="../js/notificaciones.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9de136d298.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>
