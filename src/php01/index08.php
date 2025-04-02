<?php
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')', "\n";
}
/*$people = [
  'Taro' => '25際men',
  'Jiro'  => '20際men',
  'hanako'  => '16際women'
];

foreach ($people as $person => $age) {
  print $person . "(" . $age . ")" . "\n";
}/*
people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo "\n";
}/*$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
*/