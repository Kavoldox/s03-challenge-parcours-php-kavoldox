<?php
require_once '../inc/functions.php';

/*
 * Exo 6 : Mamie reçoit les p’tits enfants
 *
 * Bon, tant qu'on y est, ça serait bien aussi de calculer leur âge.
 * J'ai toujours eu la bonne mémoire des dates, je connais leur
 * date de naissance par coeur.
 *
 * Seulement, pour calculer leur âge à partir de leur date de naissance,
 * saperlipopette !
 *
 * Si je te rajoute un paramètre `birth` à l'URL, tu crois que tu pourrais
 * aussi me rajouter l'âge ? Je te passe la date sous la forme DD-MM-YYYY.
 * Par exemple :
 *   `exo5.php?name=Zelda&birth=18-05-2003`
 *
 * Ensuite, il te "suffirait" qu'à récupérer, découper, puis comparer…
 *   http://php.net/manual/fr/function.explode.php
 *   http://php.net/manual/fr/function.date.php
 *
 *
 * Allez, bon courage… (mouhahaha)
 */

// Correction : très bien
function hello() {

    // recup et mis en array des deux dates

    // Correction : mais que se passe-t-il si "birth" n'est pas défini dans l'URL ?
    $bDate = explode("-", $_GET['birth']);
    $cDate = explode("-", date('d-m-Y'));

    //comparaison et calcul

    $age = $cDate[2] - $bDate[2];
    //echo $age;
    if (($cDate[1] < $bDate[1]) || ($cDate[1] < $bDate[1]) && ($cDate[0] < $bDate[0])) {
        $age = $age -2;
    }
    //echo $age;
    //echo 'Bonjour ' . $_GET['name'] . ' , comment tu vas ? Tu as ' . $age . ' ans mainteant !';

    // Correction : mais que se passe-t-il s'il n'y a pas "?name=Zelda" dans l'URL ?
    return 'Bonjour ' . $_GET['name'] . ' , comment tu vas ? Tu as ' . $age . ' ans mainteant !';
}



/*
 * Tests
 * Pas touche !
 */
displayExo(6, (
    hello() === 'Bonjour Elisa, comment tu vas ? Tu as 15 ans maintenant !'
));
