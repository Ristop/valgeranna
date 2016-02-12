<?php
/**
 * Created by PhpStorm.
 * User: Risto
 * Date: 2/12/2016
 * Time: 17:30
 */
require_once('class-database.php');
if(!class_exists('QUERY')){
    class QUERY{
        public function all_news(){
            global $db;
            $query = 'SELECT * FROM uudised';
            return $db->select($query);
        }
    }
}
$query = new QUERY();
?>