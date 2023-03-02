<div class="dashboard">
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
                <span class="text">Shop Information</span>
            </div>
            <div class="activity-data shop-info-data w-screen">
                
                <div class="info-data-box">

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/infoBlock.blade.php ENDPATH**/ ?>