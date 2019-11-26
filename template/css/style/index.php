<?php
$list="cerulean
cosmo
cyborg
darkly
flatly
journal
lumen
paper
readable
sandstone
simplex
slate
spacelab
superhero
united
yeti";
$list=explode("\n",$list);

$files=['bootstrap.css','variables.less','bootswatch.less'];
foreach($list AS $key)
{
    
   
   $folder=trim($key);
   
   echo $folder;
   if(is_dir($folder))mkdir($folder);

   foreach($files AS $file)
   {
     $f=file_get_contents("http://bootswatch.com/".$folder."/".$file);
   
   file_put_contents($folder."/".$file,$f);
   }

   
   
   
}