<?php
    // Verificando se a extensão GD está habilitada
    if (extension_loaded('gd') && function_exists('gd_info')) {
        echo "A extensão GD está habilitada.";
    } else {
        echo "A extensão GD não está habilitada.";
    }
?>
