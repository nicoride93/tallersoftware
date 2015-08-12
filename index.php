<?php
include "head.php";
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="genericopartes.php">Sistema de partes 15</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="genericopartes.php">Subir POF</a></li>
                <li><a href="versinpof.php">Partes subidos sin POF</a></li>
                <li><a href="verconpof.php">Partes subidos con POF</a></li>
                <?php
                if ($_SESSION['admin'] == 1) {
                    ?>
                    <li class="dropdown" id="accountmenu"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administracion<b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li><a href="ayudantepof.php">Administrar POF</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Recordatorio</li>
                            <li><a href="recordatoriopof.php" id="thelink">Enviar correos</a></li>
                        </ul>
                    </li>
                    <?php }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (!isset($_SESSION['admin'])) {
                    ?>
                    <li ><a href="index.php">Iniciar Sesion <span class="sr-only">(current)</span></a></li>
                    <?php
                } else {
                    ?>
                    <li ><a href="logout.php">Salir <span class="sr-only">(current)</span></a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

