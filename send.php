
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];



/*if($running=="on"){
  $running = "<input type='checkbox' checked disabled> ";
}
if($longDist=="on"){
  $longDist = "<input type='checkbox' checked disabled> ";
}if($cycling=="on"){
  $cycling = "<input type='checkbox' checked disabled> ";
}if($swimming=="on"){
  $swimming = "<input type='checkbox' checked disabled> ";
}if($triathlons=="on"){
  $triathlons = "<input type='checkbox' checked disabled> ";
}if($training=="on"){
  $training = "<input type='checkbox' checked disabled> ";
}if($tech=="on"){
  $tech = "<input type='checkbox' checked disabled> ";
}if($nutrition=="on"){
  $nutrition = "<input type='checkbox' checked disabled> ";
}if($injury=="on"){
  $injury = "<input type='checkbox' checked disabled> ";
}if($racing=="on"){
  $racing = "<input type='checkbox' checked disabled> ";
}

if($otherGuid=="on"){
  $otherGuid = "<input type='checkbox' checked disabled> ";
}


$agree = "<input type='checkbox' checked disabled> ";*/


$to = "mithilesh.joshi@ia.com";


if($name!=""){

$msg = "
<html>
<head>
<title>HTML email</title>
<style>
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
th, td {
   padding: 15px;
}
.back_header{
background: #B2D430;
}
</style>
</head>
<body>

<table border='1' width='500' >
<tr>
 <th class='back_header' colspan='6'>MEMBERSHIP FORM</th>
</tr>
<tr>
 <td width='20%' colspan='2'><strong>First Name</strong></td>
 <td colspan='4'>".$name."</td>
</tr>
<tr>
 <td colspan='2'><strong>Email</strong></td>
 <td colspan='4'>".$email."</td>
</tr>
<tr>
 <td colspan='2'><strong>Mobile Number</strong></td>
 <td colspan='4'>".$number."</td>
</tr>
<tr>
 <td colspan='2'><strong>Mobile Number</strong></td>
 <td colspan='4'>".$message."</td>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <marketing@42point1.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$msg,$headers);
//echo "<script type='text/javascript'>window.location.href = 'http://localhost:8080/csr/';</script>";
//echo "this is call send mail";
}
?>
