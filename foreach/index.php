<?php
  $lyo13 = array(
    'eleve1'  => "julien",
    'eleve2'  => "audrey",
    'eleve3'  => "nour",
    'eleve4'  => "hasmik",
    'eleve5'  => "fred",
    'eleve6'  => "ztein",
    'eleve7'  => "célia",
    'eleve8'  => "guillaume",
    'eleve9'  => "christophe",
    'eleve10' => "yorick",
    'eleve11' => "lenny",
    'eleve12' => "fatma",
    'eleve13' => "jp",
    'eleve14' => "rudy"
  );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>foreach</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>tableau associatif</h1>

    <?php
      $myTab = array(
        "key1" => "value1",
        "key2" => "value2",
        "key3" => "value3",
        "key4" => "value4",
        "key5" => "value5"
      ); ?>

        <pre>
$myTab = array(
  "key1" => "value1",
  "key2" => "value2",
  "key3" => "value3",
  "key4" => "value4",
  "key5" => "value5"
);
        </pre>

        <p>la variable $key récupèrera les données suivante :</p>
        <?php foreach ($myTab as $key) : ?>
          <div>
            <ul>
              <li><?= $key; ?></li>
            </ul>
          </div>
        <?php endforeach;?>

        <p>En revanche pour récupérer la valeur, on va saisir la variable $value pour obtenir le résultat :</p>
        <?php foreach ($myTab as $key => $value) : ?>
          <div>
            <ul>
              <li><?= $value; ?></li>
            </ul>
          </div>
        <?php endforeach; ?>

        <p>Mais bien entendu, il sera possible de récupérer les 2 en même temps soit :</p>
        <?php foreach ($myTab as $key => $value) : ?>
          <p>Ma clé : <mark><?= $key; ?></mark> dispose comme valeur : <mark><?= $value; ?></mark></p>
        <?php endforeach; ?>

        <h2>Autres exemple d'utilisation</h2>
        <p>Imaginons un select dans un formulaire qui permettrait la sélection d'élève. <br />
        L'utilisation d'un foreach sera très utile pour éviter de tout réutiliser.</p>
        <form action="" method="post">
          <div class="form-group">
            <select class="form-control" name="choice">
              <?php foreach ($lyo13 as $key => $value) : ?>
                <option value='<?= $key ?>'><?= $value ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
