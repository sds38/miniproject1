<?php
/**
 Shail Shah
 Mini Project
 * Parents: wyd 4 masterz
 * Me: My best ¯\_(ツ)_/¯

 */



main::start("example.csv");

class main
{

    static public function start($filename)
    {


        $records = csv::getRecords($filename);
        $table = html::generateTable($records);

    }
}
class csv{}

class html


?>

