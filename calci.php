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

function operation( $val1, $oprt, $val2) 
{
    if (($oprt =="+") and ($val1!='')) { 
        $final=$val1+$val2;
        return $final;
    } elseif (($oprt =="-") and ($val1!='')) { 
        $final=$val1-$val2;
        return $final;
    } elseif (($oprt =="*") and ($val1!=''))  { 
        $final=$val1*$val2;
        return $final;
    } elseif (($oprt =="/") and ($val1!=''))  { 
        $final=$val1/$val2;
        return $final;
    }
    return $val2;
}

?>