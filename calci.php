<?php
$value = $_REQUEST['number'];
$oprt = $_REQUEST['opt'];
$final = $_REQUEST['result'];

if ($final=="") {
    $final=$value;
} else {
    $final=operation($value, $oprt, $final);
}
echo $final;

function operation(int $val1, $oprt, int $val2) 
{
    if ($oprt =="+") { 
        $final=$val1+$val2;
        return $final;
    } elseif ($oprt =="-") { 
        $final=$val1-$val2;
        return $final;
    } elseif ($oprt =="*") { 
        $final=$val1*$val2;
        return $final;
    } elseif ($oprt =="/") { 
        $final=$val1/$val2;
        return $final;
    }
    
}

?>