<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>大愚律税财咨询系统</title>
        <link rel="stylesheet" href="/css/jquery.mobile-1.4.5.min.css">
        <script src="/js/jquery-2.1.3.min.js"></script>
        <script src="/js/jquery.mobile-1.4.5.min.js"></script>
    </head>

    <body>
        <div data-role="page">
            <div data-role="header" style="background-color:teal;color:white">
                <h2>大愚律税财咨询系统</h2>  
                <a href="#menu" class="jqm-navmenu-link ui-nodisc-icon ui-alt-icon ui-btn-right ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all" data-role="button" role="button">Menu</a>              
            </div>
            
            <div role="main" class="ui-content">
                @yield('content')
            </div>

            <div data-role="panel" id="menu" data-position="right" data-display="overlay" data-theme="a" style="width:50%;min-height:92%;top:2.7em;">
                <ul data-role="listview">
                    <li><a href="about">关于大愚</a></li>
                    <li><a href="services">我们的服务</a></li>
                    <li><a href="contact">联系我们</a></li>
                    <li><a href="/auth/login">登 录</a></li>
                    <li><a href="/auth/register">注 册</a></li>
                </ul>
            </div>
        </div>   
    </body>
</html>