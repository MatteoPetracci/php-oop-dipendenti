<?php

class Dipendente
{
  private $dipendenteid; // (int)
  private $nomeCognome; // (stringa)
  private $cf; // (stringa)
  private $ruolo; // (int)
  public $salario; // (int)
  public $anniAnzianità; // (int)
  public $tipoContratto; // (int)

function __construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo)
  {
    if (empty($_dipendenteId)) {
      throw new Exception('ID non inserito correttamente'); //throw al posto di die
    }
    else {
      $this->dipendenteId = $_dipendenteId;
    }
    $this->nomeCognome = $_nomeCognome;
    $this->cf = $_cf;
    $this->ruolo = $_ruolo;
  }
}

  $dipendente1 = new Dipendente(1,'Paolo Rossi','PRNCM45LKSM56','Grafico');
  var_dump($dipendente1);
  $dipendente1->anniAnzianità = 4;
  var_dump($dipendente1);

?>
