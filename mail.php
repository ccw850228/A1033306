<html>
<head>
<title></title>
</head>
<body>
<form action="" method="POST">
寄件人:<input type="text" name="umail" ></br>
請輸入您的郵件密碼:<input type="password" name="upwd" ></br>
收件人:<input type="text" name="hemail" ></br>
請輸入您的主旨:<input type="text" name="upoint" ></br>
請輸入您的郵件內容:</br>
<textarea cols="100" rows="20" name="umessage"></textarea>
<input type="submit" value="送出資料">
</form>
<?php

if(isset($_POST["hemail"])){

$umail=$_POST["umail"];
$upwd=$_POST["upwd"];
$hemail=$_POST["hemail"];
$upoint=$_POST["upoint"];
$umessage=$_POST["umessage"];

require("PHPMailer/PHPMailerAutoload.php");

$mail=new PHPMailer();   //產生一個mail物件
$mail->SMTPDebug=1;
$mail->IsSMTP();  //telling the class to use SMTP
$mail->SMTPAuth=true;  //eable SMTP authentication
$mail->Host="smtp.gmail.com"; //set gmail as the SMTP server
$mail->Port=587;

$mail->Username=("$umail");
$mail->Password=("$upwd");

$mail->CharSet="utf-8";
$mail->Subject="$upoint";

$mail->From=("$umail");
$mail->IsHTML(True);

$mail->AddAddress("$hemail");
$mail->Body="$umessage";
if(!$mail->send()){
	echo "Failed";
	echo "Mailer error:".$mail->ErrorInfo;
	exit;
}

   echo "Success";
}
?>
</body>
</html>