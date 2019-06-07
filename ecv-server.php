<?php
function e($el, $id, $x, $y, $width, $height, $fontsize, $borderthickness, $borderstyle, $text, $verticalallign, $onclick, $oninput) {
    $str_aa = '';
    $str_ab = '';
    switch ($el) {
        case 'l':
        case 'label':
            $str_aa = '<div style="' .
                    'box-sizing: border-box; ' .
                    'position: absolute; ' .
                    'overflow: hidden; ' .
                    'left: ' . $x . 'px; ' .
                    'top: ' . $y . 'px; ' .
                    'width: ' . $width . 'px; ' .
                    'height: ' . $height . 'px; ' .
                    'font-size: ' . $fontsize . 'px; ' .
                    'border: ' . $borderthickness . 'px ' . $borderstyle . ';">';
            $str_ab = '</div>';
            break;
        case 'b':
        case 'button':
            $str_aa = '<div style="' .
                    'box-sizing: border-box; ' .
                    'position: absolute; ' .
                    'overflow: hidden; ' .
                    'left: ' . $x . 'px; ' .
                    'top: ' . $y . 'px; ' .
                    'width: ' . $width . 'px; ' .
                    'height: ' . $height . 'px; ' .
                    'font-size: ' . $fontsize . 'px; ' .
                    'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
                    'cursor: pointer;"' .
                    'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'i':
        case 'input':
            $str_aa = '<input type="text" id="' . $id .
            '" oninput="' . $oninput .
            '" onclick="' . $onclick . '" ' .
            'style="position: absolute; ' .
            'left: ' . $x . 'px; ' .
            'top: ' . $y . 'px; ' .
            'width: ' . $width . 'px; ' .
            'height: ' . $height . 'px; ' .
            'font-size: ' . $fontsize . 'px; ' .
            'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
            'cursor: pointer;" ' . 
                'value="' . $text . '">';
            $str_ab = '';
            break;
    }

    switch ($verticalallign) {
        case 'c':
        case 'center':
            echo $str_aa .
            '<span style="' .
            'margin: 0; ' .
            'position: absolute; ' .
            'top: 50%; ' .
            'left: 50%; ' .
            'margin-right: -50%;' .
            'transform: translate(-50%, -50%); ' .
            'text-align: center; ">' .
            $text .
            '</span>' .
            $str_ab;
            break;
        case '%':
            echo $str_aa . $str_ab;
            break;
        default:
            echo $str_aa . $text . $str_ab;
            break;
    }
}

$y = $_GET['year'];
if (($y < 2008) || ($y > 2050)){
    $y = intval(date('Y'));
}

$m = $_GET['month'];
if (($m < 1) || ($m > 12)) {
    $m = intval(date('m'));
}

e('l', '',2, 5, 220, 32, 29, 0, '', 'Some name', '', '', '');

// rendering the  matrix
$hw = 60;
$ypos = 5;
$weekchange = true;
for ($dd = 1; $dd < 305; $dd++) {
    $xpos = 388 + (($dd - 1) % 19) * ($hw + 1);
    e('l', '',$xpos, $ypos, $hw, $hw, 20, 1, 'solid gray', $dd, 'c', '', '', '');

    if (($dd % 19) == 0) {
        $ypos += ($hw + 1);
    }
}

// input field
e('i', 'thomas', 5, 40, 285, 32, 18, 1, 'solid black', '', '%', '', '');

// render charset
$arr = array(
    33, 126,
    161, 172,
    8265, 8265,
    8505, 8505,
    8598, 8601,
    8617, 8618,
    9000, 9000,
    8986, 8987,
    9167, 9167,
    9193, 9203,
    9208, 9210,
    9312, 9331,
    9728, 9984,
    9986, 10062,
    10067, 10071,
    10083, 10085,
    10102, 10135,
    10145, 10145,
    10175, 10175,
    10548, 10549,
    11013, 11015,
    11088, 11088,
    11093, 11093,
    128512, 128592,
    57352, 57353,
    119808, 119859,
    119552, 119638,
    119860, 119892,
    119894, 119911,
    119912, 119937,
    119938, 119963,
    120146, 120171,
    120782, 120831,
    127248, 127337,
    127344, 127386,
    127744, 128722,
    128736, 128761,
    129296, 129342,
    129344, 129349,
    129351, 129392,
    129395, 129398,
    129402, 129402,
    129404, 129442,
    129456, 129465,
    129472, 129474,
    129488, 129535
);

$x1 = 3;
$x = 3;
$y1 = 5;
$y = 5;
$t = 1;
$lc = 0;
$tx = 862;

// emojis
echo '<div style="position: absolute; overflow-y: scroll; left: 1px; top: 90px; width: 294px; height: 890px">';

echo '<div id="g1x">';
for ($m = 0; $m < count($arr); $m += 2) {
    for ($n = $arr[$m]; $n < ($arr[$m + 1] + 1); $n++) {
        e('b', '', $x, $y, 32, 32, 20, 1, 'solid black', '&#' . $n, 'c', '', '');
        $x += 31;
        if ($x > 33 * 8) {
            $x = $x1;
            $y += 31;
            $lc++;
            if ($lc == 28) {
                $t++;
                echo '</div>';
                echo '<div id="g' . $t . 'x">';
                $tx += 144;
                $lc = 0;
            }
        }
    }
}
echo '</div>';
echo '</div>';

// fonsize
echo '<div id="fss">';
$y = 5;
for ($n = 10; $n < 39; $n += 2) {
    e('b', '', 310, $y, 60, 60, $n, 1, 'solid black', 'Size', 'c', '', '');
    $y += 65;
}
echo '</div>';