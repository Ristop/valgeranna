<?php
/**
 * Created by PhpStorm.
 * User: Risto
 * Date: 2/12/2016
 * Time: 10:05
 */
require_once('class-database.php');

if(!class_exists('DELETE')){
    class DELETE{
        public function uudis($id){

            global $db;

            $query = "
                    DELETE FROM uudised WHERE id=$id";

            return $db->delete($query);
        }
    }

    $delete = new DELETE();
}

