<?php
  // creo le variabili
  $nome = $_GET['name'];
  $email = $_GET['email'];
  $eta = $_GET['age'];

  var_dump($nome, $email, $eta);

  // se le condizioni sono rispettate
  if ((strlen($nome) > 3) &&
      filter_var($email, FILTER_VALIDATE_EMAIL) &&
      filter_var($eta, FILTER_VALIDATE_INT)) {
?>
    <p>
      Accesso riuscito
    </p>
<?php } else { ?>
    <p>
      Accesso negato
    </p>
<?php } ?>