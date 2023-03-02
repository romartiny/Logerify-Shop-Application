<?php $__env->startSection('styles'); ?>
    <?php echo $__env->make('shopify-app::partials.laravel_skeleton_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel &amp; Shopify
            </div>

            <p>Welcome to your Shopify App powered by Laravel.</p>
            <p>&nbsp;</p>
            <p><?php echo e($shop->name); ?></p>
            <p>&nbsp;</p>

            <div class="links">
                <a href="https://github.com/osiset/laravel-shopify" target="_blank">Package</a>
                <a href="https://laravel.com" target="_blank">Laravel</a>
                <a href="https://github.com/osiset/laravel-shopify" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

    <?php if(config('shopify-app.appbridge_enabled')): ?>
        <script>
            actions.TitleBar.create(app, { title: 'Welcome' });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shopify-app::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/vendor/osiset/laravel-shopify/src/resources/views/home/index.blade.php ENDPATH**/ ?>