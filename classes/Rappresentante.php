<?php
  require_once 'Dipendente.php';

  class Rappresentante extends Dipendente
  {
    public $prodottiVenduti;

    public function __construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo,$_autorizzazione, $_prodottiVenduti)
    {
      parent::__construct($_dipendenteId, $_nomeCognome,$_cf, $_ruolo,$_autorizzazione);

        $this->prodottiVenduti = $_prodottiVenduti;
      
    }
  }

?>
