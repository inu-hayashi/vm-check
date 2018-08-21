<?php
set_time_limit(1000);

		$html ="https://www.kirin.co.jp/products/list/nutrition/softdrink/";
		// 取得するwebページの指定

	require_once("phpQuery-onefile.php");

			$html =file_get_contents($html);
			// 指定したページの情報を取得
			$dom = phpQuery::newDocument($html);

			$count= count($dom["table tr"]);
			// 行数を取得

			for($i=0;$i<=$count;$i++){
				// (行数)まで$iをインクリメント

				$title=$dom["table tr:eq($i)>td:first"]->text();{
				// tr:eq($i)で行を上から指定しその中の文字列を取得
     echo $title."<br>";
}
$data = $dom["table tr:eq($i) td:eq(1)"]->text();{
				// 同じように原材料名を取得

     echo $data."<br>";

}

$allr = $dom["table tr:eq($i) td:eq(2)"]->text();{
				// アレルギー情報を取得
     echo $allr."<br>";

    $src = $dom["table tr:eq($i) td.thumb img"]->attr("src");
				echo $src."<br>";
				// 画像URLを取得


				$src = str_replace("../../","",$src);
				// 相対パスだったので先頭の階層指定を削除
				$src = "https://www.kirin.co.jp/products/list/".$src;
				echo $src."<br>";

				$fileName = "img".$i.".jpg";
				// ファイル名を設定
				$filePath = "../images/kirin/".$fileName;
				// 保存先のファイルパスを設定

				$imgData = @file_get_contents($src);

				if($imgData){
				@file_put_contents("$filePath", $imgData);
				// さっきの指定先にファイルを保存
			}
}

					$jsonArray[] = ['title'=> $title, 'data'=>$data, 'allr'=>$allr, 'filePath'=>$filePath];
					// 以上の情報を配列に格納
					$jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
					file_put_contents("../json/kirin.json",$jsonData);
			sleep(1);
			}
					echo $jsonData;





 ?>