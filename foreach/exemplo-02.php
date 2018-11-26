<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>


<?php

    if (isset($_GET)) {

        foreach ($_GET as $key => $value) {

            echo "Nome dos campos: " . $key;

            echo "Valor do campo: " . $value;

            echo "<hr>";

        }
    }

?>