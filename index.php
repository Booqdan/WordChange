<?php

$fabrics  = ['B' => 'BAWEŁNA',
    'P' => 'POLIESTER',
    'S' => 'SPANDEX',
    'E' => 'ELASTAN',
    'PO' => 'POLIAMID',
    'EL' => 'ELASTAN',
    'A' => 'AKRYL',
    'AN' => 'ANGORA',
    'NY' => 'NYLON',
    'W' => 'WEŁNA',
    'WO' => 'WEŁNA OWCZA',
    'POL' => 'POLIWINYL',
    'PVC' => 'PCV',
    'SZJ' => 'SZTUCZNY JEDWAB',
    'SK' => 'SKÓRA NATURALNA',
    'POP' => 'POLIPROPYLEN'];

$textiles = ['B 100%',
    'B 80%, P 20%',
    'NY 70%, EL 30%',
    'B 75%, S 20%',
    'SZJ 80%, E 20%'];

$textile = $textiles[array_rand($textiles)];

echo "<h3>Wylosowany element:</h3> $textile<br>";

$keyTab = [];
$valueTab = [];
foreach ($fabrics as $key=>$value){
    array_push($keyTab, $key);
    array_push($valueTab, $value);
}

$trueKey = [];
for($i = 0; $i <= 15; $i++){
    $keyReplace = preg_replace("/$keyTab[$i]/", "/$keyTab[$i] /", $keyTab[$i]);
    array_push($trueKey, $keyReplace);
}

$replaceText = preg_replace($trueKey, $valueTab, $textile);
$finalReplaceText = preg_replace("/([[:alpha:]])([[:digit:]])/", "\\1 \\2", $replaceText);

echo "<h3>Pełna nazwa:</h3> $finalReplaceText";

