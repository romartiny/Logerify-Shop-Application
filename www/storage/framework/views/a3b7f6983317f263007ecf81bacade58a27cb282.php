<nav class="nav">
    <div class="logo-name">
        <div class="logo-image">
            <img src="/assets/picture/logo.png" alt="logerify logo">
        </div>
        <span class="logo_name">Logerify</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li>
                <a <?php if($page == 'dashboardPage'): ?>class="link-current" <?php endif; ?>
                   href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name <?php if($page == 'dashboardPage'): ?>link-name-current <?php endif; ?>">Dashboard</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'adminPage'): ?>class="link-current" <?php endif; ?>
                    href="/admin-events">
                    <i class="uil uil-head-side-mask"></i>
                    <span class="link-name <?php if($page == 'adminPage'): ?>link-name-current <?php endif; ?>">Admin</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'orderPage'): ?>class="link-current" <?php endif; ?>
                    href="/order-events">
                    <i class="uil uil-transaction"></i>
                    <span class="link-name <?php if($page == 'orderPage'): ?>link-name-current <?php endif; ?>">Order</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'productPage'): ?>class="link-current" <?php endif; ?>
                    href="/product-events">
                    <i class="uil uil-package"></i>
                    <span class="link-name <?php if($page == 'productPage'): ?>link-name-current <?php endif; ?>">Product</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'paymentPage'): ?>class="link-current" <?php endif; ?>
                    href="/payment-events">
                    <i class="uil uil-money-bill-stack"></i>
                    <span class="link-name <?php if($page == 'paymentPage'): ?>link-name-current <?php endif; ?>">Payment</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'exportPage'): ?>class="link-current" <?php endif; ?>
                    href="/export">
                    <i class="uil uil-export"></i>
                    <span class="link-name <?php if($page == 'exportPage'): ?>link-name-current <?php endif; ?>">Export</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'infoPage'): ?>class="link-current" <?php endif; ?>
                    href="/info">
                    <i class="uil uil-info-circle"></i>
                    <span class="link-name <?php if($page == 'infoPage'): ?>link-name-current <?php endif; ?>">Info</span>
                </a>
            </li>
            <li>
                <a <?php if($page == 'helpPage'): ?>class="link-current" <?php endif; ?>
                    href="/help">
                    <i class="uil uil-question-circle"></i>
                    <span class="link-name <?php if($page == 'helpPage'): ?>link-name-current <?php endif; ?>">Help</span>
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
<?php /**PATH /Users/romartiny/Documents/GitHub/Logerify/logerify/resources/views/layouts/nav.blade.php ENDPATH**/ ?>