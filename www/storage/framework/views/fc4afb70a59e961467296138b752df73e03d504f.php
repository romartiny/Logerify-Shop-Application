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
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Orders Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clock-three"></i>
                        <span class="number"><?php echo e($todayOrdersCount); ?></span>
                        <span class="text">events for 24 hours</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-clock"></i>
                        <span class="number"><?php echo e($threeDayOrdersCount); ?></span>
                        <span class="text">events for 3 days</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-clock-five"></i>
                        <span class="number"><?php echo e($monthOrdersCount); ?></span>
                        <span class="text">events for 1 month</span>
                    </div>
                </div>
            </div>
            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Orders Events</span>
            </div>
            <div class="activity-data w-screen">
                <table class="w-full rounded-lg table-plus">
                    <thead class="thead-elem border-b-2">
                    <tr class="title-section">
                        <th class="title-text w-38 p-3 text-sm font-semibold tracking-wide text-left">
                            Email
                        </th>
                        <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                        text-sm font-semibold tracking-wide text-left">
                            Status
                        </th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Payment Amount</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Info</th>
                    </tr>
                    </thead>

                    <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                    <?php $__currentLoopData = $orderEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="tr-elem">
                            <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            <i class="uil uil-envelope"></i>
                                            <?php echo e($event['contact_email'] ? $event['contact_email'] : 'Hidden'); ?>

                                        </span>
                            </td>
                            <td class="p-3 text-sm text-gray-700 flex justify-around">
                                        <span class="total-info text-sm text-gray-700 p-1.5 text-xs
                                        flex-col font-medium uppercase text-center
                                        tracking-wider rounded-lg bg-opacity-50
                                        recent-type
                                        status-<?php echo e($event['financial_status']); ?>">
                                            <?php echo e(ucfirst($event['financial_status'])); ?>

                                        </span>
                            </td>
                            <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            <?php echo e($event['current_subtotal_price'] . ' ' . $event['currency']); ?>

                                        </span>
                            </td>
                            <td class="total-info p-3 text-sm text-gray-700 created-date">
                                <?php echo e($event['created_at']); ?>

                            </td>
                            <td class="total-info p-3 text-sm text-gray-700">
                                <a href="" class="table-mobile-view text-blue-500 font-bold">
                                    View
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="table-mobile flex">
                    <?php $__currentLoopData = $orderEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mobile-block-box">
                            <div class="box-mobile p-4 rounded-lg shadow">
                                <div class="box-mobile-info">
                                    <div class="box-type">
                                                <span class="table-mobile-text text-gray-500">
                                            <?php echo e($event['contact_email']); ?>

                                        </span>
                                    </div>
                                    <span class="table-mobile-text text-sm text-gray-700">
                                                <?php echo e($event['created_at']); ?>

                                            </span>
                                </div>
                                <div class="table-mobile-desc-fix">
                                    <div class="mobile-description-block w-160">
                                            <span class="table-mobile-text p-1.5 text-xs font-medium uppercase
                                            text-center tracking-wider rounded-lg bg-opacity-50
                                            verb-create">
                                                <?php echo e($event['current_subtotal_price'] . ' ' . $event['currency']); ?>

                                            </span>
                                    </div>
                                    <span class="table-mobile-text text-gray-500">
                                                <a href="" class="table-mobile-view text-blue-500 font-bold">
                                                    View
                                                </a>
                                        </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/OrderLayout/orderBlock.blade.php ENDPATH**/ ?>
