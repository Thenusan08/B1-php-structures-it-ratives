<?php

define("NB_SIEGES", 40);

for ($numSiege = 1; $numSiege <= NB_SIEGES; $numSiege++) {

    if ($numSiege % 3 == 2) {
        echo "Siège numéro ", $numSiege, ": Bleu\n";
    }
}
?>
