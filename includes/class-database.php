<?php
/**
 * Created by PhpStorm.
 * User: Risto
 * Date: 2/12/2016
 * Time: 9:56
 */
    if(!class_exists("DB")){
        class DB{
            public function __construct(){
                $mysqli = new mysqli('localhost', 'root', 'Lambikas12', 'valgeranna');

                if($mysqli->connect_errno){
                    printf("Ühendus andmebaasiga puudub %s\n", $mysqli->connect_errno);
                    exit();
                }
                $this->connection = $mysqli;
            }

            public function insert($query){
                $result = $this->connection->query($query);
                return $result;
            }

        }
    }
    $db = new DB;
?>