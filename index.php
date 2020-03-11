<?php
  require_once __DIR__ . '/classes/Dipendente.php';
  require_once __DIR__ . '/classes/Dirigente.php';
  require_once __DIR__ . '/classes/Rappresentante.php';


  $dirigente1 = new Dirigente(1,'Mario Rossi','PRNCM45LKSM56','Grafico',15);

  $dipendente1 = new Dipendente(2,'Paolo Bianchi','RTN78L13H5019','Sviluppatore');

  $rappresentante1 = new Rappresentante (3,'Luca Verdi','PRNSK546KM6670','Rappresentante',35);

  try {
    $dirigente1->setExtra(10);
  } catch (\Exception $e) {
    echo 'errore'. $e->getMessage();
  }
  // var_dump($dirigente1);
  // var_dump($dipendente1);
  $dirigente1->setExtra(30);

  // var_dump($rappresentante1);
  $dirigente1->setStipendio(2530);
  $dipendente1->setStipendio(1130);
  $rappresentante1->setStipendio(1430);
  var_dump($dirigente1);
  var_dump($dipendente1);
  var_dump($rappresentante1);
  var_dump($rappresentante1->getStipendio());

  var_dump($dirigente1->getDati());
  var_dump($dipendente1->getDati());
  var_dump($rappresentante1->getDati());


?>
