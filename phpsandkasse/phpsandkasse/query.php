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

// get the q & funk parameter from URL
$funk = $_REQUEST["i"]; // contains witch textfield si currently in focus
$q = $_REQUEST["q"]; // contains value of textfield

$ret = '{"test":[' .
  '{"field":"A","value":"E M P T Y !"},' .
  '{"field":"B","value":"E M P T Y !"},' .
  '{"field":"C","value":"E M P T Y !"},' .
  '{"field":"D","value":"E M P T Y !"},' .
  '{"field":"E","value":"E M P T Y !"}' .
  ']}';

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
  $ret = '{"test":[' .
  '{"field":"A","value":"' . $hint . '"},' .
  '{"field":"B","value":"NAME IS BEING TYPED"},' .
  '{"field":"C","value":"Length of A = ' . strlen($hint) . '"},' .
  '{"field":"D","value":"Length of First name = ' . strlen($q) . '"},' .
  '{"field":"E","value":""}' .
  ']}';

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
    $ret = '{"test":[' .
      '{"field":"A","value":"LAST NAME IS BEING TYPED"},' .
      '{"field":"B","value":"' . $hint . '"},' .
      '{"field":"C","value":""},' .
      '{"field":"D","value":""},' .
      '{"field":"E","value":""}' .
      ']}';
}
else if ($funk === 'f3') {
    $htmlstring = "<span style='color: red'>Hello</span>";
//    $htmlstring = '<span>Hello</span>';
    $ret = '{"test":[' .
      '{"field":"A","value":"textfield f3 is active!!!"},' .
      '{"field":"B","value":"' . $htmlstring . '"},' .
      '{"field":"C","value":""},' .
      '{"field":"D","value":""},' .
      '{"field":"E","value":""}' .
      ']}';
}


// Output "no suggestion" if no hint was found or output correct values
echo $ret;