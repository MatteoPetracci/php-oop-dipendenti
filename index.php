<?php
  require_once __DIR__ . '/classes/Dipendente.php';
  require_once __DIR__ . '/classes/Dirigente.php';

  $dipendente1 = new Dirigente(1,'Paolo Rossi','PRNCM45LKSM56','Grafico',15);

  $dipendente2 = new Dipendente(2,'Paolo Bianchi','RTN78L13H5019','Sviluppatore');

  try {
    $dipendente1->setExtra(10);
  } catch (\Exception $e) {
    echo 'errore'. $e->getMessage();
  }
  var_dump($dipendente1);
  var_dump($dipendente2);
  $dipendente1->setExtra(30);
  var_dump($dipendente1);
  


?>
