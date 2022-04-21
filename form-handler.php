<?php
// json 形式のデータを扱うための定義
header('Content-type: application/json');
// PHP5.1.0以上はタイムゾーンの定義が必須
date_default_timezone_set('Asia/Tokyo');

//変数初期化
$errflg =0;    // エラー判定フラグ
$dispmsg ='';  // 画面出力内容

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "	testmail@testocukdel.shop";
$email_subject = "新しいお問い合わせです";
$email_body = "User Name: $name.\n".
              "Use Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
$to = "kusuprograming@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";


$retmail = mail($to, $email_subject, $email_body, $headers);
if( $retmail ){
  $dispmsg ='<p class="success">メールを送信しました。返信までしばらくお待ちください。</p>';
  $dispmsg.='<blockquote><p>名前： '.hsc_utf8($nameval).'<br />';
  $dispmsg.= 'メール： '.hsc_utf8($mailval).'<br />';
  $dispmsg.= 'ウェブサイト： '.hsc_utf8($urlval).'</p>';
  $dispmsg.= '<pre>'.hsc_utf8($textval).'</pre></blockquote>';
}else{
  $dispmsg .= '<p id="errmsg">【エラー】メール送信に失敗しました。。</p>';
  $errflg = 1;
}

// 処理結果を画面に戻す
$result = array('errflg'=>$errflg, 'dispmsg'=>$dispmsg);
echo json_encode( $result );


// header("Location: contact.html");
// HTMLエスケープ処理
function hsc_utf8($str) {
  return htmlspecialchars($str, ENT_QUOTES,'UTF-8');
}

?>