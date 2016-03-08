<?php
/**
 * Created by PhpStorm.
 * User: T520
 * Date: 02/03/2016
 * Time: 15:32
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'bce6e059abd68f');
define('DB_PASSWORD', '7f2f5343');
define('DB_DATABASE', 'db1307260');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
