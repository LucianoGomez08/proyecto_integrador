<?php
$api_url = 'http://localhost/api/api-Alumnos/cartelera.php';

$response = @file_get_contents($api_url);
$data = json_decode($response, true);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartelera - Instituto Tecnologico Beltran</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo-fav.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-upright.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!----===== Boxicons CSS ===== -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> <!--<title>Dashboard Sidebar Menu</title>-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"> <!-- Toastify CSS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> <!-- Toastify JS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  <!-- SwettAlert -->
</head>

<body>
    <!-- Include Perfil -->
    <?php include("includes/perfil.php");?>

    <!-- Include notificaciones -->
    <?php include("includes/notificaciones.php");?>

    <div class="container-fluid" style="margin-bottom: 401px;">
        <div class="row">
            <!-- Include Navbar -->
            <?php include("includes/navbar.php");?>
            
            <div class="tm-main">
                <!-- Home section -->
                <div class="tm-section-wrap">
                    <!-- Include Cartelera -->
                    <?php
                        $_SESSION['mostrar_opciones_cartelera'] = 'opciones2';
                        include("includes/cartelera.php")
                    ?>
                </div> <!-- .tm-section-wrap -->
            </div> <!-- .tm-main -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <!-- Include Footer -->
    <?php include("includes/footer.php")?>
    
    <script src="js/perfil.js"></script>
    <script src="js/index.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/notificaciones.js"></script>
    <script src="js/cartelera.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9de136d298.js" crossorigin="anonymous"></script>
</body>
</html>