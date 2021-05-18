<?php
    function retrieve($re){
    $data = file_get_contents("https://www.rivm.nl/coronavirus-covid-19/weekcijfers-covid-19");    
    preg_match_all($re, $data, $matches, PREG_SET_ORDER, 0);
    return $matches;
    }


    $total = 0;

    $re = '/<td>(.*)<\/td>/m';
    $matches = retrieve($re);

    $aantal = str_replace("*", "", $matches[0][1]);
    $nieuw = (float) filter_var($matches[1][1], FILTER_SANITIZE_NUMBER_FLOAT);
    $total = floatval($matches[4][1]);
    $vandaag = (float) filter_var($matches[5][1], FILTER_SANITIZE_NUMBER_FLOAT);

    echo json_encode(array(
        "aantal" => $aantal,
        "aantalv" => $nieuw,
        "doden" => $total,
        "dodenv" => $vandaag,
        "map" => "https://i.imgur.com/bS7PyBR.png"
    ))

?>