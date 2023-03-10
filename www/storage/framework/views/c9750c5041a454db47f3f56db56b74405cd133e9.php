













<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="/assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <title>Logerify | Admin Events</title>
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
                <a class="link-current" href="/admin-events">
                    <i class="uil uil-head-side-mask"></i>
                    <span class="link-name link-name-current">Admins</span>
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
                <label>
                    <input type="text" class="search-input" id="inputText" onkeyup="searchInput()"
                           placeholder="Search here...">
                </label>
            </div>
                <span class="shop-name"><?php echo e($shopDomain ?? Auth::user()->name); ?></span>
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-chart"></i>
                    <span class="text">Admins Activity</span>
                </div>
                <div class="description">
                    <span class="text"><span class="main-text">Admins Events</span> - receive any data on the actions of store administrators</span>
                </div>
                <div class="activity-data w-screen">
                    <table class="w-full rounded-lg table-plus">
                        <thead class="thead-elem border-b-2">
                            <tr class="title-section">
                                <th class="title-text w-18 p-3 text-sm font-semibold tracking-wide text-left">Author</th>
                                <th class="title-text w-16 p-3 text-sm font-semibold tracking-wide text-left">Type</th>
                                <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                                text-sm font-semibold tracking-wide text-left">Action</th>
                                <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Message</th>
                                <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                        <?php $__currentLoopData = $allEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($event['author'] !== 'Shopify' && $event['author'] !== 'Online Store'): ?>
                                <tr class="tr-elem">
                                    <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            <?php echo e($event['author']); ?>

                                        </span>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            <?php echo e($event['subject_type']); ?>

                                        </span>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 flex justify-around">
                                        <span class="p-1.5 text-xs flex flex-col font-medium uppercase text-center
                                        tracking-wider rounded-lg bg-opacity-50 recent-type verb-<?php echo e($event['verb']); ?>">
                                            <?php echo e($event['verb']); ?>

                                        </span>
                                    </td>
                                    <td class="total-info p-3 text-sm text-gray-700">
                                        <?php echo e($event['description']); ?>

                                    </td>
                                    <td class="total-info p-3 text-sm text-gray-700 created-date">
                                        <?php echo e($event['created_at']); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="table-mobile flex">
                    <?php $__currentLoopData = $allEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($event['author'] !== 'Shopify' && $event['author'] !== 'Online Store'): ?>
                                <div class="mobile-block-box">
                                    <div class="box-mobile p-4 rounded-lg shadow">
                                        <div class="box-mobile-info">
                                            <div class="box-type">
                                                <span class="table-mobile-text text-gray-500">
                                            <?php echo e($event['subject_type']); ?>

                                        </span>
                                                <span class="p-1.5 mx-1.5 text-xs font-medium uppercase text-center tracking-wider
                                        rounded-lg bg-opacity-50 recent-type verb-<?php echo e($event['verb']); ?>">
                                            <?php echo e($event['verb']); ?>

                                        </span>
                                            </div>
                                            <span class="table-mobile-text text-sm text-gray-700">
                                                <?php echo e($event['author']); ?>

                                            </span>
                                        </div>
                                        <div class="table-mobile-desc">
                                            <div class="mobile-description-block w-160">
                                                <span class="table-mobile-text table-mobile-description text-gray-500">
                                                <?php echo e($event['description']); ?>

                                            </span>
                                            </div>
                                            <span class="table-mobile-text text-sm text-gray-700 created-date">
                                                <?php echo e($event['created_at']); ?>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/adminEvents.blade.php ENDPATH**/ ?>
