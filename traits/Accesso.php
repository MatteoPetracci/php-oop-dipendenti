<?php
  trait Accesso
  {
    public $accesso;
    public function getAccesso($_stringa)
    {
      if (empty($_stringa)) {
        throw new Exception("Error Processing Request");
      }  else {
        $this->accesso = true;
      }
    }
  }

?>
