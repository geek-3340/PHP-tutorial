<?php
  // ［1］ for命令とcontinue命令とを使って、1～100の範囲にある奇数値の合計を求めてみましょう。
    for($num = 1; $num <=100; $num++){
      if($num%2 === 0){
        continue;
      }
      $num += $num;
    };
    print $num."<br>";

  // ［2］以下ををwhile命令を使って書き換えてみましょう。 
  $sum = 0;
  for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
    if ($sum > 1000) { break; }
  }
  print "合計が1000を超えるのは、1～{$i}を加算したときです。<br>";
  
  $sum = 0;
  $i = 1;
  while($i <= 100){
    $sum += $i;
    if ($sum > 1000) { break; }
    $i++;
  };
  print "合計が1000を超えるのは、1～{$i}を加算したときです。<br>";


  //  [3]次のコードは、foreach命令を使って配列の値を一律に1.5倍するためのコードです。空欄①～⑤を埋めて、コードを完成させてください。


  // ［4］ 変数$languageの値が「Python」「PHP」「Ruby」であれば「インタプリター言語」
  // 「C#」「Java」であれば「コンパイル言語」と表示するスクリプトを、switch命令を使って作成してください。
  $language = "C#";
  switch($language){
    case "Python":
    case "PHP":
    case "Ruby":
      print "インタプリター言語";
      break;
    case "C#":
    case "Java":
      print "コンパイル言語";
      break;
  }
  print "<br>";

  // ［5］ ［4］のスクリプトをif命令を使って書き換えてみましょう。
  if($language == "Python" || $language == "PHP" || $language == "Ruby"){
    print "インタプリター言語";
  }elseif($language == "C#" || $language == "Java"){
    print "コンパイル言語";
  };
  print "<br>";

  // ［6］ ［4］のコードをmatch式を使って書き換えてみましょう。
print match($language){
  "Python","PHP","Ruby" => "インタプリター言語",
  "C#","Java" => "コンパイル言語"
};