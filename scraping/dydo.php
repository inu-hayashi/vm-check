<?php
set_time_limit(1000);


		$html ="https://www.dydo.co.jp/products/nutrition";
		// 取得するwebページの指定

	require_once("phpQuery-onefile.php");

			// 今度は先程取得したディレクトリ先を指定
			$html =file_get_contents($html);
			// 指定したページの情報を取得
			$dom = phpQuery::newDocument($html);

			$count= count($dom[".sct tr"]);
			// 行数を取得
			for($i=1;$i<=$count;$i++){
				// (行数)まで$iをインクリメント

				$title=$dom[".sct tr:eq($i) .prodname"]->text();{
				// tr:eq($i)で行を上から指定しその中の文字列を取得
     echo $title."<br>";
}

$data = $dom[".sct tr:eq($i) td:eq(2)"]->text();{
				// 同じように原材料名を取得

     echo $data."<br>";
}

$allr = $dom[".sct tr:eq($i) td:eq(3)"]->text();{
				// アレルギー情報を取得
     echo $allr."<br>";
}
    $src = $dom[".sct tr:eq($i) .prodimg img"]->attr("src");
				// 画像URLを取得
				echo $src."<br>";



				$src = "https://www.dydo.co.jp".$src;
				echo $src."<br>";

				$fileName = "img".$i.".jpg";
				// ファイル名を設定
				$filePath = "../images/dydo/".$fileName;
				// 保存先のファイルパスを設定

				$imgData = @file_get_contents($src);

				if($imgData){
				@file_put_contents("$filePath", $imgData);
				// さっきの指定先にファイルを保存
			}

					$jsonArray[] = ['title'=> $title, 'data'=>$data, 'allr'=>$allr, 'filePath'=>$filePath];
					// 以上の情報を配列に格納
					$jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
					file_put_contents("../json/dydo.json",$jsonData);

			sleep(1);
}
					// echo $jsonData;

 ?>