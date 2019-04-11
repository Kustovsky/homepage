<?php
$array = glob('*', GLOB_ONLYDIR);
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href=".css/main.css">
    <link rel="shortcut icon" href=".pics/desktop-img.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Localhost</title>
</head>
<body id="body" class="bg-dark">
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav mr-auto">
        <li>
            <form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
                <input name="sitesearch" type="hidden" value="">
                <input autocomplete="on" class="form-control search" name="q"required="required" placeholder="Погуглить" type="text">
            </form>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="https://vk.com">
            <img class="vk" src=".pics/vk_dark.png">
            <span>Вконтакте</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://reddit.com"><img class="reddit" src=".pics/reddit_dark.png">
                <span>Reddit</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"></a>
        </li>
    </ul>
        <div id="MyClockDisplay" class="text-white" onload="showTime()"></div>
    <form class="form-inline my-2 my-lg-0">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="switch1">
            <button type="button" class="btn btn-warning" onclick="LightsOn()">Сменить тему</button>
        </div>
    </form>
</nav>
<div class="container"><br>
<?php
foreach ($array as $value => $item){
    echo '
    <div id="navbar" class="contentCard card text-white bg-secondary">
    <a href="/'.$item.'" class="text-white"><div class="card-body">
    <h4 class="card-title">'.$item.'</h4>
    </div></a>
    </div>

';
}
?>
</div>
</body>
<footer>
    <script src=".script/main.js"></script>
</footer>
</html>
