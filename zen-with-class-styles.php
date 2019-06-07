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

            .bbb {
                box-sizing: border-box;
                position: absolute;
                overflow: hidden;
            }

            .ccc {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php

        function label($x, $y, $width, $height, $fontsize, $borderthickness, $borderstyle, $text, $verticalallign) {
            $str_a = '<div class="bbb" style="left: ' . $x . 'px; ' .
                    'top: ' . $y . 'px; ' .
                    'width: ' . $width . 'px; ' .
                    'height: ' . $height . 'px; ' .
                    'font-size: ' . $fontsize . 'px; ' .
                    'border: ' . $borderthickness . 'px ' . $borderstyle . ';">';
            $str_a2 = '</div>';
            switch ($verticalallign) {
                case 'center':
                    echo $str_a . '<span class="ccc">' . $text . '</span>' . $str_a2;
                    break;

                default:
                    echo $str_a . $text . $str_a2;
                    break;
            }
        }

        function button($x, $y, $width, $height, $fontsize, $borderthickness, $borderstyle, $text, $verticalallign, $onclick) {
            $str_a = '<div class="bbb" style="left: ' . $x . 'px; ' .
                    'top: ' . $y . 'px; ' .
                    'width: ' . $width . 'px; ' .
                    'height: ' . $height . 'px; ' .
                    'font-size: ' . $fontsize . 'px; ' .
                    'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
                    'cursor: pointer;"' .
                    'onclick="' . $onclick . '">';
            $str_a2 = '</div>';
            switch ($verticalallign) {
                case 'center':
                    echo $str_a . '<span class="ccc">' . $text . '</span>' . $str_a2;
                    break;

                default:
                    echo $str_a . $text . $str_a2;
                    break;
            }
        }

        
        
        label(2, 5, 70, 32, 29, 1, 'solid black', 2019, 'center');
        button(2, 50, 70, 32, 29, 1, 'solid black', 2019, 'center', 'p');
        /*
          <!--    label( 74, 5,32, 32, 24, 1, 'solid black','2019'> (pointer = normal)
          button( 74, 5,32, 32, 24, 1, 'solid black','2019', 'onclick'> (cursor = pointer)
          -->
         * 
         */
        ?>
    </body>

</html>