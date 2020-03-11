<?php

class Dipendente
{
  private $dipendenteid; // (int)
  private $nomeCognome; // (stringa)
  private $cf; // (stringa)
  private $ruolo; // (int)
  private $euroGiorno; // (int)
  public $salario; // (int)
  public $anniAnzianità; // (int)
  public $tipoContratto;

function __construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo)
  {
    if (empty($_dipendenteId)) {
      throw new Exception('ID non inserito correttamente'); //throw al posto di die
    }
    else {
      $this->dipendenteId = $_dipendenteId;
    }
    if (empty($_nomeCognome)) {
      throw new Exception('Nome e Cognome non inserito correttamente');
    }
    else {
      $this->nomeCognome = $_nomeCognome;
    }
    if (empty($_cf)) {
      throw new Exception('CF non inserito correttamente');
    }
    else {
      $this->cf = $_cf;
    }
    if (empty($_ruolo)) {
      throw new Exception('Ruolo non inserito correttamente');
    }
    else {
      $this->ruolo = $_ruolo;
    }
  }
  public function getDati() {
    $results = [
      'Id'=> $this->dipendenteId,
      'Nome e Cognoome'=> $this->nomeCognome,
      'Codice Fiscale'=> $this->cf,
      'Ruolo'=> $this->ruolo,
    ];
    return $results;
  }

}

?>
