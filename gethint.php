<?php $a=array('Ram','Seeta','John','Mary','Anna','Jude','Quadir','King','Rahul','Amit','Amol','Ramesh','Zubin','Lata','Kishor','Beena','Teena','Sheena','Shrin');
$s=$_GET['s'];
$hint="";
if(strlen($s)>0)
{
 for($i=0;$i<count($a);$i++)
 {
  $t=$a[$i];
  if(strtolower($s)==strtolower(substr($t,0,strlen($s))))
  {
   if($hint=="")
   $hint=$t;
   else
   $hint=$hint.','.$t;
  }
 }
}
if($hint=="")
$response="no suggestions";
else
$response=$hint;
echo $response;
?>
