<?php
set_time_limit(1000);

$brands = "all-products";

		// 取得するwebページの指定

		$html ="https://www.cocacola.co.jp/brands/".$brands;
		// htmlを格納

		// echo $html;


	require_once("phpQuery-onefile.php");
	$htmlData = file_get_contents($html);
		$dom = phpQuery::newDocument($htmlData);
			// htmlの指定class内からaタグの内容を取得。それぞれ$tmpに格納。
		foreach ($dom[".product-tab ul li"]->find("a") as $tmp) {
			// usleep(100000);

			// $tmpから内容を取り出す
			$a= pq($tmp);
			// aタグのhref要素を取得
			$attr = $a->attr("href");
			// var_dump($attr);

			// 確認用にディレクトリを出力
			$url = "https://www.cocacola.co.jp".$attr;
			// echo $url . "<br>";

			// 今度は先程取得したディレクトリ先を指定
			$html2 =file_get_contents($url);
			// 同じようにhtmlを格納
			$mom = phpQuery::newDocument($html2);
			// 指定class内の最初のdl(dl:first)からdd要素を配列に取得
				foreach ($mom[".productData dl:first"]->find("dd") as $tmp) {
			// sleep(1);
					// $dataに取り出す
					$data= pq($tmp);
					$data = $data->text();

					$title =pq("h4.theme-main-title")->text();
					// echo $title."<br>";
					// echo $data."<br>";

					$jsonArray[] = ['title'=> $title, 'data'=>$data, 'allr'=>$allr];
					$jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
					echo $jsonData;
		}

					file_put_contents("../json/cocalola.json",$jsonData);
}

 ?>