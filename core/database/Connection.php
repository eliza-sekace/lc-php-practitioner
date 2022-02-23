<?php

class Connection
{
    public static function make($config)
    {
        try {
//            Without docker
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
//            With Docker
//            return new PDO('mysql:host=mysql;dbname=lc-php', 'root', 'password');
        } catch (PDOException $e) {
            die('Could not connect.');  //die($e->getMessage()); - lai saņemtu error, kāpēc nevaar savienoties

        }
    }
}
