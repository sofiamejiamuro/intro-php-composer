<?php

namespace Text;

// As in Js class name is the same as file name
class Format
{
  public static function upperText($value)
  {
    return strtoupper($value);
  }
  public static function lowerText($value)
  {
    // es un método nativo de php
    return strtolower($value);
  }
}