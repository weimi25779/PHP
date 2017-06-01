<?php


    $json = '{
                "id":"123",
                "name": "brad",
                "lang": [
                    {"name":"Java",
                     "level": "1"
                    },
                    {"name":"PHP",
                     "level": "2"
                    },
                    {"name":"Android",
                     "level": "3"
                    },
                    {"name":"iOS",
                     "level": "4"
                    }
                ]}';
    $root=json_decode($json);
    //echo var_dump($root);
    echo "{$root->name}:{$root->lang[2]->level}";