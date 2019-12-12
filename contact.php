<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>自販売機の原材料・甘味料チェッカー
    </title>
    <meta name="description" content="自動販売機に入っている商品の内容物を買う前に事前にチェック!アレルギーや苦手な甘味料などがある際に活用ください。(変更されている場合もあるので飲む前には念の為ご自身でご確認ください)" />
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120259490-2">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-120259490-2');
    </script>
  </head>
  <body>
    <!-- nav -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/service/vm/include/nav.php'); ?>
    <!-- /nav -->
    <div class="container">
      <h1 class="demo-section-title">お問い合わせページ</h1>
      <div class="row demo-row contact">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe4f548poDxghQZvKMO0vG93yGIttFet1ydDS61uW7qXyfXSg/viewform?embedded=true" width="640" height="659" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
      </div>
      <!-- /row -->
      <p>このサイトが行っているのはデータの収集のみです。商品についての質問は各メーカーにご連絡ください
      </p>
    </div>
    <!-- footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/service/vm/include/footer.php'); ?>
    <!-- /footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="http://vjs.zencdn.net/6.6.3/video.js">
    </script>
    <script src="scripts/flat-ui.js">
    </script>
    <script src="scripts/application.js">
    </script>
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
​
