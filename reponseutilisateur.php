<?php
echo "Confirmez-vous la modification (oui/non)?";
$reponse = rtrim(fgets(STDIN));
$oui = "oui";
$non = "non";

while ($reponse != $oui && $reponse != $non) {
    echo "Saisie incorrecte. Veuillez répondre par 'oui' ou 'non'.\n";
    echo "Confirmez-vous la modification (oui/non)?";
    $reponse = rtrim(fgets(STDIN));
}
	echo "modification en cours \n"

?>
