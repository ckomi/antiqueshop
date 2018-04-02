<?php

if(!isset($_POST['name']) || !isset($_POST['surname']) || !isset($_POST['city']) || empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['phone']))
    die('You missed some feilds!');

$name;
$surname;
$city;
$street;
$phone;
$comment;
$ID;
$quanti;
$price;
$total;


if(isset($_POST['name']) && !empty($_POST['name']))
    $name=$_POST['name'];

if(isset($_POST['surname']) && !empty($_POST['surname']))
    $surname=$_POST['surname'];

if(isset($_POST['city']) && !empty($_POST['city']))
    $city=$_POST['city'];

if(isset($_POST['street']) && !empty($_POST['street']))
    $street=$_POST['street'];

if(isset($_POST['phone']) && !empty($_POST['phone']))
    $phone=$_POST['phone'];

if(isset($_POST['product']) && !empty($_POST['product']))
    $product=$_POST['product'];

if(isset($_POST['comment']) && !empty($_POST['comment']))
    $comment=$_POST['comment'];

if(isset($_POST['ID']) && !empty($_POST['ID']))
    $ID=$_POST['ID'];

if(isset($_POST['quanti']) && !empty($_POST['quanti']))
    $quanti=$_POST['quanti'];

if(isset($_POST['price']) && !empty($_POST['price']))
    $price=$_POST['price'];

if(isset($_POST['total']) && !empty($_POST['total']))
    $total=$_POST['total'];


   switch($ID){

     case 389: $pname="Polaroid Pronto600";
         break;
     case 669: $pname="FAVORIT Typewriter";
         break;
     case 420: $pname="Silver Alarm Clock";
         break;
     case 531: $pname="Binocular";
         break;
     case 857: $pname="Flexibile Table";
         break;
     case 742: $pname="Gold Mirror";
         break;
     case 294: $pname="Minolto Camera";
         break;
     case 611: $pname="Kodak Camera";
         break;
     case 973: $pname="Gramophone Copper";
         break;
     case 439: $pname="Ikoflex Camera";
         break;
     case 123: $pname="Tea Pot";
         break;
     case 969: $pname="Compas";
         break;
     default: $pname="Not defined";

   }

   switch($ID){

       case 389: $price="779.40";
           break;
       case 669: $price="2075.80";
           break;
       case 420: $price="1330.50";
           break;
       case 531: $price="960.20";
           break;
       case 857: $price="610.10";
           break;
       case 742: $price="6699.69";
           break;
       case 294: $price="745.70";
           break;
       case 611: $price="1273.00";
           break;
       case 973: $price="2820.70";
           break;
       case 439: $price="810.00";
           break;
       case 123: $price="310.00";
           break;
       case 969: $price="672.80";
           break;
       default: $price="Not defined";

   }


   $total = $quanti * $price;

?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Process</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
  <link rel="stylesheet" type="text/css" href="assets/buy.css">
</head>

<body>
  <div class="table-title">
    <h3>Details</h3>
  </div>
  <table class="table-fill">
    <thead>
      <tr>
        <th class="text-center">Buyer</th>
        <th class="text-center"><?php echo "$name";?></th>
      </tr>
    </thead>
    <tbody class="table-hover">
      <tr>
        <td class="text-left">Name</td>
        <td class="text-left"><?php echo "$name";?></td>
      </tr>
      <tr>
        <td class="text-left">Surname</td>
        <td class="text-left"><?php echo "$surname";?></td>
      </tr>
      <tr>
        <td class="text-left">City</td>
        <td class="text-left"><?php echo "$city";?></td>
      </tr>
      <tr>
        <td class="text-left">Address</td>
        <td class="text-left"><?php echo "$street";?></td>
      </tr>
      <tr>
        <td class="text-left">Mobile</td>
        <td class="text-left"><?php echo "$phone";?></td>
      </tr>
      <tr>
        <td class="text-left">Message</td>
        <td class="text-left"><?php echo "$comment";?></td>
      </tr>
      <tr>
        <td class="text-left">Product</td>
        <td class="text-left"><?php echo "$pname";?></td>
      </tr>
      <tr>
        <td class="text-left">Quanti</td>
        <td class="text-left"><?php echo "$quanti";?></td>
      </tr>
      <tr>
        <td class="text-left"><b>TOTAL</b></td>
        <td class="text-left"><b><?php echo "$total";?> &euro;</b></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
