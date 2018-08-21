<?php

$jsonUrl = "../json/kirin.json";
if(file_exists($jsonUrl)){
  $json = file_get_contents($jsonUrl);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$obj = json_decode($json,true);
// $obj = $obj["res"]["blogData"];
}

?>
  <!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>自販売機の原材料・甘味料チェッカー</title>
    <meta name="description" content="自動販売機に入っている商品の内容物を買う前に事前にチェック!アレルギーや苦手な甘味料などがある際に活用ください。(変更されている場合もあるので飲む前には念の為ご自身でご確認ください)" />
    <meta name="viewport" content="width=device-width">
    <!-- Loading Bootstrap -->
     <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="../css/flat-ui.css" rel="stylesheet">
    <link href="../css/demo.css" rel="stylesheet">
    <link href="../css/additional.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120259490-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120259490-2');
</script>

  </head>
  <body>
<!-- nav -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/service/vm/include/nav.php'); ?>
<!-- /nav -->
    <div class="container">
      <h1 class="demo-section-title">キリンブランドの商品・内容物一覧</h1>
      <p>この内容はデータ取得時のものです。変更されている場合もありますので、飲む前には念の為ご自身でご確認ください</p>
      <div class="row demo-row">
        <?php foreach($obj as $key => $val): ?>
        <div class="ddata side_white">
          <div class="col-3 dimage">
            <img src="<?php echo $val["filePath"]; ?>" onerror="this.src='../images/vm/no-image.png'">
          </div>
          <div class="product">
            <h2>
              <?php echo $val["title"]; ?>
            </h2>
              <div class="card card-body">
                <p>
                  <span>原材料名:
                  </span>
                  <?php echo $val["data"]; ?>
                </p>
                <p>
                  <span>アレルギー:
                  </span>
                  <?php echo $val["allr"]; ?>
                </p>
              </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- /row -->
      <p>このサイトが行っているのはデータの収集のみです。商品についての質問は各メーカーにご連絡ください</p>
    </div>
    <!-- footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/service/vm/include/footer.php'); ?>
    <!-- /footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
    <script src="../scripts/flat-ui.js"></script>
    <script src="../scripts/application.js"></script>
    <script>
$(function(){
  $('h2').click(function(){
    //トグル
    $(this).toggleClass("ac");
    $(this).next(".card").slideToggle();
  });
});
    </script>
  </body>
  </html>