<?php

// パラメータ取得
$request_param = $_POST;

// お問い合わせ日時
$request_datetime = date("Y年m月d日 H時i分s秒");

//自動返信メール

$to = "mino.paint.industry@gmail.com";
$subject = "お問い合わせ有難うございます。";
$from = "	mpi@minopaintindustry.com";

$header = '';
$header .= "From: " . $from ." \r\n";
$header .= "Return-Path: " . $from . " \r\n";

$content = "";
$content .= $request_param['name']. "様\r\n";
$content .= "お問い合わせ有難うございます。\r\n";
$content .= "お問い合わせ内容は下記通りでございます。\r\n";
$content .= "=================================\r\n";
$content .= "お名前	      " . htmlspecialchars($request_param['name'])."\r\n";
$content .= "ふりがな   " . htmlspecialchars($request_param['name-read'])."\r\n";
$content .= "電話番号   " . htmlspecialchars($request_param['tel'])."\r\n";
$content .= "住所   " . htmlspecialchars($request_param['address'])."\r\n";
$content .= "内容   " . htmlspecialchars($request_param['content'])."\r\n";
$content .= "お問い合わせ日時   " . $request_datetime."\r\n";
$content .= "=================================\r\n";

//管理者確認用メール
$subject2 = "お問い合わせがありました。";
$content2 = "";
$content2 .= "お問い合わせがありました。\r\n";
$content2 .= "お問い合わせ内容は下記通りです。\r\n";
$content2 .= "=================================\r\n";
$content2 .= "お名前	      " . htmlspecialchars($request_param['name'])."\r\n";
$content2 .= "ふりがな	      " . htmlspecialchars($request_param['name-read'])."\r\n";
$content2 .= "電話番号   " . htmlspecialchars($request_param['tel'])."\r\n";
$content2 .= "住所   " . htmlspecialchars($request_param['address'])."\r\n";
$content2 .= "内容   " . htmlspecialchars($request_param['content'])."\r\n";
$content2 .= "お問い合わせ日時   " . $request_datetime."\r\n";
$content2 .= "================================="."\r\n";

mb_language("ja");
mb_internal_encoding("UTF-8");
//mail 送信

$sendmail = mb_send_mail($to,$subject,$content, $header);
if($sendmail){
?>
    <script>
        window.location = 'https://minopaintindustry.com';
    </script>
    <?php
} else {
  header('Content-Type: text/html; charset=UTF-8');
  echo "メールの送信に失敗しました";
};

?>
