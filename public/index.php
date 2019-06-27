<?php
/**
 Shail SHah

 */



main::start("FL_insurance_sample.csv");

class main
{

    static public function start($filename) {}


        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }

class csv {

        static public function getRecords() {}

        }

class html
{
    static public function generateTable($records) {
        $count = 0;
        foreach ($records as $record) {
            if($count == 0) {
                $array = $record->returnArray();
                $fields = array_keys($array);
                $values = array_values($array);
                print_r($fields);
                print_r($values);
            } else {
                $array = $record->returnArray();
                $values = array_values($array);
                print_r($values);
            }
            $count++;
        }
    }
        }
class system{
    static public function printPage($page) {}
    print 'hello world';
    }
