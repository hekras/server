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

$ret = '{"test":[' .
  '{"field":"A","value":"E M P T Y !"},' .
  '{"field":"B","value":"E M P T Y !"},' .
  '{"field":"C","value":"E M P T Y !"},' .
  '{"field":"D","value":"E M P T Y !"},' .
  '{"field":"E","value":"E M P T Y !"},' .
  '{"field":"F","value":"E M P T Y !"},' .
  '{"field":"G","value":"E M P T Y !"},' .
  '{"field":"H","value":"E M P T Y !"},' .
  '{"field":"I","value":"E M P T Y !"},' .
  '{"field":"J","value":"Oh no"},' .
  '{"field":"K","value":"E M P T Y !"}' .
  ']}';

//012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789
//{"test":[{"field":"A","value":", Anna, Amanda"},{"field":"B","value":"NAME IS <span style="color: red">BEING</span> TYPED"},{"field":"C","value":"Length of A = 14"},{"field":"D","value":""},{"field":"E","value":""},{"field":"F","value":""},{"field":"G","value":""},{"field":"H","value":""},{"field":"I","value":""},{"field":"J","value":"Oh no"},{"field":"K","value":""}]}
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
    $ret = '{"test":[' .
    '{"field":"A","value":"' . $hint . '"},' .
    '{"field":"B","value":"NAME IS <span style=' + "'color:red'" . '>BEING</span> TYPED"},' .
    '{"field":"C","value":"Length of A = ' . strlen($hint) . '"},' .
    '{"field":"D","value":""},' .
    '{"field":"E","value":""},' .
    '{"field":"F","value":""},' .
    '{"field":"G","value":""},' .
    '{"field":"H","value":""},' .
    '{"field":"I","value":""},' .
    '{"field":"J","value":"Oh no"},' .
    '{"field":"K","value":""}' .
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
      '{"field":"A","value":"LAST NAME IS <span style="color: red">BEING</span> TYPED"},' .
      '{"field":"B","value":"' . $hint . '"},' .
      '{"field":"C","value":""},' .
      '{"field":"D","value":""},' .
      '{"field":"E","value":""},' .
      '{"field":"F","value":""},' .
      '{"field":"G","value":""},' .
      '{"field":"H","value":""},' .
      '{"field":"I","value":""},' .
      '{"field":"J","value":"Oh YES"},' .
      '{"field":"K","value":"Length of A = ' . strlen($hint) . '"},' .
      ']}';

}


// Output "no suggestion" if no hint was found or output correct values
echo $ret;
?>