# Composer

COMPOSER es a php lo que NPM es a Javascript, un gestor de dependencias a través del cual puedes decargar librerias de toda la comunidad PHP

1. Instalación
2. Configuracicón  de archivo composer.json

```php
{
  // proveedor/nombre del paquete
  "name": "sofia/text",
  // sistema de autocarga
  "autoload": {
    "psr-4": {
      // Text va a apuntar al nombre de la carpeta src
      "Text\\": "src/"
    },
    // Sistemqa de autocarga de archivos
    "files": [
      "src/helpers.php"
    ]
  }
}
```

3. en terminal
```
composer dump
```
lo que va a crear la carpeta vendor y sus archivos dentro

Composer es también un sistema de carga automática si no tuvieramos el archivo de configuración entonces se podría hacer todo igualmente pero de forma manual.

Composer --> centraliza la gestiòn de paquetes en php, maneja las dependencias de php

Packagist --> es el buscador
https://packagist.org/

### Requerir un paquete 

También se hace diferencia, como en npm, de dependencias que son de desarrollo y dependencias globales.

Siempre al requerir paquetes se crea una carpeta vendor

Ej. un paquete para hacer unit testing
```
composer require --dev phpunit/phpunit
```

Ej. un paquete para manejo de fechas
```
composer require nesbot/carbon
```


## Autoload

Carga de n cantidad de clases de manera automática

```php
{
  "autoload": {
    // Archivos ayudantes
    "files": [
      "src/file1.php",
      "src/file2.php"
    ],
    // Se cargan de forma directa carpetas que van a contener diferentes clases
    "classmap": [
      "database/seeds",
      "database/factory"
    ],
    // forma antigua y que requiere muchas rutas
    "psr-0": {

    }, 
    // forma más común, se omite psr-0
    "psr-4": {
      
    } 
  }
}
```

Y una vez creado el archivo de confirguración composer.php, corremos en la terminal le comando
```
composer dump
```

y esto creara la carpeta vendor.

Siempre que usemos un archivo index.php se debe invocar el archivo de autocarga

### Comandos composer

### Composer.lock

**LA CARPETA VENDOR NO SE COMPARTE!!!!!**