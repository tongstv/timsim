<?php
$anhnam = glob("nam/*.jpg");
$anhnu = glob("nu/*.jpg");




$gioitinh = ['nam','nu'];


$gioitinh = $gioitinh[round(rand(0,1))];

$ho =
[
'Nguyễn',
'Bùi',
'Trương',
'Đỗ',
'Ngô',
'Trần',
'Phạm',
'Đặng',
'Bùi',
'Đỗ',
'Ngô',
'Huỳnh',
'Lê'
];
if($gioitinh == 'nam')
{
     $anh = $anhnam[round(rand(0, count($anhnam)-1))];

     $l = [
     		'Long',
     		'Tùng',
     		'hải',
     		'Hoàng',
     		'văn',
     		'Tú',
     		'Hiếu',
     		'Long',
     		'Thiện',
     		'Hoàng',
     		'Anh',
     		'Tuấn',
     		'Tòng'

     ];

}
else
{
    $anh = $anhnu[round(rand(0, count($anhnu)-1))];
    $l =[
    	'Vân',
    	'Thoa',
    	'Thủy',
    	'Yến',
    	'Hoài Vân',
    	'Nhi Nhi',
    	'Thảo',
    	'My',
    	'Yến',
    	'Hồng vân',
    	'Ánh nguyệt',
    	'Bùi thảo',
    	'Kim anh',
    	'Bảo châu',
    	'Kim chi',
    	'Yến Nhi',
    	'Hoài an',
    	'Mỹ lệ',


    ];
}

$name=$ho[round(rand(0, count($ho)-1))]." ".$l[round(rand(0, count($l)-1))];
?>
<ul class="fomo">
<li><img src="https://timsim.com/fomo/<?php echo $anh?>" style="width: 50px; height: 50px; border-radius: 50%;" ></li>
<li><b><?php echo $name?></b><br> Đặt mua số sim: <b><?php echo "09".round(rand(1,9)).round(rand(1,9)).round(rand(1,9)).round(rand(1,9)).round(rand(1,9))."xxx";?></b><br><pan>   Lúc: <?php echo  date('d/m/Y H:i:s',strtotime("-1 mimute"));?></span>
</li>
</ul>
