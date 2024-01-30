<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link href='https://fonts.googleapis.com/css?family=Chivo:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yeseva+One&subset=cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/pigment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <!--[if lt IE 9]>
      <script src="/js/html5shiv/html5shiv.min.js"></script>
      <![endif]-->
    <title>Программист</title>
  </head>

  <body>
    <div id="container">
      <div class="inner">
        <header>
          <div class="photo"></div>
          <h1>Курочкин Константин Николаевич</h1>
          <h2>Программист</h2>
          <h2>+7(916)406-19-19, <a href="mailto:actam@ya.ru">actam@ya.ru</a></h2>
        </header>

        <hr>
        <section id="exp">
          <img alt="factorio current time played over 1900+ hours" class="img_center" height="163"
               src="i/factorio-steam.jpg" width="163"/>
        </section>
        <footer>
          <?php $data = shell_exec('uptime');
          $first = strpos($data,'up');
          $data = substr($data, $first);
          $first = strpos($data, ',');
          $data = str_replace('up','Server uptime: ', $data);
          echo $data;?>
        </footer>
      </div> 
    </div>
  </body>
</html>
