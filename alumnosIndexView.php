<div>
    <h1>Administracion de usuarios </h1>
    <h3>Welcome <?= $Nombre ?></h3>
    <p>
       administración de usuarios
    </p>
    <p>
        
        
    </p>

    <h3><a href="http://localhost/noticias_personalizadas?C=alumnoController&M=callInsertForm">Insertar nuevo usuario</a></h3>

    <table border="1">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Correo</td>
                <td>Rol</td>
                <td>telefono</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach($datos as $dato){
                    echo "<tr>";
                    echo "<td>". $dato['Nombre'] ."</td>";
                    echo "<td>". $dato['Apellido'] ."</td>";
                    echo "<td>". $dato['Amaterno'] ."</td>";
                    echo "<td>". $dato['Correo'] ."</td>";
                    echo "<td>". $dato['Rol'] ."</td>";
                    echo "<td>". $dato['telefono'] ."</td>";
                    echo "<td> 
                        <button onclick='editar(". $dato['ID'] .")' >Editar</button> 
                        <button onclick='eliminar(". $dato['ID'] .")' >Eliminar</button> </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        function editar(ID){
            window.location.href="http://localhost/noticias_personalizadas?C=alumnoController&M=callEdditForm&id="+ID;
        }

        function eliminar(ID){
            if(confirm("Realmente quieres eliminar al registro "+ID+"?")){
                window.location.href="http://localhost/noticias_personalizadas?C=alumnoController&M=delete&id="+ID;
            }
        }
    </script>
</div>