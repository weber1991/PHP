<?php
header("Content-type:text/html;charset=utf-8");


# 通过判断get或者post的内容是否为空来判断方式
if(!empty($_POST)){
    $name = $_POST['username'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    
    $arr = array('username'=>$name, 'age'=>$age, 'job'=>$job);
    $arr = json_encode($arr);
    echo $arr;
}

?>