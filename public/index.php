<?php
/**
 Shail SHah

 */



main::start("FL_insurance_sample.csv");

class main
{

    static public function start($filename) {


        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    )
    }

class csv
{

    static public function getRecords()
    {

        $records[] =

        }
}
class html
{
    static public function generateTable($records) {
    echo 'swag';
        }
class system{
    static public function printPage($page) {}
    print 'hello world';
    }
