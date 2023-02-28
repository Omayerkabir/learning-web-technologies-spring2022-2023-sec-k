<?php
    
    $amount = readline("Enter your amount: ");

    $vat  = $amount * (15/100);

    echo "VAT: {$vat}";

?>