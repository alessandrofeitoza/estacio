<?php

if ($_GET['email'] === '' || $_GET['senha'] === '') {
    echo "Dados invalidos";
}


echo '<pre>';

print_r($_GET);