
<?php
require_once "../controllers/controllerGeneral.php";
    $obj = new controllerGeneral();
    $calificacion=$obj->InsertarCalificacion($_POST['valor'],$_POST['nota'],$_POST['cod_insc']);
?>