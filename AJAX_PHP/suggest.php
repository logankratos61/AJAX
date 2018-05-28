<?php
//will be taken from the database but i am providing the names manually. 
$people[] = "Ashsih";
$people[] = "Amit";
$people[] = "Ankit";
$people[] = "Aman";
$people[] = "Devsh";
$people[] = "Vasudev";
$people[] = "Yashveer";
$people[] = "Righved";
$people[] = "Rachel";
$people[] = "Monica";
$people[] = "Phebe";
$people[] = "Joey";
$people[] = "Chandler";
$people[] = "Sarcasm";
$people[] = "Jaspal";
$people[] = "Golu";
$people[] = "Aditya";
$people[] = "Dhruv";
$people[] = "Uddeshya";
$people[] = "Anik";
$people[] = "Aniket";

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

echo $suggestion === "" ? "No suggestions":$suggestion;
?>
