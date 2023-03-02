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
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/DashboardLayout/topBar.blade.php ENDPATH**/ ?>
