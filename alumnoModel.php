<?php
class alumnoModel{
    //creamos un atributo para conectar con la base de datos
    private $connection;

    //definimos el contructor para la clase 
    public function __construct()
    {
        //requerimos acceso a la clase coneccion 
        require_once("app/config/DBConnection.php");
        //instanciamos la coneccion a la base de datos en $connection
        $this->connection= new DBConnection();
    }

    //creamos el metodo para obtener la lista de alumnos de nuestra base de datos 
    public function getAll(){
        //Paso 1 : Creamos la consulta 
        $consulta="SELECT * FROM usuario";
        //Paso 2 : Conectamos con la base de datos 
        $coneccion= $this->connection->getConnection();
        //paso 3 : ejecutar la consulta 
        $resultado= $coneccion->query($consulta);
        //paso 4: preparar mi resultado
        //crear un arreglo para almacenar todos los registros 
        $usuarios=array();
        //recorremos el dataset para ir sacando los registros 
        while($usuarios=$resultado->fetch_assoc()){
            $usuarios[]=$usuarios;
        }
        //Paso 5 :cerramos la coneccion 
        $this->connection->closeConnection();
        //paso 6 : Arrojar resultados
        return $usuarios;
    }

    public function getById($id){
        //paso 1
        $consulta="SELECT * FROM usuario WHERE ID = $ID";
        //paso 2
        $coneccion = $this->connection->getConnection();
        //paso 3 
        $resultado = $coneccion->query($consulta);
        //paso 4
        if($resultado && $resultado->num_rows > 0){
            $alumno= $resultado->fetch_assoc();
        }else{
            $alumno=false;
        }
        //paso 5
        $this->connection->closeConnection();
        //paso 6
        return $alumno;
    }

    public function delete($ID){
        $consulta="DELETE FROM usuario WHERE ID= $ID";
        $coneccion=$this->connection->getConnection();
        $resultado= $coneccion->query($consulta);
        $respuesta= $resultado ? true:false;
        $this->connection->closeConnection();
        return $respuesta;
    }

    public function insert($data){
        if(!isset($data['nombre'], $data['Apaterno'], $data['Amaterno'],
                 $data['Correo'], $data['Passwd'], $data['Fecha_Na'], 
                 $data['Fecha_Re'], $data['Rol'], $data['genero'], $data['telefono']))
        {
                return false;
        }
        
        $Nombre = $data['nombre'];
        $Apaterno = $data['Apaterno'];
        $Amaterno = $data['Amaterno'];
        $Correo = $data['Correo'];
        $Passwd = $data['Passwd'];
        $Fecha_Na = $data['Fecha_Na'];
        $Fecha_Re = $data['Fecha_Re'];
        $Rol = $data['Rol'];
        $genero = $data['genero'];
        $telefono = $data['telefono'];

        $consulta = "INSERT INTO usuario (Nombre, Apaterno, Amaterno, Correo, Passwd, Fecha_Na, Fecha_Re, Rol, genero, telefono) 
        VALUES ('$Nombre', '$Apaterno', '$Amaterno', '$Correo', '$Passwd', '$Fecha_Na', '$Fecha_Re', '$Rol', '$genero', '$telefono')";
        $coneccion = $this->connection->getConnection();
        $resultado = $coneccion->query($consulta);
        $respuesta = $resultado ? true : false;
        $this->connection->closeConnection();
        return $respuesta;
    }

    public function eddit($dato){
        if(!isset($dato['ID'], $dato['Nombre'], $dato['Apaterno'], $dato['Amaterno'], $dato['Correo'],
        $dato['Rol'],$dato['telefono'])){
            return false;
        }

        $ID=$dato['ID'];
        $Nombre=$dato['Nombre'];
        $Apaterno=$dato['Apaterno'];
        $Amaterno=$dato['Amaterno'];
        $Correo=$dato['Correo'];
        $Rol=$dato['Rol'];
        $telefono=$dato['telefono'];

        $consulta="UPDATE usuario SET Nombre='$Nombre', Apaterno='$Apaterno', Amaterno='$Amaterno',
        Correo='$Correo',Rol='$Rol',telefono='$telefono'
        WHERE ID=$ID";
        $coneccion=$this->connection->getConnection();
        $resultado=$coneccion->query($consulta);
        $respuesta=$resultado?true:false;
        $this->connection->closeConnection();
        return $respuesta;
    }
}
?>