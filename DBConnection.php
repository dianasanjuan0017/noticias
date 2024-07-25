<?php
    class DBConnection{
        //Crear un atributo que me permita manipular la base de datos 
        private $Connection;
        //definimos el contructor de la clase en el que vamos a conectar con la base de datos 
        public function __construct()
        {
            //llamamos las constantes que definimos en el archivo de configuracion 
            require_once("app/config/config.php");
            //creamos la coneccion a la base de datos con la clase MYSQLI
            $this->Connection= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            //verificamos si la coneccion fue exitosa 
            if($this->Connection->connect_error){
                die("Error al conectar a la base de datos : " . $this->Connection->connect_error);
            }
        }
        
        //Metodo para obtener la coneccion 
        public function getConnection(){
            return $this->Connection;
        }

        //Metodo para cerrar la coneccion 
        public function closeConnection(){
            $this->Connection->close();
        }
    }
?>