













<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
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
        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-head-side-mask"></i>
                        <span class="link-name">Admin Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-transaction"></i>
                        <span class="link-name">Order Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-package"></i>
                        <span class="link-name">Product Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-money-bill-stack"></i>
                        <span class="link-name">Payment Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-percentage"></i>
                        <span class="link-name">Discount Info</span>
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
                <input type="text" placeholder="Search here...">
            </div>
            <span class="shop-name"><?php echo e($shopDomain ?? Auth::user()->name); ?></span>
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
                        <span class="number">24,295</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-process"></i>
                        <span class="text">Transactions</span>
                        <span class="number">1,260</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-transaction"></i>
                        <span class="text">Orders</span>
                        <span class="number">258</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-chart"></i>
                    <span class="text">Recent Activity</span>
                </div>
                <div class="activity-data w-screen">
                    <table class="w-full rounded-lg table-plus">
                        <thead class="thead-elem border-b-2">
                            <tr class="title-section">
                                <th class="title-text w-16 p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                                <th class="title-text w-16 p-3 text-sm font-semibold tracking-wide text-left">Type</th>
                                <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Message</th>
                                <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                                <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Info</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="tr-elem">
                                <td class="p-3 text-sm text-gray-700">
                                    <a href="#" class="font-bold text-blue-500">213</a>
                                </td>
                                <td class="p-3 text-sm text-gray-700">
                                    <span class="recent-type p-1.5 text-xs font-medium uppercase tracking-wider
                                    rounded-lg bg-opacity-50">
                                        Product
                                    </span>
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    Updating Product Info
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    17.09.2022
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    <a href="#">
                                        <i class="uil uil-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="tr-elem">
                                <td class="p-3 text-sm text-gray-700">
                                    <a href="#" class="font-bold text-blue-500">213</a>
                                </td>
                                <td class="p-3 text-sm text-gray-700">
                                    <span class="recent-type p-1.5 text-xs font-medium uppercase tracking-wider
                                    rounded-lg bg-opacity-50">
                                        Product
                                    </span>
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    Updating Product Info
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    17.09.2022
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    <a href="#">
                                        <i class="uil uil-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-mobile flex">
                        <div class="mobile-block-box">
                            <div class="box-mobile p-4 rounded-lg shadow">
                                <div class="box-mobile-info">
                                <span class="recent-type p-1.5 text-xs font-medium uppercase tracking-wider
                                    rounded-lg bg-opacity-50">
                                    Product
                                </span>
                                    <span class="table-mobile-text text-sm text-gray-700">21/11/2022</span>
                                </div>
                                <div class="table-mobile-desc">
                                    <span class="table-mobile-text text-gray-500">Product created successful</span>
                                    <a href="#" class="table-mobile-view text-blue-500 font-bold">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>
</body>

</html>
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/DashboardLayout.blade.php ENDPATH**/ ?>
