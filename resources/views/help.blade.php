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
    <title>Logerify | Help</title>
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
                    <span class="link-name">Admins</span>
                </a>
            </li>
            <li>
                <a href="/order-events">
                    <i class="uil uil-transaction"></i>
                    <span class="link-name">Orders</span>
                </a>
            </li>
            <li>
                <a href="/product-events">
                    <i class="uil uil-package"></i>
                    <span class="link-name">Products</span>
                </a>
            </li>
            <li>
                <a href="/transaction-events">
                    <i class="uil uil-money-bill-stack"></i>
                    <span class="link-name">Transactions</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-percentage"></i>
                    <span class="link-name">Discounts</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-export"></i>
                    <span class="link-name">Export</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-info-circle"></i>
                    <span class="link-name">Info</span>
                </a>
            </li>
            <li>
                <a class="link-current" href="#">
                    <i class="uil uil-question-circle"></i>
                    <span class="link-name link-name-current">Help</span>
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
                <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>
        </div>
        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-question-circle"></i>
                    <span class="text">Help</span>
                </div>
                <div class="flex justify-around items-start">
                    <div class="help-information-box">
                            <div class="container">
                                <h1 class="text-3xl font-semibold text-center capitalize lg:text-4xl text-info">explore our <br> awesome <span class="text-blue-500">Features</span></h1>

                                <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
                                    <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </span>
                                        <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Export Data</h1>
                                        <p class="text-gray-500 dark:text-gray-300">
                                            You can export your data from the store to a convenient text option.
                                            Date is exported in *csv extension for easy data modification.
                                            You are solely responsible for data security.
                                        </p>
                                    </div>

                                    <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </span>
                                        <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Simple & clean designs</h1>
                                        <p class="text-gray-500 dark:text-gray-300">
                                            Convenient and nice design that you can use on your computer and phone.
                                            Dark theme and responsive design make our app more user friendly.
                                        </p>
                                    </div>

                                    <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </span>
                                        <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Data Protection</h1>

                                        <p class="text-gray-500 dark:text-gray-300">
                                            We do not store or use your data.
                                            They are stored only in your Shopify store itself and are completely protected from external access.
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container px-6 py-12 mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl text-center text-info">Frequently asked questions</h1>

                <div class="grid grid-cols-1 gap-8 mt-8 lg:mt-16 md:grid-cols-2 xl:grid-cols-3">
                    <div>
                        <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-gray-700 text-info">Where Logerify take data?</h1>

                            <p class="mt-2 text-sm text-info">
                                The app takes data directly from your store and is not stored or used anywhere else. We guarantee that your data is safe.
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-info">The app is free?</h1>

                            <p class="mt-2 text-sm text-info">
                                The app is completely free. You can connect it to different stores and use it however you want.
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-info">What can I get from this application?</h1>

                            <p class="mt-2 text-sm text-info">
                                With this app you can get all the activity in your store. You will be able to monitor the actions of administrators and keep reports on the store in more detail.
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-info">Who is the app for?</h1>

                            <p class="mt-2 text-sm text-info">
                                The app is designed for store administrators to keep track of information.
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-info">Is the information in Logerify correct?</h1>

                            <p class="mt-2 text-sm text-info">
                                The information in the app is fully consistent with your store. You can check this.
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-info">Is it possible to delete the application?</h1>

                            <p class="mt-2 text-sm text-info">
                                Of course, you can delete our application at any time. The next time you install it, the data will come back to you
                            </p>
                        </div>
                    </div>
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
