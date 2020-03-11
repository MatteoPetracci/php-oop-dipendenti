<?php
include_once __DIR__ . '/../traits/Accesso.php';
class Dipendente
{
  use Accesso;
  private $dipendenteid; // (int)
  private $nomeCognome; // (stringa)
  private $cf; // (stringa)
  private $ruolo; // (int)
  private $euroGiorno; // (int)
  public $anniAnzianità; // (int)
  public $tipoContratto;
  private $stipendio;

function __construct($_dipendenteId, $_nomeCognome, $_cf, $_ruolo,$_autorizzazione)
  {
    if (!empty($_autorizzazione)) {
      $this->getAccesso($_autorizzazione);
    }
    if ($this->accesso == false) {
      throw new Exception('Error');
    }
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
    $this->ruolo = $_ruolo;
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
  public function setStipendio($_stipendio)
    {
      if (empty($_stipendio)) {
        throw new Exception('Errore inserimento dati');
      } else {
        $this->stipendio = $_stipendio;
      }
    }
  public function getStipendio() {
    return $this->stipendio;
  }
  public function setRuolo($_ruolo) {
    if (empty($_ruolo)) {
      throw new Exception("Error Processing Request");
    } else {
      return $this->ruolo = $_ruolo;
    }
  }
  public function getRuolo() {
    return $this->ruolo;
  }

}

?>
