<?php 

function convertResultsToArray($DBResult){
    //convert Results To Array
    $resultArray = array();
    while($row = $DBResult->fetch_assoc()){
        $resultArray[] = $row;
    }
    return $resultArray;
}