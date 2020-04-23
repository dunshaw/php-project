<?php

    $arr = [];
    exec('git pull 2>&1',$arr);
    var_dump($arr);
///sdfj 112 333
    exec('git log 2>&1',$arr);
    var_dump($arr);  // dongdong
