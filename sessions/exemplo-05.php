<?php 

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {

    case PHP_SESSION_DISABLED:
    echo "as sessôes estão desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo "as sessôes estão habilitadas, mas nenhuma existe";
    break;

    case PHP_SESSION_ACTIVE:
    echo "as sessôes estão habilitadas, e uma existe";
    break;

}

?>