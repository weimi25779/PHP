<?php
    include 'sql2.php';
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $sql = "insert into animal  (subid, area_pkid, shelter_pkid, place, kind, sex) values (?,?,?,?,?,?)";
    $json = file_get_contents(
        "http://data.coa.gov.tw/Service/OpenData/AnimalOpenData.aspx");
    $root = json_decode($json);
    foreach ($root as $row){
        $subid = $row->animal_subid;
        $area_pkid = $row->animal_area_pkid;
        $shelter_pkid = $row->animal_shelter_pkid;
        $place = $row->animal_place;
        $kind = $row->animal_kind;
        $sex=$row->animal_sex;
        $pdo->prepare($sql)->execute([$subid,$area_pkid,$shelter_pkid,$place,$kind,$sex]);
    }
