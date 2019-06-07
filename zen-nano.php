<!DOCTYPE html>
<html>

    <head>
        <style>
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
                case 'menubar':
                    $str_aa = '<div style="' .
                            'display: block; ' .
                            'position: fixed; ' .
                            'overflow: hidden; ' .
                            'top: 0px; ' .
                            'width: 100%; ' .
                            'height: 50px; ' .
                            'background: rgb(200,200,200); ' .
                            '">';
                    $str_ab = '</div>';
                    break;
                case 'componentbib':
                    $str_aa = '<div id="' . $id . '" style="' .
                            'display: block; ' .
                            'position: fixed; ' .
                            'overflow: hidden; ' .
                            'top: 50px; ' .
                            'width: 100%; ' .
                            'height: 370px; ' .
                            'background: rgb(200,200,200); ' .
                            '">';
                    $str_ab = '</div>';
                    break;
                case 'card':
                    $str_aa = '<div style="' .
                            'position: absolute; ' .
                            'overflow: hidden; ' .
                            'left: ' . $x . 'px; ' .
                            'width: 195px; ' .
                            'top: 5px; ' .
                            'height: 340px; ' .
                            'font-size: ' . $fontsize . 'px; ' .
                            'border-radius: 10px; ' .
                            'background: rgb(200,200,200); ' .
                            'border: 5px solid white;">';
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
                    $str_aa = '<div id="' . $id . '" style="' .
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
                case 'b2':
                    $str_aa = '<div style="' .
                            'position: absolute; ' .
                            'overflow: hidden; ' .
                            'right: 0%; ' .
                            'top: ' . $y . 'px; ' .
                            'width: ' . $width . 'px; ' .
                            'height: ' . $height . 'px; ' .
                            'font-size: ' . $fontsize . 'px; ' .
                            'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
                            'cursor: pointer;"' .
                            'onclick="' . $onclick . '">';
                    $str_ab = '</div>';
                    break;
                case 'b3':
                    $str_aa = '<div style="' .
                            'position: absolute; ' .
                            'overflow: hidden; ' .
                            'left: 50px; ' .
                            'right: 50px; ' .
                            'top: ' . $y . 'px; ' .
//                            'width: ' . $width . 'px; ' .
                            'height: 100%; ' .
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
                case 'cl':
                case 'centerleft':
                    $ret = $str_aa .
                            '<span style="' .
                            'margin: 0; ' .
                            'position: absolute; ' .
                            'top: 50%; ' .
                            'left: 0%; ' .
                            'margin-right: -50%;' .
                            'transform: translate(0%, -50%); ' .
                            'text-align: left; ">' .
                            $text .
                            '</span>' .
                            $str_ab;
                    break;
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

        // render top menu
        $str = e('b', 'knap', 5, 5, 40, 40, 28, 1, 'solid white', 'M', 'c', 'knapM()', '') .
                e('b', '', 50, 5, 40, 40, 28, 1, 'solid white', 's', 'c', '', '');
        echo e('menubar', '', 2, 5, 220, 32, 29, 1, 'solid black', $str, '', '', '');

        // render component selector bar - visible as default
        $str =  e('card', '',   0, 0, 0, 0, 16, 1, '', "Hello-1", 'c', '', '') .
                e('card', '',  200, 0, 0, 0, 16, 1, '', "Hello-2", 'c', '', '') .
                e('card', '',  400, 0, 0, 0, 16, 1, '', "Hello-3", 'c', '', '') .
                e('card', '',  600, 0, 0, 0, 16, 1, '', "Hello-4", 'c', '', '') .
                e('card', '',  800, 0, 0, 0, 16, 1, '', "Hello-5", 'c', '', '') .
                e('card', '', 1000, 0, 0, 0, 16, 1, '', "Hello-6", 'c', '', '') .
                e('card', '', 1200, 0, 0, 0, 16, 1, '', "Hello-7", 'c', '', '') .
                e('card', '', 1400, 0, 0, 0, 16, 1, '', "Hello-8", 'c', '', '') .
                e('card', '', 1600, 0, 0, 0, 16, 1, '', "Hello-9", 'c', '', '') .
                e('card', '', 1800, 0, 0, 0, 16, 1, '', "Hello-10", 'c', '', '');
        
        $str = e('b', '', 0, 0, 40, 350, 28, 0, '', '<', 'c', '', '') .
                e('b2', '', 50, 0, 40, 350, 28, 0, '', '>', 'c', '', '') .
                e('b3', '', 50, 0, 40, 350, 28, 0, '', $str, '', '', '');
        
        echo e('componentbib', 'componentbib', 2, 5, 220, 32, 29, 1, 'solid black', $str, '', '', '');
        ?>


    </body>
    <script>
        // render component visible as default
        document.getElementById('componentbib').style.visibility = 'visible';
        
        // toggle component selector bar - visiblity
        function knapM() {
            var el = document.getElementById('componentbib');
            if (el.style.visibility != 'visible') {
                el.style.visibility = 'visible';
            } else {
                el.style.visibility = 'hidden';
            }
        }


    </script>
</html>