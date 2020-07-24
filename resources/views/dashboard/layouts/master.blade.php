<!DOCTYPE html>
<html lang="en" dir="rtl">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/fav.jpeg')}}">
	<title>@yield('title')</title>
	@include('dashboard.layouts.styles')
</head>
<body class="hold-transition skin-green sidebar-mini">
    @include('dashboard.layouts.header')
    @include('dashboard.layouts.sidebar')
    <div class="wrapper">
        @include('dashboard.layouts.alert')
        @yield('content')
    </div>
    @include('dashboard.layouts.footer')
    @include('dashboard.layouts.scripts')
    @yield('modals')
</body>
</html>
