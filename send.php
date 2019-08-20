
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "csr@infoanalytica.com";

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
 <th class='back_header' colspan='6'>GET IN TOUCH</th>
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
 <td colspan='2'><strong>Subject</strong></td>
 <td colspan='4'>".$subject."</td>
</tr>
<tr>
 <td colspan='2'><strong>Message</strong></td>
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
$headers .= 'From: <csr@infoanalytica.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$msg,$headers);
echo "<script type='text/javascript'>window.location.href = 'http://csr.infoanalytica.com/';</script>";
//echo "this is call send mail";
}
?>
