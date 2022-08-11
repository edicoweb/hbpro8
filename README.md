### Clonar el Repositorio de git

```
git clone https://github.com/edicoweb/hbpro8.git
```

### Moverse al directorio del proyecto

```
cd hbpro8
```

### Descargar Dependencias del Proyecto

Como las dependencias del proyecto las maneja **composer** debemos ejecutar el comando:

```
composer install
```

### Configurar Entorno

La configuración del entorno se hace en el archivo **.env** pero esé archivo no se puede versionar según las restricciones del archivo **.gitignore**.

Es necesario modificar los valores de las variables de entorno para adecuar la configuración a nuestro entorno de desarrollo, por ejemplo los parámetros de conexión a la base de datos.

### Generar la clave de cifrado de su aplicación

```
php artisan key:generate
```
