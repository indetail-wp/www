<?php
//ini_set( 'display_errors', 1 ); 

mb_language("Japanese");
mb_internal_encoding("utf-8");
mb_http_input("utf-8");
mb_http_output("utf-8");

	// メールタイトル
	$subject = "インディテール　お問い合わせ";
	// 送信元メールアドレス設定
	$mailFrom = "From:info@indetail.co.jp";
	// 送信先メールアドレス設定
	$sendMailAddress = "info@indetail.co.jp";

	$corporate_name = $_REQUEST["corporate_name"];
	$name    = $_REQUEST["name"];
	$mail    = $_REQUEST["mail"];
	$phone   = $_REQUEST["phone"];
	$where   = $_REQUEST["where"];
	$radio   = $_REQUEST["radio"];
	$opinion = $_REQUEST["opinion"];
	
	// 以下本文
	/* -------------------------------------------- */
	$mailbody = "\n";
	$mailbody .= "会社名：".$corporate_name."\n";
	$mailbody .= "-------------------\n";
	$mailbody .= "お名前：".$name."\n";
	$mailbody .= "-------------------\n";
	$mailbody .= "メールアドレス：".$mail."\n";
	$mailbody .= "-------------------\n";
	$mailbody .= "電話番号：".$phone."\n";
	$mailbody .= "-------------------\n";
	$mailbody .= "お問合せ項目：".$radio."\n";
	$mailbody .= "-------------------\n";
	$mailbody .= "どのように知ったか：".$where."\n";
	$mailbody .= "-------------------\n";
	$mailbody .= $opinion;
	/* -------------------------------------------- */

//$sendMailAddress = "sugos@itec-hokkaido.co.jp";


	$mailbody = mb_convert_encoding($mailbody, "utf-8");
	$subject = mb_convert_encoding($subject,"utf-8");
	$ret = mb_send_mail($sendMailAddress, $subject, $mailbody, $mailFrom);


if (array_key_exists("returnUrl", $_REQUEST)) {
	$url = $_REQUEST["returnUrl"];
} else {
	$url = "http://www.indetail.co.jp/contact/finish/";
}


header("Location: ".$url);
exit;
?>

