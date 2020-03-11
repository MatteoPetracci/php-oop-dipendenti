<?php
  require_once 'Dipendente.php';
  class Dirigente extends Dipendente
  {
    public $bonus;
    public function __construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo,$_accesso, $_oreEstero)
    {
      parent::__construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo,$_accesso);
      $this->oreEstero = $_oreEstero;
    }
    public function setExtra($_oreEstero) {
      if (!is_numeric($_oreEstero)) {
        throw new Exception('Ruolo non inserito correttamente');
      } else {
        $this->oreEstero = $_oreEstero;
      }
    }
    public function getExtra() {
      return $this->oreEstero;
    }
  }


?>
