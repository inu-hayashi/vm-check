<?php
set_time_limit(1000);

		$html ="https://www.cocacola.co.jp/brands/all-products";
		// 取得するwebページの指定

	require_once("phpQuery-onefile.php");

	$html = file_get_contents($html);
			// 指定したページの情報を取得
	$dom = phpQuery::newDocument($html);
	// phpQueryで扱えるようにする
	$count = count($dom[".product-tab ul li"]);
			// 行数を取得

	for($i=0;$i<=$count;$i++){

		$href = $dom[".product-tab ul li:eq($i) a"]->attr("href");
		echo $href."<br>";
		// 全製品へのリンクページからhref情報を取得
		$html=file_get_contents("https://www.cocacola.co.jp".$href);
		$domChild = phpQuery::newDocument($html);
		// それぞれのページ情報を最初と同じように取得

		$title= $domChild["h4.theme-main-title"]->text();
				// タイトルを取得
		echo $title."<br>";

		$data = $domChild["dl:eq(0)"]->text();
		// 原材料名を取得
		// HI-Cなどが.productData下にないのでdlの順番のみで指定。これより先頭にdlが追加されたら修正不可避。
		$data = str_replace("原材料名 : ","",$data);
		// ファンタとかがddで囲まれていないので全部取得したあと先頭文字列削除。
		echo $data."<br>";

		$allr = $domChild[".allergy tr:eq(1) td"]->text();
				// 同じように原材料名を取得
		echo $allr."<br>";


		$src = $dom["table tr:eq($i) td.thumb img"]->attr("src");
				echo $src."<br>";
				// 画像URLを取得

						$src = $dom[".product-tab ul li:eq($i) .imageWrapper img"]->attr("src");
		// 最初の全製品リンクページから製品画像のURLを取得

								$src = "https://www.cocacola.co.jp".$src;
				echo $src."<br>";

								$fileName = "img".$i.".jpg";
				// ファイル名を設定
				$filePath = "../images/cocacola/".$fileName;
				// 保存先のファイルパスを設定

				$imgData = @file_get_contents($src);

				if($imgData){
				@file_put_contents("$filePath", $imgData);
				// さっきの指定先にファイルを保存
			}

		$jsonArray[] = ['title'=> $title, 'data'=>$data, 'allr'=>$allr, 'filePath'=>$filePath];
		$jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		file_put_contents("../json/cocacola.json",$jsonData);
			sleep(1);


	}
					echo $jsonData;

 ?>