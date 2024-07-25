<div>
    <h1>Formulario para agregar usuario</h1>

    <form action="http://localhost/noticias_personalizadas/?C=alumnoController&M=insert" method="post">
        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="nombre">
        </div>
        <div>
            <label for="Apaterno">Apellido paterno:</label>
            <input type="text" name="Apaterno" placeholder="Apellido paterno">
        </div>
        <div>
            <label for="Amaterno">Apellido materno:</label>
            <input type="text" name="Amaterno" placeholder="apellido materno">
        </div>
        <div>
            <label for="Correo">Correo:</label>
            <input type="text" name="Correo" placeholder="Correo">
        </div>
        <div>
            <label for="Passwd">Password:</label>
            <input type="password" name="Passwd" placeholder="Password">
        </div>
        <div>
            <label for="Fecha_Na">Fecha de nacimiento:</label>
            <input type="date" name="Fecha_Na" placeholder="">
        </div>
        <div>
            <label for="Fecha_Reg">Fecha de registro:</label>
            <input type="date" name="Fecha_Reg" placeholder="Fecha de registro">
        </div>
        <div>
            <label for="Rol">Rol:</label>
            <input type="text" name="Rol" placeholder="rol">
        </div>
        <div>
            <label for="genero">Género:</label>
            <input type="text" name="genero" placeholder="femenino/masculino">
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" placeholder="teléfono">
        </div>
        <input type="submit" value="Registrar">
        <div>
          
    </form>
</div>