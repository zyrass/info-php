<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sprintf</title>
    <style media="screen">
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Fonction sprintf() la concaténation des experts.</h1>
    <p>la fonction sprintf() retourne une chaine formater</p>
    <p>Voir sur la doc le fonctionner. Pas mal d'information sont utile.</p>

    Exemple :
    <pre>
        &lt;?php
          $test = "Je suis une chaine de caractère.";
          $question = "Qui est tu";
          $result = sprintf("%s ? %s", $question, $test);
        ?&gt;
    </pre>
    <div class="alert alert-info">
      <?php
        $test    = "Je suis une chaine de caractère.";
        $question = "Qui es-tu";
        $result  = sprintf("%s ? %s", $question, $test);

        echo $result;
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
