<!-- <?php
print "Bonjour";
// ?> -->


<!-- excercise 1 -->
<?php
$numero = readline("Saisir un nombre  ");
if ($numero == 2) {
    print "c'est correct";
}
    else {
        print "ce n'est correct";
    }
?>


<!-- excercise 2 -->
<?php
$numero = readline("Saisir un nombre  ");
if ($numero <= 10) {
    print "« Plus grand !";
}
if ($numero >= 20) {
        print "Plus petit !";
    }
?>

<!-- excercise 3 -->
<?php
$numero = readline("Saisir un nombre  ");
$max = $numero + 9;
while ($numero <= $max)
    echo $numero++;
?>

<!-- excercise 4 -->
<?php
$numero = readline("Saisir un nombre  ");
$max = $numero + 10;
for ($numero = $numero; $numero < $max; $numero++) 
    print "$numero";
?>

<!-- excercise 5 -->
<?php
$numero = readline("Saisir un nombre  ");
$multi = 1;
while ($multi < 11)
echo "   $numero x $multi = " . $multi++ * $numero;
//  print "$numero x $multi = " echo;
?>

<!-- excercise 6 -->
<?php
    $somme=0;

    $saisie=readline("Entrez un nombre :");

    for($compteur=1;$compteur<=$saisie;$compteur++) {
        $somme+=$compteur;
    }
    print "La somme est : ".$somme;

?>


<!-- excercise 7 -->
<?php
    $somme=1;

    $saisie=readline("Entrez un nombre :");

    for($compteur=1;$compteur<=$saisie;$compteur++) {
        $somme*=$compteur;
    }
    print "La somme est : ".$somme;

?>


<!-- excercise 8 -->
<?php
	$tableau = array();
	
	for($i = 1; $i < 3; $i++) {
		$saisie=readline("Entrez le nombre $i:  ");
		//première méthode avec array_push
		//array_push($tableau,$saisie);
		//deuxième méthode
		$tableau[] = $saisie;
	}
	print_r($tableau);
    echo max ($tableau);
?>

<!-- excercise 9 -->
<?php
	 $tabl = array();
     for($i = 1; $i < 3; $i++) {
        $sais = readline("Entrez le nombre $i:  ");
        $tabl[] = $sais;
        echo max ($tabl);
        // while ($sais == 0);
    }
?>

<!-- excercise 10 -->
<?php
    $tab = array();
    $prix = 1;
    while($prix != 0) {
        $prix = readline("Entrez un prix :");
        $tab[] = $prix;   
    }
    echo  array_sum($tab);
        $paye = readline("Entrez un paye :");
        $remise = $paye - array_sum($tab);
    print "votre remise a : ".$remise;
    $remise10 = round($remise/10);
    $remise5 = round(($remise - $remise10*10)/5);
    $remise1 = round($remise - $remise10*10 - $remise5*5);
    print "votre remise 10 Euros : ".$remise10;
    print "votre remise 5 Euros :".$remise5 ;
    print "votre remise 1 Euros :".$remise1 ;
?>

<!-- excercise 10 -->
<?php
	//fonction écrite par la main de l'homme jérôme
	function factorielle($nombre) {
		$fact=1;
		for($compteur=1;$compteur<=$nombre;$compteur++) {
			$fact*=$compteur;
		}
		return $fact;
	}
	//fonction trouvée sur internet (PHP Sources)
	function fact($n) {
     if ($n <= 1) 
      return 1; 
      return ($n * fact($n - 1)); 
    }
	
	$nb_partants=readline("Nombre partants :");
	$nb_joues=readline("Nombre joués :");
	$x=factorielle($nb_partants)/factorielle($nb_partants-$nb_joues);
	$y=factorielle($nb_partants)/(factorielle($nb_joues)*factorielle($nb_partants-$nb_joues));
	
	print "Dans l’ordre : une chance sur ".$x." de gagner".PHP_EOL;
	print "Dans le désordre : une chance sur ".$y." de gagner".PHP_EOL;
	

?>

