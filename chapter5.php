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
  //print mb_substr(文字列,取得開始位置（0スタート）,取得文字数); 
  print mb_substr($str,6,5)."<br>"; // 6文字目から、5文字を取得
  print mb_substr($str,0,5)."<br>"; // 0文字目から、5文字を取得
  print mb_substr($str,6,-2)."<br>"; // 6文字目から、末尾2文字を除いて取得
  print mb_substr($str,-7,-2)."<br>"; // 末尾7文字目から、末尾2文字を除いて取得

  