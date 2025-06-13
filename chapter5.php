<?php
  // 組み込み関数
  
  // 文字列関数
  // 文字数取得：mb_strlen
  $str = "こんにちは世界！";
  $str = mb_strlen($str); 
  print $str; // 結果:8
  print "<br>";

  // 大文字・小文字変換：mb_convert_case
  $str = "heLLo woRld!!";
  print mb_convert_case($str,MB_CASE_UPPER)."<br>"; // 大文字
  print mb_convert_case($str,MB_CASE_LOWER)."<br>"; // 小文字
  print mb_convert_case($str,MB_CASE_TITLE)."<br>"; // 単語の先頭文字のみ大文字

  // 文字列の一部を取得
  $str = "Hello World!!";
  //mb_substr(文字列,取得開始位置（0スタート）,取得文字数); 
  print mb_substr($str,6,5)."<br>"; // 6文字目から、5文字を取得
  print mb_substr($str,0,5)."<br>"; // 0文字目から、5文字を取得
  print mb_substr($str,6,-2)."<br>"; // 6文字目から、末尾2文字を除いて取得
  print mb_substr($str,-7,-2)."<br>"; // 末尾7文字目から、末尾2文字を除いて取得

  // 文字列の一部を取得２
  $str = "Hello World!!";
  // mb_strstr(文字列,基準文字,boolean)
  // booleanはtrue:基準文字手前まで、false:基準文字以降を取得
  print mb_strstr($str,"W",true)."<br>"; //W手前までのHelloを取得
  print mb_strstr($str,"W",false)."<br>"; // W以降のWorld!!を取得
  print mb_strstr($str,"w",false)."<br>"; // 小文字wは$strに存在しない為、falseを返す

  // 文字列の一部を置き換える
  $str = "Hello World!!";
  // str_replace(置き換える既存文字,置き換え文字,対象文字列,置き換えた文字列の個数を格納する変数)
  print str_replace("o","X",$str,$count)."<br>";
  print $count."個の文字列を変換しました！<br>";
  // 変換する文字が複数ある場合は、配列を使用
  $str = "Hello World!!";
  $search = ["o","l"];
  $replace = ["X","Y"];
  print str_replace($search,$replace,$str,$count)."<br>";
  print $count."個の文字列を変換しました！<br>";

  // 文字列の分割
  $str = "Hello,World,PHP";
  // explode(区切り文字,対象文字列,分割した配列の最大数)
  print_r(explode(",",$str));
  print "<br>";
  // 最大数を指定すると、指定した数で分割される
  print_r(explode(",",$str,2));
  print "<br>"; // 最大数2で分割

  // 特定の文字の位置を取得
  $str = "Hello World!!";
  // mb_strpos(文字列,基準文字,開始位置)
  print mb_strpos($str,"o")."<br>"; // oの位置を取得
  print mb_strpos($str,"o",5)."<br>"; // 5文字目以降のoの位置を取得
  print mb_strpos($str,"O")."<br>"; // 大文字Oは存在しない為、falseを返す
  print mb_strpos($str,"o",-6)."<br>"; // 末尾6文字目からoの位置を取得
  // mb_strrpos(文字列,基準文字,開始位置)
  print mb_strrpos($str,"o")."<br>"; // oの最後の位置を取得
  print mb_strrpos($str,"o",5)."<br>"; // 5文字目以降のoの最後の位置を取得
  print mb_strrpos($str,"O")."<br>"; // 大文字Oは存在しない為、falseを返す
  print mb_strrpos($str,"o",-6)."<br>"; // 末尾6文字目からoの最後の位置を取得

  // 特定の文字列の登場回数を取得
  $str = "Hello World!!";
  // mb_substr_count(文字列,基準文字)
  print mb_substr_count($str,"o")."<br>"; // oの登場回数を取得
  print mb_substr_count($str,"O")."<br>"; // 大文字Oは存在しない為、0を返す

  // 文字列に特定の文字列が含まれているか確認
  $str = "Hello World!!";
  // str_contains(文字列,基準文字)
  if(str_contains($str,"Hello")){
    print "文字列はHelloを含んでいます。<br>";
  };
  // str_starts_with(文字列,基準文字)
  if(str_starts_with($str,"Hello")){
    print "文字列はHelloで始まっています。<br>";
  };
  // str_ends_with(文字列,基準文字)
  if(str_ends_with($str,"Hello")){
    print "文字列はHelloで終わっています。<br>";
  }else{
    print "文字列はHelloで終わっていません。<br>";
  };

  // 文字列の前後の空白を削除
  $str = "   !![Hello World]!!    ";
  // trim(対象文字列,削除する文字)
  print trim($str)."<br>"; // 前後の空白を削除
  print ltrim($str)."<br>"; // 前の空白を削除
  print rtrim($str)."<br>"; // 後の空白を削除
  // 特定の文字を削除
  print trim($str," ![]")."<br>"; // 前後の空白と![]を削除

  // 文字列を変換する
  $str = "Hello World!!";
  // mb_convert_kana(文字列,変換タイプ)
  print mb_convert_kana($str,"R")."<br>"; // 半角英文字を全角に変換
  // 変換タイプは多くの種類があり、その都度調べると良いでしょう。

  // 文字列をエンコードする
  $str = "Hello World!!";
  // base64_encode(対象文字列)
  $encoded = base64_encode($str); // Base64エンコード
  print $encoded."<br>";

  // 文字列をデコードする
  // base64_decode(対象文字列)
  $decoded = base64_decode($encoded); // Base64デコード
  print $decoded."<br>";

  // 文字列エンコーディングを変換する
  $str = "こんにちは世界！";
  // mb_convert_encoding(文字列,変換後のエンコーディング,変換前のエンコーディング)
  print mb_convert_encoding($str,"base64","UTF-8")."<br>"; // UTF-8からbaseに変換
  print mb_convert_encoding($str,"UTF-8","base64")."<br>"; // base64からUTF-8に変換

  // メールを送信する
  // この関数を使用するには、PHP設定ファイル（例：PHP.ini）のmbstring、sendmail_pathを設定する必要があります。
  // mb_send_mail(宛先,件名,本文,ヘッダー)
  $to = "sample@example.com"; // 宛先メールアドレス
  $subject = "Test mail"; // 件名
  $message = "This is a test mail.";  // 本文
  // ヘッダー情報を設定
  // ヘッダーは配列で指定することもできます。
  $headers = [
    "From" => "sender@example.com", // 送信者メールアドレス
    "Reply-To" => "reply@example.com", // 返信先メールアドレス
    "Cc" => "cc@example.com", // CCメールアドレス
    "Bcc" => "bcc@example.com", // BCCメールアドレス
    "X-Mailer" => "PHP/" . phpversion(), // メール送信に使用したプログラム名
  ];
  mb_send_mail($to, $subject, $message, $headers); // メールを送信
  // 注意: 実際にメールを送信するには、適切なメールサーバーの設定が必要です。

  