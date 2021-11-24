<?php
class config {
private static $instance = NULL;
public static function getConnexion() {

4

if (!isset(self::$instance)) {
self::$instance = new
PDO('mysql:host=localhost;dbname=clubRobotique', 'root', '');
}
return self::$instance;
?>