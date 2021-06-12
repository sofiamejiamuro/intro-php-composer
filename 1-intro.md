## Introducción a PHP

peticiòn-procesamiento-respuesta

PHP-MySQL

## Etiqueta php

```php
<?php

>
```

### Comentarios

```php
// comentarios
# Comentario
/** 
  * Comentario 
  * de
  * varias
  * líneas
  */
```

### Sintáxis básica

#### Asignación

```php
// Se hace la asignación con = y => hace asignación también pero en estructuras más complicadas

$num = 9;
$lang = [
  'es' => 'español',
  'en' => 'inglés'
];
```

#### Aritmetica

- Suma
- Resta
- Multiplicación
- División
- Módulo
- Exponencial

#### Comparación

- Igual == valor  , ===  valor y tipo
- Diferencias != , !==
-  <, > , >= , <=


#### Variables variables 

```php
$app = 'name';
$name = 'platzi';

echo $app;    //'name' name como valor
echo $$app;   //'platzi' name como variable

```

#### Bloques de códigos

Estructuras de control: 
- if
```php
if (condition) {

} elseif (condition) {
  
} else {

}
```

- switch/case
```php
switch($login) {
  case true:

      break;
  case false:

      break;
  default:

      break;
}
```

- for each

```php
foreach($datos as $row) {

}
```

- while

```php
$a = 1; 
while($a <= 10) {

  $a++;
}
```

- do while

```php
$a = 1; 
do {

} while ($a <= 10)
```

- for

```php
for ($i = 0; $i < 10; $++) {

}
```

