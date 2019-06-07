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
    <form action="zenquery.php">
        <?php 
        for($i=1;$i<50;$i++){
            $fieldId = 'field-' . $i;
            $inputId = 'input-' . $i;
            if (isset($_GET[$inputId])){
                $inputValue = $_GET[$inputId];
                echo $inputValue;
            }
            else{
                echo '<div id="' . $fieldId . '">' . $i . ':';
                echo '<input name="' . $inputId . '" type="text">';
                echo '<br></div>';
            }
        }
        ?>
        <br>
        <br>
    </body>
    <input type="submit">
</form>

</html>