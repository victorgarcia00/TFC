Plan en pseudocódigo:

1. Obtener el nombre de usuario y contraseña del formulario de registro.
2. Validar que el nombre de usuario no esté en uso.
3. Crear un directorio con el nombre de usuario en una ubicación predefinida del servidor.
4. Asignar permisos de escritura al directorio para que el usuario pueda añadir archivos.

Código:

```
<?php
// Obtener el nombre de usuario y la contraseña del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];

// Validar que el nombre de usuario no esté en uso
if(file_exists('/ruta/a/la/carpeta/de/usuarios/' . $username)) {
    echo 'Nombre de usuario ya en uso.';
}
else {
    // Crear un directorio con el nombre de usuario
    mkdir('/ruta/a/la/carpeta/de/usuarios/' . $username);

    // Asignar permisos de escritura al directorio
    chmod('/ruta/a/la/carpeta/de/usuarios/' . $username, 0777);

    // Informar al usuario que su registro ha sido exitoso
    echo 'Registro exitoso.';
}
?>
```

Nota: Asegúrate de reemplazar "/ruta/a/la/carpeta/de/usuarios/" con la ruta real de la carpeta en la que quieres almacenar las carpetas de usuario. Además, dependiendo del servidor, es posible que necesites cambiar los permisos a algún valor distinto de 0777.