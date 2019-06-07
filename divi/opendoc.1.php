<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";


$ba[] = "A1nna";
$ba[] = "B1rittany";
$ba[] = "C1inderella";
$ba[] = "D1iana";
$ba[] = "E1va";
$ba[] = "F1iona";
$ba[] = "G1unda";

// get the q parameter from URL
$q = $_REQUEST["q"];
$funk = $_REQUEST["i"];

$hint = "";
$ggg =  '{"test":[{"field":"A","value":"bbb"},{"field":"C","value":"ddd"},{"field":"K","value":"fff"}]}';
if ($funk === 'f1'){
  // lookup all hints from array if $q is different from "" 
  if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
      if (stristr($q, substr($name, 0, $len))) {
        if ($hint === "") {
          $hint = $name;
        } else {
          $hint .= ", $name";
        }
      }
    }
  }
  $ttt = 'style="color:red"';
  $hint = "{ 'test': [" .
    "{ 'field': 'A', 'value': '" . $hint . "'}," .
    "{ 'field': 'B', 'value': '2'}," .
    "{ 'field': 'C', 'value': 'Kan lide <span " . $ttt . "'>milkshake<span>'}," .
    "{ 'field': 'F', 'value': '<h1>YEAH</h1>'}," .
    "]}";
  
}
else if ($funk === 'f2') {
  if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($ba as $name) {
      if (stristr($q, substr($name, 0, $len))) {
        if ($hint === "") {
          $hint = $name;
        } else {
          $hint .= ", $name";
        }
      }
    }
  }

}


// Output "no suggestion" if no hint was found or output correct values 
echo $ggg;
?>