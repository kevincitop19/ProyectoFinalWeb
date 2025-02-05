<?php
require_once './modelo/dao/NosotrosDAO.php';

if(!isset($_SESSION)){
    session_start();
}

class NosotrosController{

    private $modelo;

    public function __construct() {
        $this->modelo = new NosotrosDAO();
    }

    public function iniciarFormulario(){
        $resultados = $this->modelo->getDatos();
        require_once './vista/nosotros/frm_registro_testimonio.php';
    }

    public function insertar(){
        $resultados=false;
        $comentario = $_REQUEST['testimonio'];
        $calificacion = $_REQUEST['calificacion'];
        $fecha= date('Y-m-d H:i:s');
        $id = $_REQUEST['id'];
        if(!empty($comentario) && !empty($calificacion) && !empty($fecha) && !empty($id)){
           $resultados = $this->modelo->insertar($comentario,$calificacion,$fecha, $id);  
        }
        if(!$resultados){
            $_SESSION['msj'] = "Ha ocurrido un error";
        }else{
            header('Location:index.php?c=navegacion&f=RedireccionarPaginaNosotros');
        }
        
    }

}
?>