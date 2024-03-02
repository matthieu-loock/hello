<html>
<head>
<meta charset="utf-8" />
<title>Ma page web</title>
</head>
<body>
<h1>Ma page web</h1>
<!-- Simple balise PHP insérée dans le HTML -->
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>


<?php
// On utilise une variable dont le nom est fullname et la valeur Matthieu LOOCK
$fullname = 'Matthieu LOOCK';
// Si on ne fait rien, la valeur de la variable ne s'affiche pas donc on utilise echo
echo $fullname;
// Ici, la variable est de type string, c'est une chaîne de caractères
?>

</br></br></br>

<?php
$fullname = "Matthieu LOOCK";
echo "Bonjour ";
echo $fullname;
echo " et bienvenue sur le site !";
?>

</br></br></br>

<?php // Maintenant, on fait la même chose en utilisant l'interpollation donc avec des " "
$fullname = "Matthieu LOOCK";
echo "Bonjour {$fullname} et bienvenue sur le site !";
?>

</br></br></br>

<?php
// Pour arriver au même résulat avec des '' il faut utiliser la concaténation
$fullname = 'Matthieu LOOCK';
echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
?>

<?php
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6
?>

<?php
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
?>

<?php
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
?>

</body>
</html>
