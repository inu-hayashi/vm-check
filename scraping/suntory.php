<?php
set_time_limit(1000);

		$html ="https://products.suntory.co.jp/softdrink/ingredient.html";
		// 取得するwebページの指定

	require_once("phpQuery-onefile.php");

			$html =file_get_contents($html);
			// 指定したページの情報を取得
			$dom = phpQuery::newDocument($html);
			// echo $dom;

			$count= count($dom["table.smp tr"]);
			// 行数を取得

			for($i=0;$i<=$count;$i++){
				// (行数)まで$iをインクリメント
				$title=$dom["tr:eq($i) td.ingredients a"]->text();
				// tr:eq($i)で行を上から指定しその中の文字列を取得
     echo $title."<br>";

				$data = $dom["tr:eq($i) td:eq(1)"]->text();
				// 同じように原材料名を取得
     echo $data."<br>";


				$allr = $dom["tr:eq($i) td:eq(2)"]->text();
				// アレルギー情報を取得
     echo $allr."<br>";

				$src = $dom["tr:eq($i) td.ingredients img"]->attr("src");
				echo $src."<br>";

				$fileName = "img".$i.".jpg";
				$filePath = "../images/suntory/".$fileName;
				echo $filePath;

				$imgData = @file_get_contents($src);

				if($imgData){
				@file_put_contents("$filePath", $imgData);
			}


					$jsonArray[] = ['title'=> $title, 'data'=>$data, 'allr'=>$allr, 'filePath'=>$filePath];
					// 以上の情報を配列に格納
					$jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
					file_put_contents("../json/suntory.json",$jsonData);
			sleep(1);
}
					echo $jsonData;

 ?>