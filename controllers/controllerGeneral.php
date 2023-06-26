<?php
/* Esto es para que muestre los Errores en pantalla, cuando tenga */
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class controllerGeneral {
    private $model;

    /* Inicializamos LA VARIABLE $model con el objeto model para llamar las funciones del modelo general*/
    public function __construct() {
        require_once '../models/modelGeneral.php';
        $this->model = new modelGeneral();
    }

    /* Para guardar, por ahora no usamos la funcion pero asi funciona */
    public function saveEstudiantes($cod_est,$nomb_est) {
            $this->model->createEstudiante($cod_est,$nomb_est);
            header('Location: /app/views/registro.php'); 
            //Header es para redirrecionar una vez hecho todo
        }

    public function InsertarCalificacion($valor,$nota,$cod_insc) {
            $this->model->InsertarCalificacion($valor,$nota,$cod_insc);
            header('Location: /app/views/planeacion.php'); 
            //Header es para redirrecionar una vez hecho todo
        }    

    public function getAllCalificaciones() {
        return ($this->model->getCalificaciones()) ? $this->model->getCalificaciones(): false;
     }  

        public function eliminarEstudiantes($cod_est) {
            $this->model->eliminarEstudiantes($cod_est);
            header('Location: /app/views/SelectCurso.php'); 
            //Header es para redirrecionar una vez hecho todo
        }

    public function InscripcionPorCurso($cod_est,$cod_cur,$periodo,$year){
        $this->model->InscribirEstudiante($cod_est,$cod_cur,$periodo,$year) ;
        header('Location: /app/views/inscripcion.php'); 
    }

    public function getPlaneacion($cod_cur) {
        return ($this->model->getPlaneacion($cod_cur)) ? $this->model->getPlaneacion($cod_cur): false;
        }

    public function getObtenerNota($nota) {
            return ($this->model->getObtenerNota($nota)) ? $this->model->getObtenerNota($nota): false;
            
        }

    public function getObtenerEstudiantesCalificacion($cod_cur) {
            return ($this->model->getObtenerEstudiantesCalificacion($cod_cur)) ? $this->model->getObtenerEstudiantesCalificacion($cod_cur): false;
            
        }    

    /* getAll = obtener todo pero cursos */    
    public function getAllcursos() {
           return ($this->model->getAllcursos()) ? $this->model->getAllcursos(): false;
        }     
    
        /* getAll = obtener todo pero estudiantes  */    
    public function getAllestudiantes() {
            return ($this->model->getAllestudiantes()) ? $this->model->getAllestudiantes(): false;
            //Un if pero mas sencillo
         }    

    public function getEstudiantes($cod_cur,$year,$periodo) {
    return ($this->model->getEstudiantes($cod_cur,$year,$periodo)) ? $this->model->getEstudiantes($cod_cur,$year,$periodo): false;
    }

    public function getNombCur($cod_cur) {
        return ($this->model->getNombCur($cod_cur)) ? $this->model->getNombCur($cod_cur): false;
        }
    
    public function validarPorcentaje($porcentaje,$cod_cur) {
        return ($this->model->validarPorcentaje($porcentaje,$cod_cur)) ? $this->model->validarPorcentaje($porcentaje,$cod_cur): false;
    }
    
    
    public function agregarNota($cod_cur,$descrip_nota,$porcentaje,$posicion){
        $this->model->agregarNota($cod_cur,$descrip_nota,$porcentaje,$posicion);
    }

    public function validarPosicion($cod_cur,$posicion){
        return ($this->model->validarPosicion($cod_cur,$posicion)) ? $this->model->validarPosicion($cod_cur,$posicion): false;
    }


    public function validarPorcentajeActualizar($porcentaje,$cod_cur,$cod_nota) {
        return ($this->model->validarPorcentajeActualizar($porcentaje,$cod_cur,$cod_nota)) ? $this->model->validarPorcentajeActualizar($porcentaje,$cod_cur,$cod_nota): false;
    }

    public function  validarInscripcion($cod_est,$cod_cur,$periodo,$anio) {
        return ($this->model-> validarInscripcion($cod_est,$cod_cur,$periodo,$anio)) ? $this->model-> validarInscripcion($cod_est,$cod_cur,$periodo,$anio): false;
    }
    
    public function  validarCodEst($cod_est) {
        return ($this->model-> validarCodEst($cod_est)) ? $this->model->validarCodEst($cod_est): false;
    }

    public function validarPosicionActualizar($cod_cur,$posicion,$cod_nota){
        return ($this->model->validarPosicionActualizar($cod_cur,$posicion,$cod_nota)) ? $this->model->validarPosicionActualizar($cod_cur,$posicion,$cod_nota): false;
    }
    
}
?>
