<?php

$array = [
    [
        "name" => "adrian",
        "age" => "18",
        [
            "device" => "huawei"
        ]
    ],
    [
        "name" => "zian",
        "age" => 17,
        [
            "device" => "tecno"
        ]
    ]
];

echo "Name: {$array[0]['name']} Age: {$array[0]['age']} Device: {$array[0][0]['device']}<br>";
echo "Name: {$array[1]['name']} Age: {$array[1]['age']} Device: {$array[1][0]['device']}";

?>