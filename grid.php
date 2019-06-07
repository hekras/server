<!DOCTYPE html>
<html>

    <head>
        <style>
            /* Line */
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>

    <body>

        <?php

        function e($el, $id, $x, $y, $width, $height, $fontsize, $borderthickness, $borderstyle, $text, $verticalallign, $onclick, $oninput) {
            $str_aa = '';
            $str_ab = '';
            $ret = '';
            switch ($el) {
                case 'li':
                case 'line':
                    $str_aa = '<div style="' .
                            'position: absolute; ' .
                            'left: ' . $x . 'px; ' .
                            'top: ' . $y . 'px; ' .
                            'width: ' . $width . 'px; ' .
                            'height: ' . $height . 'px; ' .
                            'border: ' . $borderthickness . 'px ' . $borderstyle . ';" ' .
                            '>';
                    $str_ab = '</div>';
                    break;
                case 'g':
                case 'grid':
                    $str_aa = '<div style="' .
                            'position: absolute; ' .
                            'left: ' . $x . 'px; ' .
                            'top: ' . $y . 'px; ' .
                            'width: ' . $width . 'px; ' .
                            'height: ' . $height . 'px; ' .
                            'border: ' . $borderthickness . 'px ' . $borderstyle . ';" ' .
                            'onmouseover=' . $onclick . '>';
                    $str_ab = '</div>';
                    break;
                case 'aa':
                    $str_aa = '<div id="' . $id . '" style="' .
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
                case 'ab':
                    $str_aa = '<div id="' . $id . '" style="' .
//                            'box-sizing: border-box; ' .
                            'position: absolute; ' .
                            'overflow: hidden; ' .
                            'left: ' . $x . 'px; ' .
                            'top: ' . $y . 'px; ' .
                            'width: ' . $width . 'px; ' .
                            'height: ' . $height . 'px; ' .
                            'font-size: ' . $fontsize . 'px; ' .
                            'overflow-x: scroll; ' .
                            'border-radius: 5px; ' .
                            'border: ' . $borderthickness . 'px ' . $borderstyle . ';">';
                    $str_ab = '</div>';
                    break;
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
                    $ret = $str_aa .
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
                    $ret = $str_aa . $str_ab;
                    break;
                default:
                    $ret = $str_aa . $text . $str_ab;
                    break;
            }

            return $ret;
        }

        // rendering the grid - Version 2
        $xsize = 1920;
        $ysize = 1080;
        $dx = 50;
        $dy = 50;
        $ypos = 50;
        $xpos = 0;
        for ($y = $ypos; $y < $ypos + $ysize; $y += $dy) {
            echo e('li', '', $xpos, $y, $xsize - $xpos, 0, 0, 1, 'dotted lightgreen', '' . $ny, '%', '', '');
        }
        for ($x = $xpos; $x < $xpos + $xsize; $x += $dx) {
            echo e('li', '', $x, $ypos, 0, $ysize - $ypos, 0, 1, 'dotted lightgreen', '' . $ny, '%', '', '');
        }
        for ($y = $ypos; $y < $ypos + $ysize; $y += $dy) {

            $nx = 0;
            for ($x = $xpos; $x < $xpos + $xsize; $x += $dx) {
                $sss = sprintf("%04d-%04d", $x, $y);
                echo e('g', '', $x - 14, $y - 14, 30, 30, 0, 0, '', '', '%', 'hello("' . $sss . '")', '');
                $nx++;
            }
            $ny++;
        }

        echo e('aa', '14', $xpos, 1, $xsize, 47, 18, 1, 'solid lightgreen', 'Hello', '', '', '');

        $str = '<div style="position: absolute; left: -50px; top: 10px; width: 400px; height: 100px; border: 1px solid red; padding-right: 20px; background: lightgray;">Hello</div>';
        echo e('ab', '12', 100, 100, 200, 800, 18, 2, 'solid black', $str, '', '', '');
        ?>
        <script>
            function hello($str) {
                document.getElementById("14").innerText = $str;
            }
        </script>
    </body>
</html>

