
<nav class="sidebar close">
    <header class="header-image">
        <div class="image-text">
            <span class="image">
                <img src="/gestiondepartamentoalumnos/img/logo.png" alt="Logo ITB">
            </span>

            <div class="text logo-text">
                <span class="name">Instituto</span>
                <span class="name">Tecnologico</span>
                <span class="name">Beltran</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <a href="/gestiondepartamentoalumnos/index.php" ; return false;>
                    <i class='icon fas fa-home'></i>
                    <span class="text nav-text">Inicio</span>
                </a>
            </li>
            <li class="search-box">
                <a href="/gestiondepartamentoalumnos/cartelera.php">
                    <i class='bx bxs-news icon'></i>
                    <span class="text nav-text">Cartelera</span>
                </a>
            </li>
            <li class="search-box">
                <a href="/gestiondepartamentoalumnos/carreras.php">
                    <i class='icon fas fa-user-friends'></i>
                    <span class="text nav-text">Carreras</span>
                </a>
            </li>
            <li class="search-box" style="display: none;" id="tramites_li">
                <a href="javascript:void(0);" id="mis_tramites">
                    <i class='icon fas fa-envelope'></i>
                    <span class="text nav-text">Tramites</span>
                </a>
            </li>
            <li class="search-box" style="display: none;" id="crear_aviso">
                <a href="/gestiondepartamentoalumnos/Abm_Cartelera/index.php">
                    <i class='bx bx-add-to-queue icon'></i>
                    <span class="text nav-text">Listar anuncios</span>
                </a>
            </li>
            <li class="search-box" style="display: none;" id="crear_usuario">
                <a href="/gestiondepartamentoalumnos/Abm_Usuarios/index.php">
                    <i class="fa-solid fa-user-plus icon"></i>
                    <span class="text nav-text">Listar usuarios</span>
                </a>
            </li>
            <li class="search-box" style="display: none;" id="siu-guarani">
                <a href="https://siu.ibeltran.com.ar/autogestion/" target="_blank">
                    <i class="fa-solid fa-graduation-cap icon"></i>
                    <span class="text nav-text">Siu Guarani</span>
                </a>
            </li>
        </div>
        <div class="bottom-content">
            <li class="search-box">
                <a href="/gestiondepartamentoalumnos/login/index.html" id="loginButton">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text" id="texto"></span>
                </a>
            </li>
        </div>
    </div>
</nav>