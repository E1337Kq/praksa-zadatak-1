<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" />
    @yield('head')
</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/">Codingo Internship 2020</a></h1>
        </div>        <div id="menu">
            <ul>
                <li class="{{Request::path()=== '/' ? 'current_page_item':''}}"><a href="https://www.linkedin.com/in/eldin-kurpejovi%C4%87-3444b9109/" accesskey="1" title="">About Me</a></li>
                <li class="{{Request::path()=== 'careers' ? 'current_page_item':''}}"><a href="/subscribers" accesskey="4" title="">Subscribers</a></li>
                <li class="{{Request::path()=== 'contact' ? 'current_page_item':''}}"><a href="https://github.com/E1337Kq/" accesskey="5" title="">Github</a></li>
            </ul>
        </div>
    </div>
</div>
@yield('header')
@yield('content')

</body>
</html>
