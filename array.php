<?php
  // 配列
  $array = ["りんご", "ばなな", "みかん"]; // 配列は[]で定義
  print_r($array); // 配列の内容を確認
  print '<br>'.$array[0].'<br>'; // 配列の最初の要素を出力

  $array[] = "ぶどう"; // 配列に要素を追加
  print_r($array); // 配列の内容を確認
  print '<br>';

  // 連想配列
  $assoc_array = [
    "りんご" => "apple",
    "ばなな" => "banana",
    "みかん" => "orange"
  ];
  print_r($assoc_array); // 連想配列の内容を確認
  print '<br>'.$assoc_array["りんご"].'<br>'; // 連想配列のキー"りんご"の値を出力

  // 多次元配列
  $multi_array = [
    ["りんご", "ばなな"],
    ["みかん", "ぶどう"]
  ];
  print_r($multi_array); // 多次元配列の内容を確認
  print '<br>'.$multi_array[1][0].'<br>'; // 多次元配列の要素を出力