<?php

abstract class FormaGeometrica{
  protected $base;
  protected $altura;

  abstract public calcArea();

  final public function getBase() {
    return $this->base;
  }

  final public function getAltura() {
    return $this->altura;
  }
}

class Quadrado implements FormaGeometrica {

  public function __construct($lado){
      $this->base = $lado;
      $this->altura = $lado;
  }
  public function calcArea() {
    return $this->base * $this->altura;
  }
}

class Retangulo implements FormaGeometrica {

  public function __construct($base, $altura) {
      $this->base = $base;
      $this->altura = $altura;
  }
  public function calcArea() {
    return $this->base * $this->altura;
  }
}

$forma = new FormaGeometrica();

$quadrado = new Quadrado();

$retangulo = new Retangulo();

print_r($forma);

print_r($quadrado);

print_r($retangulo);
?>
