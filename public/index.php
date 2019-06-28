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
        system::printTable($table)

    }
}
class csv {
    static public function getRecords($filename) {
        $file = fopen($filename,"r");
        $fieldNames = array();
        $count = 0;
        while(! feof($file))
        {
            $record = fgetcsv($file);
            if($count == 0) {
                $fieldNames = $record;
            } else {
                $records[] = dataFactory::create($fieldNames, $record);
            }
            $count++;
        }
        fclose($file);
        return $records;
    }
}

class dataFactory{
        static public function create(Array $fieldNames = null, Array $values = null) {
        $record = new record($fieldNames, $values);
        return $record;
}
//need to create the property, and return the array
class data{
       public function _construct()
            {$record = array_combine($fieldNames,$values)}
        }
}

//need to include html for table in foreach loop
class html {
    public static function generateTable($records) {
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


?>

