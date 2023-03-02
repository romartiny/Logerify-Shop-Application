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
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/DashboardLayout/table.blade.php ENDPATH**/ ?>
