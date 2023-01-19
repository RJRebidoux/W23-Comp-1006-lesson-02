<?php

 $my_arr_constructor = array();

 $my_arr_literal = [];

 $my_arr_init_vals = ['a','b','c'];

 $mixed_arr = [
    "RJ Rebidoux",
    true,
    24,
    30.62
 ];

 array_push($mixed_arr, "I like cats"); //Adding to the end
 $mixed_arr[] = "I like dogs"; //Shorthand of push
 array_unshift($mixed_arr, false); //changes the a value
 array_shift($mixed_arr); //Removes the start of the array
 array_pop($mixed_arr); //Removes the end of the array
 array_splice($mixed_arr, 3, 1); //splits the array from an index and then how many to want to remove

 $mixed_arr[] = ["hello","world"]; //Nested array (shorthand of push)
 $mixed_arr[3] = 'I like hedgehogs'; //Modifying a part of a array

?>