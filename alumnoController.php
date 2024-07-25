<?php
    //incluimos el modelo para poder instancialrlo dentro del controlaxor 
    include_once("app/model/alumnoModel.php");
    class alumnoController{
        //creamos un atributo para referenciar al modelo del alumno
        private $alumno;

        public function index(){
            if(session_status()===PHP_SESSION_NONE){
                session_start();
            }

            if( isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                //instanciamos el modelo de alumno
                $this->alumno= new alumnoModel();
                //obtenemos la informacion a trabajar dentro de la vista 
                $datos = $this->alumno->getAll();
                $Nombre=$_SESSION['Nombre'];
                //definimos la vista a mostrar dentro de la plantilla
                $vista= "app/view/admin/alumnos/alumnosIndexView.php";
                //incluimos la plantilla
                include_once("app/view/admin/plantillaview.php");
            } else{
                header("location:http://localhost/noticias_personalizadas/");
            }
        }

        public function callInsertForm(){
            if(session_status()===PHP_SESSION_NONE){
                session_start();
            }
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                $vista="app/view/admin/alumnos/InsertFormView.php";
                include_once("app/view/admin/plantillaView.php");
            }else{
                header("location:http://localhost/noticias_personalizadas/");
            }
        }
        
        public function insert(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(!isset($_POST['Nombre'],$_POST['Apaterno'],$_POST['Amaterno'],
                $_POST['Correo'],$_POST['Passwd'],$_POST['Fecha_Na'],$_POST['Fecha_Reg'],$_POST['Rol'],
                $_POST['genero'],$_POST['telefono'])){
                    header("location:http://localhost/noticias_personalizadas");
                }
                $data=array(
                    'Nombre'=>$_POST['Nombre'],
                    'Apaterno'=>$_POST['Apaterno'],
                    'Amaterno'=>$_POST['Amaterno'],
                    'Correo'=>$_POST['Correo'],
                    'Passwd'=>$_POST['Passwd'],
                    'Fecha_Na'=>$_POST['Fecha_Na'],
                    'Fecha_Re'=>$_POST['Fecha_Reg'],
                    'Rol'=>$_POST['Rol'],
                    'genero'=>$_POST['genero'],
                    'telefono'=>$_POST['telefono']
                );
                $alumno= new alumnoModel();
                $resultado=$alumno->insert($data);
                if($resultado){
                    header("location:http://localhost/noticias_personalizadas/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/noticias_personalizadas");
                }
            }
        }

        public function callEdditForm(){
            if(session_status()===PHP_SESSION_NONE){
                session_start();
            }
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                if($_SERVER['REQUEST_METHOD']=='GET'){
                    $ID=$_GET['ID'];
                    $this->alumno=new alumnoModel();
                    $data = $this->alumno->getById($ID);
                    $vista="app/view/admin/alumnos/edditForm.php";
                    include_once("app/view/admin/plantillaView.php");
                }
            }else{
                header("location:http://localhost/noticias_personalizadas");
            }
            
        }

        public function eddit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $dato=array(
                    'ID'=>$_POST['ID'],
                    'Nombre'=>$_POST['Nombre'],
                    'Apaterno'=>$_POST['Apaterno'],
                    'Amaterno'=>$_POST['Amaterno'],
                    'Correo'=>$_POST['Correo'],
                    'Rol'=>$_POST['Rol'],
                    'telefono'=>$_POST['telefono'],
                );
                $this->alumno= new alumnoModel();
                $respuesta=$this->alumno->eddit($dato);
                if($respuesta){
                    header("location:http://localhost/noticias_personalizadas/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/noticias_personalizadas");
                }

            }
        }

        public function delete(){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $ID=$_GET['ID'];
                $this->alumno=new alumnoModel();
                $respuesta=$this->alumno->delete($ID);
                if($respuesta){
                    header("location:http://localhost/noticias_personalizadas/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/noticias_personalizadas");
                }
            }
        }

    }

?>
