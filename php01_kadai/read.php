<html>
    <body>
        <h1>data table</h1>
        <table border ="1" style="border-collapse: collapse">
            <tr>
                <th>登録日時</th>
                <th>名前</th>
                <th>出身地</th>
                <th>メモ</th>
            </tr>
    
<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
    $ary = explode("/", $str); //文字列を配列に変換
    echo '<tr>';
    for($i = 0; $i < sizeof($ary); $i++){
        echo "<td> {$ary[$i]} </td>";
    }
    echo '</tr>';
};

fclose($openFile);

?>