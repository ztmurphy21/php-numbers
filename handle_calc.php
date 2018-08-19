<! doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Product Cost Calculator</title>
<style tpye="text/css">
    .number {font-weight: bold;}
</style>
</head>
<body>
<?php
/*This script takes values from calculator.html
and performs total cost and monthly payment calculations.*/

//address handling error if needed.

//get values from the $_POST Array:
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];
    
//calculate total
$total = $price * $quantity;
$total = $total + $shipping;
$total = $total - $discount;
    
//tax rate figuring
$taxrate = $tax /100;
$taxrate = $taxrate + 1;

//add tax to toal
$total = $total * $taxrate;
    
//calculate monthly payments
$monthly = $total / $payments;
    
//apply the proper formatting
$total = number_format($total, 2);
$monthly = number_format($monthly, 2);
    
//print out the results
print "<p>You have selected to purchase:<br>
$<span class=\"number\">$quantity</span> widget(s) at <br>
$<span class=\"number\">$price</span> priace each plus a <br>
$<span class=\"number\">$shipping</span> shipping cost and a <br>
<span class=\"number\">$tax</span> percent tax rate. <br>
After your <span class=\"number\">$discount</span> discount, the total cost is 
$<span class=\"number\">$total</span>.<br>
Divided over <span class=\"number\">$payments</span> monthly payments, that would be 
$<span class=\"number\">$monthly</span> each month. </p>";
?>
</body>
</html>    