<?php
$age = 18;
$ward = 020;
$pvc = true;

if($age >= 17 && $ward == 020 && $pvc == true ){
    echo "Voter eligible to vote";
} else {
    echo 'Voter not eligible to vote $age is small';
}

?>