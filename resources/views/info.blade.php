{{--@extends('shopify-app::layouts.default')--}}

{{--@section('content')--}}
{{--    <!-- You are: (shop domain name) -->--}}
{{--    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
{{--    @parent--}}

{{--    <script>--}}
{{--        actions.TitleBar.create(app, { title: 'Hiiiii' });--}}
{{--    </script>--}}
{{--@endsection--}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="/assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <title>Logerify | Information</title>
</head>

<body>
<div class="loader"></div>
<nav>

    <div class="logo-name">
        <div class="logo-image">
            <img src="/assets/picture/logo.png" alt="logerify logo">
        </div>
        <span class="logo_name">Logerify</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li>
                <a class="link-current" href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name link-name-current">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin-events">
                    <i class="uil uil-head-side-mask"></i>
                    <span class="link-name">Admin</span>
                </a>
            </li>
            <li>
                <a href="/order-events">
                    <i class="uil uil-transaction"></i>
                    <span class="link-name">Order</span>
                </a>
            </li>
            <li>
                <a href="/product-events">
                    <i class="uil uil-package"></i>
                    <span class="link-name">Product</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-money-bill-stack"></i>
                    <span class="link-name">Payment</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="uil uil-percentage"></i>
                    <span class="link-name">Discount</span>
                </a>
            </li>
            <li>
                <a href="/export">
                    <i class="uil uil-export"></i>
                    <span class="link-name">Export</span>
                </a>
            </li>
            <li>
                <a href="/help">
                    <i class="uil uil-question-circle"></i>
                    <span class="link-name">Help</span>
                </a>
            </li>
        </ul>
        <ul class="logout-mod">
            <li class="mode">
                <a class="dark-mode" href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>

</nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <label>
                    <input type="text" class="search-input" id="inputText" onkeyup="searchInput()"
                           placeholder="Search here...">
                </label>
            </div>
                <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-browser"></i>
                        <span class="text">Total Events</span>
                        <span class="number">{{ $totalEvents }}</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-process"></i>
                        <span class="text">Customers</span>
                        <span class="number">{{ $totalCustomers }}</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-transaction"></i>
                        <span class="text">Orders</span>
                        <span class="number">{{ $totalOrders }}</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-chart"></i>
                    <span class="text">Shop Information</span>
                </div>
                <div class="activity-data w-screen">
                    {{ dd($info) }}
                </div>
            </div>
        </div>
    </section>
    <script src="/assets/js/loader.js"></script>
    <script src="/assets/js/onloadScripts.js"></script>
    <script src="/assets/js/searchTable.js"></script>
    <script src="/assets/js/navBar.js"></script>
    <script src="/assets/js/darkMode.js"></script>
</body>

</html>
