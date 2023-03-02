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
        <div class="overview">
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">Dashboard</span>
            </div>
            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-browser"></i>
                    <span class="text">Total Events</span>
                    <span class="number"><?php echo e($totalEventsCount); ?></span>
                </div>
                <div class="box box2">
                    <i class="uil uil-process"></i>
                    <span class="text">Customers</span>
                    <span class="number"><?php echo e($totalCustomersCount); ?></span>
                </div>
                <div class="box box3">
                    <i class="uil uil-transaction"></i>
                    <span class="text">Orders</span>
                    <span class="number"><?php echo e($totalOrdersCount); ?></span>
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
                        <th class="title-text w-18 p-3 text-sm font-semibold tracking-wide text-left">Author</th>
                        <th class="title-text w-16 p-3 text-sm font-semibold tracking-wide text-left">Type</th>
                        <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                                text-sm font-semibold tracking-wide text-left">Action</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Message</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                    </tr>
                    </thead>
                    <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                    <?php $__currentLoopData = $lastEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="tr-elem">
                            <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            <?php if( $event['author'] === 'Shopify'): ?>
                                                <i class="uil uil-store"></i>
                                            <?php else: ?>
                                                <i class="uil uil-user"></i>
                                            <?php endif; ?>
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
                                        tracking-wider rounded-lg bg-opacity-50
                                        recent-type verb-<?php echo e($event['verb']); ?>">
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="table-mobile flex">
                    <?php $__currentLoopData = $lastEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                <?php if( $event['author'] === 'Shopify'): ?>
                                            <i class="uil uil-store"></i>
                                        <?php else: ?>
                                            <i class="uil uil-user"></i>
                                        <?php endif; ?>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/DashboardLayout/dashboardBlock.blade.php ENDPATH**/ ?>