<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7 Partie 4 PHP</title>
  </head>
  <body>
    <p>
      <?php
      $genre = 'homme';
      $age = 2;
      function genderIdentificator($genre, $age)
      {
        if (($age < 18) AND ($genre == 'femme')) {
          $result = 'Vous êtes une femme mineure';
        } elseif (($age < 18) AND ($genre == 'homme')) {
          $result = 'Vous êtes un homme mineur';
        } elseif (($age >= 18) AND ($genre == 'femme')) {
          $result = 'Vous êtes une femme majeure';
        } else {
          $result = 'Vous êtes un homme majeur';
        }
        return $result;
      }
      echo genderIdentificator($genre, $age);
      ?>
    </p>
  </body>
</html>
