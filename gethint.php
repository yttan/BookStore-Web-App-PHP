<?php
$a[]="AK";
$a[]="AL";
$a[]="AZ";
$a[]="AR";
$a[]="CA";
$a[]="CO";
$a[]="CT";
$a[]="DE";
$a[]="FL";
$a[]="GA";
$a[]="HI";
$a[]="ID";
$a[]="IL";
$a[]="IN";
$a[]="IA";
$a[]="KS";
$a[]="KY";
$a[]="LA";
$a[]="ME";
$a[]="MD";
$a[]="MA";
$a[]="MI";
$a[]="MN";
$a[]="MS";
$a[]="MO";
$a[]="MT";
$a[]="NE";
$a[]="NV";
$a[]="NH";
$a[]="NJ";
$a[]="NM";
$a[]="NY";
$a[]="NC";
$a[]="ND";
$a[]="OH";
$a[]="OK";
$a[]="OR";
$a[]="PA";
$a[]="RI";
$a[]="SC";
$a[]="SD";
$a[]="TN";
$a[]="TX";
$a[]="UT";
$a[]="VT";
$a[]="VA";
$a[]="WA";
$a[]="WV";
$a[]="WI";
$a[]="WY";



$q=$_GET["q"];

if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }
echo $response;
?>