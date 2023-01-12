{{--@extends('shopify-app::layouts.default')--}}

{{--@section('content')--}}
{{--    <!-- You are: (shop domain name) -->--}}
{{--    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
{{--    @parent--}}

{{--    <script>--}}
{{--        actions.TitleBar.create(app, { title: 'Welcome' });--}}
{{--    </script>--}}
{{--@endsection--}}
{{--<!doctype html>--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" >
    <title>Logerify | Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="/assets/picture/logo.png" alt="logerify logo">
            </div>
            <span class="logo_name">Logerify</span>
        </div>
    </nav>
</body>

</html>
