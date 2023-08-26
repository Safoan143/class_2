<?php

echo "ধর,  তোমার বাসায় 10w এর  ২টা ফেন আছে, 100w এর ৫টা এসি আছে, 150W এর ২টা ফ্রিজ আছে।<br>
1w বিদ্যুতের দাম 14টাকা হলে টোটাল কত টাকা বিদ্যুৎ বিল হয়েছে? এবং দৈনিক কত W বিদ্যুৎ খরচ হয়েছে?<br>"; 

$fan = 2;
$fan_W = 10;
$Ac = 5;
$Ac_W = 100;
$Fridge = 2;
$Fridge_W = 150;
$One_W = 14;

// total fan w W and Bill //

// fan W //
$fan = 2;
$fan_W = 10;
$mul_1 = $fan * $fan_W;
$fan_bill = $mul_1 * $One_W;

echo " <h2><i>Fan Watt And Bill History</i></h2>";
echo '<b>Total Fan Watt Is</b> :- &nbsp'. $mul_1. '&nbsp W <br><br> <b>Total Fan Electricity is</b> :- &nbsp'.$fan_bill. '&nbsp Tk <br>  '; 


// Fan Watt And Bill Ends//

// Total Ac Watt NAd Bill //

 // Ac Watt // 
  $AC = 5;
  $Ac_W = 100;
  $mul_2 = $Ac * $Ac_W;
  $Ac_bill = $mul_2 * $One_W;

  echo " <h2><i>AC Watt And Bill History</i></h2>";
  print "<b>Total Ac Watt Is</b> &nbsp :-  &nbsp $mul_2 W <br><br> <b>Total AC Electricity Bill Is</b> &nbsp :- &nbsp  $Ac_bill Tk <br>";

// fridge Watt And Bill //

//  Fridge Watt and bill //


$Fridge = 2;
$Fridge_W = 150;
$mul_3 = $Fridge * $Fridge_W;
$Ac_bill = $mul_3 * $One_W;
echo " <h2><i>Fridge Watt And Bill History</i></h2>";  

print "<b>Total Fridge Watt Is</b> &nbsp :- &nbsp  $mul_3 W <br><br> <b>Total Fridge Electricity Bill Is</b> &nbsp :-  &nbsp $Ac_bill Tk <br> ";


// Total Fan, Ac, Fridge Watt is ??

$total_watt = $mul_1 + $mul_2 + $mul_3;
$Total_bill = $fan_bill + $Ac_bill + $fan_bill;

echo  "<h2><u>Total Fan, Ac, Fridge Watt And Bill.</u></h2>";


echo "<h4>Total Watt Is :- &nbsp $total_watt W</h4> ";
echo "<h4>Total Bill Is :- &nbsp $Total_bill Tk</h4>";



//function //

// {
// fan = 10W
// Ac = 100w
// Fridge = 150W
// 1W = 14tk

// ----------------------//
//}

echo "<h2><u>Calculate Total Watt And Total Current Bill With Function</u></h2>";
function electricity($fan=0, $Ac=0, $Fridge=0){

  $fan = 10*2;
  $Ac = 100*5;
  $Fridge = 150*2;
  $One_Watt_Cost = 14;
  
  $total_Watt = $fan + $Ac + $Fridge; 
  
  echo "<b>Total watt</b> :- &nbsp $total_Watt w <br>";
  
  $total_bill = $total_Watt * $One_Watt_Cost;
  
  echo "<b>Total Electricity</b> :- &nbsp $total_bill Tk";
  
  }
  electricity()

?>