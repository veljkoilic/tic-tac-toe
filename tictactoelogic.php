<?php
/**
 * Input elements values through form submission
 */

$singleFields = [
'a1' => isset($_GET['a1']) ?  $_GET['a1'] : "",
'a2' => isset($_GET['a2']) ?  $_GET['a2'] : "",
'a3' => isset($_GET['a3']) ?  $_GET['a3'] : "",

'b1' => isset($_GET['b1']) ?  $_GET['b1'] : "",
'b2' => isset($_GET['b2']) ?  $_GET['b2'] : "",
'b3' => isset($_GET['b3']) ?  $_GET['b3'] : "",

'c1' => isset($_GET['c1']) ?  $_GET['c1'] : "",
'c2' => isset($_GET['c2']) ?  $_GET['c2'] : "",
'c3' => isset($_GET['c3']) ?  $_GET['c3'] : ""
];

/**
 * Winning combinations array
 */
$winningCombinations = [
    "h1" => [$singleFields['a1'],$singleFields['a2'],$singleFields['a3']],
    "h2" => [$singleFields['b1'],$singleFields['b2'],$singleFields['b3']],
    "h3" => [$singleFields['c1'],$singleFields['c2'],$singleFields['c3']],

    "v1" => [$singleFields['a1'],$singleFields['b1'],$singleFields['c1']],
    "v2" => [$singleFields['a2'],$singleFields['b2'],$singleFields['c2']],
    "v3" => [$singleFields['a3'],$singleFields['b3'],$singleFields['c3']],

    "d1" => [$singleFields['a1'],$singleFields['b2'],$singleFields['c3']],
    "d2" => [$singleFields['a3'],$singleFields['b2'],$singleFields['c1']]
];

/**
 * See what fields arent filled
 */

$allFields = [
    $singleFields['a1'],
    $singleFields['a2'],
    $singleFields['a3'],
    $singleFields['b1'],
    $singleFields['b2'],
    $singleFields['b3'],
    $singleFields['c1'],
    $singleFields['c2'],
    $singleFields['c3']
];

$allFieldNames = ["a1","a2","a3","b1","b2","b3","c1","c2","c3"];

/**
 * Search for a variable and check if its set, if it is, remove it from the array
 */
foreach ($allFields as $field){
    if ($field === 'x' || $field === 'o'){
        $index = array_search($field,$allFields);
        array_splice($allFields, $index, 1);
        array_splice($allFieldNames, $index, 1);
    }
}

/**
 * Generate a random number and play that field
 */

$computerPlayedField = rand (1 , count($allFields)) - 1;

$fieldToBePlayed = $allFieldNames[$computerPlayedField];
$singleFields[$fieldToBePlayed] = 'o';

/**
 * Check if a player won or not
 */
$winner = '';
foreach ($winningCombinations as $combination){
    if ($combination == ['o','o','o']){
        $winner = "COMPUTER";
        echo '<br>';
    }
    elseif ($combination == ['x','x','x']){
        $winner = "YOU";
        echo '<br>';
    }
}
