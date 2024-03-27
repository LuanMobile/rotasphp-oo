<?php

namespace app\database;

use PDO;
use PDOException;

class Connection
{
    private static $connection = null;

    public static function connect()
    {
        if(!self::$connection)
        {
            try {
                self::$connection = new PDO("mysql:host=localhost;dbname=rotasphpoo", 'root', 'psswd',[
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            } catch (PDOException $e) {
                echo 'A conexão falhou e retornou a seguinte mensagem de erro:' . $e->getMessage();
            }
        }
        return self::$connection;
    }
}