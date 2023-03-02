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
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/DashboardLayout/blocks.blade.php ENDPATH**/ ?>
