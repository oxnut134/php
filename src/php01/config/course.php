<?php

$customer = htmlspecialchars($_GET['customer'], ENT_QUOTES);
print "私の名前は" . $customer . "<br>";
$item = htmlspecialchars($_GET['item'], ENT_QUOTES);
print "私の希望は" . $item ;
$quantity = htmlspecialchars($_GET['quantity'], ENT_QUOTES);
print "で、数量は" . $quantity . "<br>";

/*$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);
$customer = htmlspecialchars($_GET['customer'], ENT_QUOTES);
$item = htmlspecialchars($_GET['item'], ENT_QUOTES);
$quantity = htmlspecialchars($_GET['quantity'], ENT_QUOTES);

foreach ($_GET as $perchase => $data) {
$data = htmlspecialchars($_GET[$perchase], ENT_QUOTES);  
}
$customer = $data[customer];
$item = $data[item];
$quantity=$data[quantity];

print "私の名前は" . $customer . "<br>";
print "私の希望は" . $item . "<br>";
print "私の数量は" . $item . "<br>";

/*foreach ($_GET as $perchase => $data) {
  print $perchase . "は" . $data . "です" . '<br />';
}*/



