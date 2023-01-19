<?php
// All arrays are associative arrays!

$student_info_keys = [ //Array index map
    'name',
    'age',
    'dob'
];

$students = [
    ['RJ Rebidoux', 24 , '05-30-1998'], // correct formatting 
    ['12-17-1999', "Andrew Dovinvorden", 23] // wrong formatting
];

$aa_students = [ //Better Way to store data
    [
        "name" => 'RJ Rebidoux',
        "age" => 24,
        "dob" => "05-30-1998"
    ],
    [
        "name" => "lad",
        "age" => 23,
        "dob" => '08-18-1999'
    ]
];

foreach ($aa_students as $student){
    echo $student["age"];
}

?>