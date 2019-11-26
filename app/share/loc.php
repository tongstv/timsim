<?php


$loctheo['gia']=array('' => 'Mọi mức giá',
'giaban < 1' => 'Dưới 1 Triệu',
'giaban >=1 AND giaban <= 2' => 'Từ 1 -2 Triệu',
'giaban >=2 AND giaban <=3' => 'Từ 2 - 3 Triệu',
'giaban >=3 AND giaban <=5' => 'Từ 3 - 5 Triệu',
'giaban >= 5 AND giaban <=8' => 'Từ 5 - 8 Triệu',
'giaban >=8 AND giaban <=10' => 'Từ 8 - 10 Triệu',
'giaban >=10 AND giaban <=15' => 'Từ 10 -15 Triệu',
'giaban >=15 AND giaban <=20' => 'Từ 15 - 20 Triệu',
'giaban > 20' => 'Trên 20 Triệu');
global $mangpos;
$loctheo['mang'][0] = 'Mọi mạng';
foreach($mangpos AS $mk => $mv)
{
    $loctheo['mang'][$mv] = $mk;
}

$myselect=preg_replace('/\?page=([0-9]*)/','',$_SERVER["REQUEST_URI"]);


if(isset($_POST['loctheogia']))
{
    $_SESSION['locurl']=$myselect;
    $_SESSION['loctheo']['giaselect']=$_POST['loctheogia'];
}

if(isset($_POST['loctheomang']))
{
    $_SESSION['locurl']=$myselect;
    $_SESSION['loctheo']['mangselect']=$_POST['loctheomang'];
}



if(isset($_SESSION['loctheo']['giaselect']) AND $_SESSION['loctheo']['giaselect'])
{
    $where .= " AND (".$_SESSION['loctheo']['giaselect'].")";
}
if(isset($_GET['network']))unset($_SESSION['loctheo']['mangselect']);

if(isset($_SESSION['loctheo']['mangselect']) AND $_SESSION['loctheo']['mangselect'])
{
    $where .= " AND (mang=".$_SESSION['loctheo']['mangselect'].")";
}

if(isset($_SESSION['locurl']))
{
    if($myselect!=$_SESSION['locurl'])
    {
           unset($_SESSION['locurl']);
     unset($_SESSION['loctheo']);
    }
 
  
}

$this->assign($_SESSION['loctheo']);
$this->assign(isset($loctheo) ? $loctheo : "");

?>