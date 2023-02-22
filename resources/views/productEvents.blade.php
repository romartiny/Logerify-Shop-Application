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
    <title>Logerify | Product Events</title>
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
                <a href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
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
                <a class="link-current" href="/product-events">
                    <i class="uil uil-package"></i>
                    <span class="link-name link-name-current">Product</span>
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

        <div class="activity">

            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Admins Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clock-three"></i>
{{--                        <span class="number">{{$todayAdminEvents}}</span>--}}
                        <span class="text">events for 24 hours</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-clock"></i>
{{--                        <span class="number">{{$threeDayAdminEvents}}</span>--}}
                        <span class="text">events for 3 days</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-clock-five"></i>
{{--                        <span class="number">{{$monthAdminEvents}}</span>--}}
                        <span class="text">events for 1 month</span>
                    </div>
                </div>
            </div>

            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Product Activity</span>
            </div>

            <div class="description">
                <span class="text"><span class="main-text">Product Events</span> - all actions and manipulations related to the goods of the store</span>
            </div>

            <div class="activity-data w-screen">
                <table class="w-full rounded-lg table-plus">
                    <thead class="thead-elem border-b-2">
                    <tr class="title-section">
                        <th class="title-text w-18 p-3 text-sm font-semibold tracking-wide text-left">Author</th>
                        <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                                text-sm font-semibold tracking-wide text-left">Action
                        </th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Message</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                    </tr>
                    </thead>
                    <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                    @foreach($productEvents as $event)
                        @if($event['subject_type'] == 'Product')
                            <tr class="tr-elem">
                                <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            @if( $event['author'] === 'Shopify')
                                                <i class="uil uil-store"></i>
                                            @else
                                                <i class="uil uil-user"></i>
                                            @endif
                                            {{ $event['author'] }}
                                        </span>
                                </td>
                                <td class="p-3 text-sm text-gray-700 flex justify-around">
                                        <span class="p-1.5 text-xs flex flex-col font-medium uppercase text-center
                                        tracking-wider rounded-lg bg-opacity-50 recent-type verb-{{$event['verb']}}">
                                            {{ $event['verb'] }}
                                        </span>
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    {{ $event['description'] }}
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700 created-date">
                                    {{ $event['created_at'] }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

                <div class="table-mobile flex">
                    @foreach($productEvents as $event)
                        @if($event['subject_type'] == 'Product')
                            <div class="mobile-block-box">
                                <div class="box-mobile p-4 rounded-lg shadow">
                                    <div class="box-mobile-info">
                                        <div class="box-type">
                                                <span class="table-mobile-text text-gray-500">
                                            {{ $event['subject_type'] }}
                                        </span>
                                            <span class="p-1.5 mx-1.5 text-xs font-medium uppercase text-center tracking-wider
                                        rounded-lg bg-opacity-50 recent-type verb-{{$event['verb']}}">
                                            {{ $event['verb'] }}
                                        </span>
                                        </div>
                                        <span class="table-mobile-text text-sm text-gray-700">
                                                @if( $event['author'] === 'Shopify')
                                                <i class="uil uil-store"></i>
                                            @else
                                                <i class="uil uil-user"></i>
                                            @endif
                                            {{ $event['author'] }}
                                            </span>
                                    </div>
                                    <div class="table-mobile-desc">
                                        <div class="mobile-description-block w-160">
                                                <span class="table-mobile-text text-gray-500">
                                                {{ $event['description'] }}
                                            </span>
                                        </div>
                                        <span class="table-mobile-text text-sm text-gray-700 created-date">
                                                {{ $event['created_at'] }}
                                            </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<script src="/assets/js/onloadScripts.js"></script>
<script src="/assets/js/searchTable.js"></script>
<script src="/assets/js/navBar.js"></script>
<script src="/assets/js/darkMode.js"></script>
<script src="/assets/js/loader.js"></script>
</body>

</html>
