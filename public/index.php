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

    static public function start($filename) {


        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    )
    }

class csv
{

    static public function getRecords($filename)
    {


        $filename = 'example.csv';
// The nested array to hold all the arrays
        $records = [];

// Open + close file
        if (($h = fopen("{$filename}", "r")) !== FALSE)
        {
            // set arrays, assign to data variable
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
            {
                $records[] = $data;
            }
            fclose($h);
        }

        }
}
class html
{
    static public function generateTable($records) {


    }
    echo 'swag';
        }
class system{
    static public function printPage($page) {}
    print 'hello world';
    }
