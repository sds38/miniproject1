<?php

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

//header is repeated as 1st row**need to loop and set first row as code
$table = '<table class = "table table-dark"><thead><th>First</th><th>Last</th><th>UCID</th><th>Grade</th><th>Term</th></thead><tbody>';

foreach($records as $row)
{
    $table .= '\'<thead class = "table-dark"><tr>\';';
    foreach($row as $item)


    {
        $table .= "'<td>{$item}</td>";
    }
    $table .= '</tr>';
}
$table .= '</tbody></table>';
echo $table;




?>