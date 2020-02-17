<?php 
function somme()
{
    $s=0;
    $nb=func_num_args();
    for($i=0;$i<$nb;$i++)
    {
        $s+=func_get_arg($i);
    }
    echo $s;
}
somme(1,2,3,4,5);