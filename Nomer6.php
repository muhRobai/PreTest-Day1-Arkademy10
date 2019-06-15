<?php
function biner($dec){
 
 bcscale(0);

 $bin = '';

 do{

   $bin = bcmod($dec,'2') . $bin;
   $dec = bcdiv($dec,'2');

  } while (bccomp($dec,'0'));

 echo $bin;
}

biner(56);

?>