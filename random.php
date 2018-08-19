<! doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Random Number</title>
</head>
<body>
<?php
//this script generates 3 random numbers
    
//create 3 random numbers
$n1 = mt_rand(1, 99);
$n2 = mt_rand(1,99);
$n3 = mt_rand(1,300);

    
//output
print "<p> Your lucky numbers are:<br>
$n1 <br>
$n2 <br>
$n3 </p>
";
?>
</body>
</html>