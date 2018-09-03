<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
      <?php
        function gender($age, $gender) {
          if ($age >= 18 AND $gender == 'homme') {
            echo 'Vous êtes un homme et vous êtes majeur';
          } elseif ($age < 18 AND $gender == 'homme') {
            echo 'Vous êtes un homme et vous êtes mineur';
          } elseif ($age >= 18 AND $gender == 'femme') {
            echo 'Vous êtes une femme et vous êtes majeur';
          } elseif ($age < 18 AND $gender == 'femme') {
            echo 'Vous êtes une femme et vous êtes mineur';
          }
        }
        gender(25, 'femme');
       ?>
    </p>
  </body>
</html>
