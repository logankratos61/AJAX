<?php

$people[] = "ashsih1";
$people[] = "amit";
$people[] = "ankit";
$people[] = "aman";
$people[] = "devsh";
$people[] = "vasudev";
$people[] = "yashveer";
$people[] = "righved";
$people[] = "rachel";
$people[] = "monica";
$people[] = "phebe";
$people[] = "joey";
$people[] = "chandler";
$people[] = "sarcasm";
$people[] = "Bhawna";
$people[] = "Golu";
$people[] = "aditya";
$people[] = "dhruv";
$people[] = "Uddeshya";
$people[] = "anik";
$people[] = "aniket";

// Get Query string
$q = $_REQUEST['q'];
$suggestion = "";

// Get Suggestions.
if($q != ""){
$q = strtolower($q);
$len = strlen($q);
foreach($people as $person){
    if(stristr($q , substr($person, 0, $len))){
        if($suggestion === ""){
            $suggestion = $person;
        }else{
            $suggestion .= ", $person";
        }
    }
}

}

echo $suggestion === "" ? "No":$suggestion;
?>