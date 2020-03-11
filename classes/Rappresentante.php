<?php
  require_once 'Dipendente.php';

  class Rappresentante extends Dipendente
  {
    public $prodottiVenduti;
    public function __construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo, $_prodottiVenduti)
    {
      parent::__construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo);
      if (!is_int($_prodottiVenduti)) {
        throw new Exception('Non è un numero');
      }
      else {
        $this->prodottiVenduti = $_prodottiVenduti;
      }
    }


  }

?>
