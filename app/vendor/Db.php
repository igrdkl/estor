<?php
    class Db
    {
        public static function conection()
        {
                $host = '127.0.0.1';
                $db = 'estore_db';
                $user = 'root';
                $passwort = '';
                $charset = 'utf8';

            $dsn = 'mysql:host'.$host.';dbname'.$db.';charter='.$charset;
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            return new PDO($dsn, $user, $passwort, $opt);
        }
    }