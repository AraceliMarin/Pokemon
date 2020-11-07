<?php
$pagina = isset($_GET['p']) ? strtolower($_GET['p']): 'principal';
require_once 'principal.php';
require_once $pagina. '.php';

