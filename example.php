<?php

include 'countrynames.php';
include 'countryaliases.php';

$code = string2countrycode('Sweden');
echo "$code => $countrynames[$code]\n";

$code = string2countrycode('Iran');
echo "$code => $countrynames[$code]\n";

$code = string2countrycode('North Korea');
echo "$code => $countrynames[$code]\n";

$code = string2countrycode('Taiwan');
echo "$code => $countrynames[$code]\n";

$code = string2countrycode('Bolivia');
echo "$code => $countrynames[$code]\n";

$code = 'HR';
echo "$code => $countrynames[$code]\n";

$code = 'EE';
echo "$code => $countrynames[$code]\n";

echo implode(',',$countrycodes)."\n";

?>