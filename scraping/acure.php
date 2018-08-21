<?php
set_time_limit(1000);

// $brands = "all-products";

		// 取得するwebページの指定

		$html ="https://www.acure-fun.net/products/json/products_data.json";
		// htmlを格納

	require_once("phpQuery-onefile.php");
 // phpQuery読み込み

 $jsonUrl = "../json/acure.json";
if(file_exists($jsonUrl)){
  $json = file_get_contents($jsonUrl);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$obj = json_decode($json,true);
$obj = $obj["products_data"];
foreach($obj as $key => $val){

     $title = $val["name"];
     // echo $title."<br>";
// echo $val["name"]."<br>";
$url = $val["url"];
$url = "https://www.acure-fun.net/".$url;
   // 今度は先程取得したディレクトリ先を指定
   $html =file_get_contents($url);
// echo $html;
   // 同じようにhtmlを格納
   $dom = phpQuery::newDocument($html);
   // echo $dom;
   // 指定class内の最初のdl(dl:first)からdd要素を配列に取得
    foreach ($dom["table.wFull tr:nth-child(2)"]->find("th:contains('原材料名') + td") as $tmp) {
   // sleep(1);
     // $dataに取り出す
     $data= pq($tmp);
     $data = $data->text();
     echo $data;

     // echo $data."<br>";

     $jsonArray[] = ['title'=> $title, 'data'=>$data, 'allr'=>$allr];
     $jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
     echo $jsonData;
  }
 }

     file_put_contents("../json/acure2.json",$jsonData);
}


 ?>