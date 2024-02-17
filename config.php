<!--- conexão banco de dados -->
<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS','');
    define('BASE', 'first');

    $conn = new mysqli(HOST,USER,PASS,BASE);

    