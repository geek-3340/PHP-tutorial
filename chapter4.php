<?php
    // 制御構文

    // switch文
    $day = 3; // 曜日を表す数値
    switch ($day) {
        case 1:
            $day_name = "月曜日";
            break;
        case 2:
            $day_name = "火曜日";
            break;
        case 3:
            $day_name = "水曜日";
            break;
        case 4:
            $day_name = "木曜日";
            break;
        case 5:
            $day_name = "金曜日";
            break;
        case 6:
            $day_name = "土曜日";
            break;
        case 7:
            $day_name = "日曜日";
            break;
        default:
            $day_name = "不明な曜日";
    }
    print "今日は $day_name です。<br>"; // 今日は 水曜日 です。

    // match文
    $day = 3; // 曜日を表す数値
    $day_name = match ($day) {
        1 => "月曜日",
        2 => "火曜日",
        3 => "水曜日",
        4 => "木曜日",
        5 => "金曜日",
        6 => "土曜日",
        7 => "日曜日",
        default => "不明な曜日"
    };
    print "今日は $day_name です。<br>"; // 今日は 水曜日 です。

    // while,do-while文
    $i = 1;
    while ($i < 5) {
        print "{$i}番目のループです<br>";
        $i++;
    }

    $i = 1;
    do {
        print "{$i}番目のループです<br>";
        $i++;
    } while ($i < 5);

    // for文
    for ($i = 1; $i <= 5; $i++) {
        print "{$i}番目のループです<br>";
    }
    // カンマ演算子
    // カンマ演算子は、複数の式を評価し、最後の式の値を返す演算子です。
    for ($i = 1; $i <= 5; print "{$i}番目のループです<br>", $i++) {}

    for ($k = 3, $s = 2; $result = $k * $s, $k < 10; $k++, $s++) {
        print "{$k} × {$s} = {$result}<br>";
    }

    // foreach文
    $fruits = ["りんご", "ばなな", "みかん"];
    foreach ($fruits as $fruit){
        print "今日のデザートは {$fruit} です。<br>";
    }

    // 配列の要素をループで変更する方法
    // 値を参照渡しでループする
    $fruits = ["りんご", "ばなな", "みかん"];
    foreach($fruits as &$fruit){
        $fruit = '美味しい' . $fruit;
    }
    print_r ($fruits); // Array ( [0] => 美味しいりんご [1] => 美味しいばなな [2] => 美味しいみかん )
    print '<br>';

    // 入れ子の配列、連想配列をループする
    $fruits = [
        "りんご" => ["色" => "赤", "味" => "甘い"],
        "ばなな" => ["色" => "黄色", "味" => "甘い"],
        "みかん" => ["色" => "オレンジ", "味" => "甘い"]
    ];
    foreach($fruits as $fruit => ["色" => $color, "味" => $taste]) {
        print "{$fruit}の色は {$color} で、味は {$taste} です。<br>";
    }

    // break文とcontinue文
    $sum = 0;
    for($i = 1; $i <=15; $i++){
        if($i%2 == 0){
            print "iが偶数なのでスキップします。<br>";
            continue; // 偶数のときはスキップ    
        }
        print "sum:".$sum." + "."i:".$i." ";
        $sum += $i;
        print "=".$sum."<br>";
        if($sum >= 30){
            print "合計が30を超えたのでループを終了します。<br>";
            break; // 合計が30を超えたらループを終了
        }
    };

