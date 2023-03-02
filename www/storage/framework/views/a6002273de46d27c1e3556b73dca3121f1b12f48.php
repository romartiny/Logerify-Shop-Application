<div class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <span class="shop-name"><?php echo e($shopDomain ?? Auth::user()->name); ?></span>
    </div>

    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Shop Information</span>
            </div>
            <div class="activity-data shop-info-data w-screen">
                <div class="info-data-box">
                    <div class="box-info-description">
                        <h1 class="box-title"><?php echo e(ucfirst($infoEvent['name'])); ?> Info</h1>
                        <div class="box-description">
                            <div class="box-description-info">
                                <p class="box-text">Shop name: <?php echo e($infoEvent['name']); ?></p>
                                <p class="box-text">Current plan: <?php echo e($infoEvent['plan_display_name']); ?></p>
                                <p class="box-text">Shopify domain: <?php echo e($infoEvent['myshopify_domain']); ?></p>
                                <p class="box-text">Shop owner: <?php echo e($infoEvent['shop_owner']); ?></p>
                                <p class="box-text">Email: <?php echo e($infoEvent['email']); ?></p>
                                <p class="box-text">Country: <?php echo e($infoEvent['country']); ?></p>
                                <p class="box-text">Province: <?php echo e($infoEvent['province']); ?></p>
                                <p class="box-text">Currency: <?php echo e($infoEvent['currency']); ?></p>
                                <p class="box-text">Created: <?php echo e($infoEvent['created_at']); ?></p>
                                <p class="box-text">Last update: <?php echo e($infoEvent['updated_at']); ?></p>
                                <p class="box-text">Country name: <?php echo e($infoEvent['country_name']); ?></p>
                            </div>

                        </div>
                    </div>
                    <div class="box-picture">
                        <img class="box-picture-stats" src="/assets/picture/stats.png" alt="stats picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/InfoLayout/infoBlock.blade.php ENDPATH**/ ?>