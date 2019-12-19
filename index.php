<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
  <title>自販売機の原材料・甘味料チェッカー</title>
  <meta property="og:title" content="自販売機の原材料・甘味料チェッカー" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://mofolio.starfree.jp/service/vm/index.php" />
  <!-- <meta property="og:image" content="https://abrd.site/service/vm/docs/assets/images/vm/top.png" /> -->
  <meta property="og:site_name" content="自販売機の原材料・甘味料チェッカー" />
  <meta property="og:description" content="自動販売機に入っている商品の原材料を買う前にチェック。アレルギーや苦手な甘味料などがある際に活用ください。" />
  <!-- ※ Twitter共通設定 -->
  <meta name="twitter:card" content="summary" />
  <meta name="author" content="">
    <meta charset="utf-8">

    <meta name="description" content="自動販売機に入っている商品の原材料を買う前にチェック。アレルギーや苦手な甘味料などがある際に活用ください。(順次更新)"/>

    <meta name="viewport" content="width=device-width">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link href="css/additional.css" rel="stylesheet">


    <link rel="shortcut icon" href="favicon.ico">

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
      <div class="demo-headline">
        <h1 class="demo-logo">
          自販売機の原材料・甘味料チェッカー
          <small>自動販売機に入っている飲料の原材料を事前にチェックすることができます。アレルギーや苦手な甘味料などがある際に活用ください。</small>
        </h1>
          <img src="images/vm/top.png" width="300">
      </div> <!-- /demo-headline -->

      <h2 class="demo-section-title">メーカーから選ぶ</h2>

      <div class="row demo-row">
        <div class="col-12 mx-auto">
          <a href="materials/cocacola.php" class="btn btn-block btn-lg btn-primary mx-auto">コカ・コーラ</a>
          <a href="materials/kirin.php" class="btn btn-block btn-lg btn-primary mx-auto">キリン</a>
          <a href="materials/suntory.php" class="btn btn-block btn-lg btn-primary mx-auto">サントリー</a>
          <a href="materials/dydo.php" class="btn btn-block btn-lg btn-primary mx-auto">ダイドー</a>
          <!-- <a href="materials/acure.php" class="btn btn-block btn-lg btn-primary mx-auto">アキュア</a> -->
      <p>この内容はデータ取得時のものです。変更されている場合もありますので、飲む前には念の為ご自身でご確認ください</p>
        </div>

      </div> <!-- /row -->
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
    <script src="scripts/flat-ui.js"></script>
    <script src="scripts/application.js"></script>

  </body>
</html>
