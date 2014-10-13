<?php
/*
   Last updated 2013-03-20.

   You have a UTF-8 string with a supposed country name.
   Use this to validate that name, and get the country's ISO 3166 code.
   
   All country aliases are in lowercase.
   Make your string lowercase before trying to match.

   Collection made by Johannes Lundberg
   Send fixes to first.last@gmail.com

   Use freely. Public domain.
*/

$countryaliases = array(
"antigua & barbuda"=>"AG",
"ascension island"=>"SH",
"bolivia"=>"BO",
"bosnia & herzegovina"=>"BA",
"british virgin islands"=>"VG",
"central african rep."=>"CF",
"congo, d.r."=>"CD",
"cote divoire"=>"CI",
"curacao"=>"CW",
"czech rep."=>"CZ",
"dem. rep. of the congo"=>"CD",
"democratic republic of the congo"=>"CD",
"dominican rep."=>"DO",
"east timor"=>"TL",
"faeroe islands"=>"FO",
"falkland islands"=>"FK",
"falkland islands, malvinas"=>"FK",
"guinea bissau"=>"GW",
"hongkong"=>"HK",
"hong kong, china"=>"HK",
"iran"=>"IR",
"ivory coast"=>"CI",
"lao"=>"LA",
"lao p.d.r."=>"LA",
"laos"=>"LA",
"korea, rep. of"=>"KP",
"macao, china"=>"MO",
"macau"=>"MO",
"macedonia"=>"MK",
"micronesia"=>"FM",
"moldova"=>"MD",
"north korea"=>"KP",
"palestine"=>"PS",
"palestinian territory"=>"PS",
"palestinian territory, occupied"=>"PS",
"reunion"=>"RE",
"russia"=>"RU",
"saint helena"=>"SH",
"sao tome & principe"=>"ST",
"sint maarten"=>"SX",
"south korea"=>"KR",
"st lucia"=>"LC",
"st vincent & the grenadines"=>"VC",
"st kitts & nevis"=>"KN",
"syria"=>"SY",
"taiwan"=>"TW",
"tanzania"=>"TZ",
"the former yugoslav republic of macedonia"=>"MK",
"trinidad & tobago"=>"TT",
"turks & caicos islands"=>"TC",
"us virgin islands"=>"VI",
"venezuela"=>"VE",
"vietnam"=>"VN",
);

/*
 * Optional sample function - use if you like.
 * Include 'countrynames.php' before this file.
 */
function string2countrycode($string) {
  global $countryaliases,$countrynames;
  
  // If countrynames.php is included, add lowercase versions to aliases
  // Only do this the first function call, hence the 'sweden' key check
  if (isset($countrynames) && !isset($countryaliases['sweden'])) {
    foreach($countrynames as $code => $name) {
      $countryaliases[mb_strtolower($name)] = $code;
    }
  }
  
  // Make lowercase
  $string = mb_strtolower($string);
  
  // Is there a match for this alias?
  return isset($countryaliases[$string]) ?
    $countryaliases[$string] : '';
}

?>