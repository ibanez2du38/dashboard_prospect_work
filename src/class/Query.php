<?php

class Query 
{
    public static function pdo()
    {
        $dns = "mysql:host=localhost;dashboard_prospect";
        $username = "ibanez2";
        $pwd = "22rcvt22";
        $pdo = new PDO($dns, $username, $pwd);
    }
}