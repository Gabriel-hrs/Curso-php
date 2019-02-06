<?php
class Processador {
  public function($expressao){
    // conta
    // return $resultado
  }
}

class Computador {
  var $processador;
  var $monitor;
  var $teclado;
  var $mouse;
  var $caixaSom;

  public function __construct($monitor, $teclado, $mouse, $caixaSom){
    $this->processador = new Processador(); // objeto de relação Composição
    $this->monitor = $monitor;
    $this->teclado = $teclado;
    $this->mouse = $mouse;
    $this->caixaSom = $caixaSom;
  }
}

$monitor = new Monitor('ADC'); // objeto de relação Agregação

$computador = new Computador($monitor, 'qwerty', 'microsoft');

print_r($computador);

 ?>
