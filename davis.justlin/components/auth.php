<?php
function MYSQLIAuth()
{
    return [
        "mysql.carperformancedata.com", //$host 
        "jakaah", //$user
        "002510983@La", //$pass
        "carartdb" //$database
    ];
}


function PDOAuth()
{
    return [
        //"mysql:host=carperformancedata.com;dbname=carartdb", 
        "mysql:host=wolgast.pdx1-mysql-a7-2a.dreamhost.com;dbname=carartdb",
        "jakaah",
        "002510983@La",
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    ];
}
