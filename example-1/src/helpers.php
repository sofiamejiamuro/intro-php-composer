<?php
// El archivo helpers almacena las funciones reptitivas en las vistas o controladors

// condiciconal que revisa que la función no exista y en  caso de que no exista, que la condición resulte true, php la crea si es false la manda llamar y no la vuelve a cargar

if( ! function_exists('upper') ) {
  function upper($value)
  {
    return Text\Format::upperText($value);
  }  
}

if( ! function_exists('lower') ) {
  function lower($value)
  {
    return Text\Format::lowerText($value);
  }
} 