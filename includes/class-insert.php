<?php
/**
 * Created by PhpStorm.
 * User: Risto
 * Date: 2/12/2016
 * Time: 10:05
 */
require_once('class-database.php');
if(!class_exists('INSERT')){
    class INSERT{
        public function uudis($uudis){

            global $db;

            $query = "
                    INSERT INTO uudised (pealkiri, sisu)
                    VALUES ('$uudis[title]', '$uudis[content]')
                    ";

            return $db->insert($query);
        }
    }

    $insert = new INSERT();
}