<!DOCTYPE html>
<!-- manifest="/sangbok.manifest" -->
<!--[if IE 8]>         <html data-ng-app="sangbok" class="no-js lt-ie9" lang="en" manifest="/sangbok.manifest"> <![endif]-->
<!--[if gt IE 8]><!--> <html data-ng-app="sangbok" class="no-js" lang="en" manifest="/sangbok.manifest"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Sångboksappen</title>

  <base href="/">

  <link rel="stylesheet" href="css/normalize.css" />
  <!-- If you are using CSS version, add this -->
  <link rel="stylesheet" href="css/foundation.css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css" />

  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/angular-mocks.js"></script>
  <script src="js/angular-resource.min.js"></script>
  <script src="js/sangbok.js"></script>
</head>

<body>
  <nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Fysiks sångbok</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Meny</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right" ng-controller="OfflineCtrl">
      <li ng-show="status == ONLINE"><a ng-click="sync()">Gör tillgänglig offline</a></li>
      <li ng-show="status == SYNCING"><a href="">Laddar ner ({{progress | number:0}}%)</a></li>
      <li ng-show="status == SYNCED"><a href="">Tillgänglig offline</a></li>
      <li ng-show="status == OFFLINE"><a href="">Offlineläge</a></li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
    </ul>
  </section>
</nav>

  <div id="content" data-ng-view>

  </div>
  <script>
    document.write('<script src=' +
        ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
        '.js><\/script>');
  </script>
  <script type="text/javascript" src="js/foundation.min.js"></script>
  <script type="text/javascript">$(document).foundation();</script>
</body>
</html>