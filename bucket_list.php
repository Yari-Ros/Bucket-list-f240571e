
<?php
$hoeveelheid = readline ("Hoeveel activiteiten wil je invoeren? ");
if (is_numeric($hoeveelheid)) {
  $lijst = array();
}
else {
  echo "Je moet een getal invoeren";
  exit();
}
for ($i=1; $i <=$hoeveelheid ; $i++) {
$activiteiten = readline ("Welk activiteit wil je toevoegen?");
array_push($lijst,$activiteiten);
}
echo "Je activiteiten zijn:" . PHP_EOL;
for ($i=0; $i <= $hoeveelheid ; $i++) {
  echo $lijst[$i] . PHP_EOL;
}
#Oplossing
//foreach ($lijst as $item) {
//  echo ($item) . PHP_EOL;
//}