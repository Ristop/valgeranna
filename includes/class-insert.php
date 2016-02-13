<?php
/**
 * Created by PhpStorm.
 * User: Risto
 * Date: 2/12/2016
 * Time: 10:05
 */
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once('class-database.php');
if(!class_exists('INSERT')){
    class INSERT{
        public function uudis($title, $content, $date){

            global $db;

            $query = "
                    INSERT INTO uudised (pealkiri, sisu, kuupaev)
                    VALUES ('$title', '$content', '$date')
                    ";
            return $db->insert($query);
        }
    }

    $insert = new INSERT();
}