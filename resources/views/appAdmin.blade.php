<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Lynx Admin Tools</title>
  <link href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css" rel="stylesheet">
  <link href="http://purecss.io/css/layouts/side-menu.css" rel="stylesheet">
  <link href="{{asset('/css/admin/app.css')}}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/riot/2.2.4/riot+compiler.min.js"></script>
</head>
<body>
<div id="layout">
	<!-- Menu toggle -->
	<a href="#menu" id="menuLink" class="menu-link">
		<!-- Hamburger icon -->
		<span></span>
	</a>

	<div id="menu">
    <div class="pure-menu">
      <a class="pure-menu-heading" href="#">Lynx</a>
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">DashBoard</a></li>
        <li class="pure-menu-item"><a href="/ln-admin/articles/" class="pure-menu-link">Article</a></li>

        <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
            <a href="#" class="pure-menu-link">Media</a>
        </li>

        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tag</a></li>
      </ul>
    </div>
	</div>

	<div id="main">
    <div id="content">
      @yield('content')
    </div>
	</div>
</div>
</body>
</html>
