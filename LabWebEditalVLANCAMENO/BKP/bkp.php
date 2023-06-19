<?php
include_once('Mysqldump/Mysqldump.php');
include('smtp/PHPMailerAutoload.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=trabweb', 'root', '');
$f=date('d-m-Y');
$dump->start("sql_dump/$f.sql"); 





$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="bkpmm.sh@gmail.com";
$mail->Password="llqkmezvdegimhdc";
$mail->SetFrom("bkpmm.sh@gmail.com");
$mail->addAddress('bkpmm.sh@gmail.com');
$mail->IsHTML(true);
$mail->Subject="Website Backup ";
$mail->Body="Aqui esta o seu Backup do dia ! Espero que tenha tido um otimo dia de trabalho, fico grato em estar aqui para ajudar";
$mail->AddAttachment("sql_dump/$f.sql");
$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false
));
if($mail->send()){
	//echo "Please check your email id for password";
}else{
	//echo "Error occur";
}
?>