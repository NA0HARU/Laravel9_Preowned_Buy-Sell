<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/admin/assets/images/favicon.png">
    <title>@yield("title")</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets')}}/admin/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets')}}/admin/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield("head")
</head>
<body class="fix-header card-no-border fix-sidebar">
@include("admin.header")


@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')

@include("admin.footer")
@yield('foot')

</body>
</html>
