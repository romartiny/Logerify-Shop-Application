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
                <a @if($page == 'dashboardPage')class="link-current" @endif
                   href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name @if($page == 'dashboardPage')link-name-current @endif">Dashboard</span>
                </a>
            </li>
            <li>
                <a @if($page == 'adminPage')class="link-current" @endif
                    href="/admin-events">
                    <i class="uil uil-head-side-mask"></i>
                    <span class="link-name @if($page == 'adminPage')link-name-current @endif">Admin</span>
                </a>
            </li>
            <li>
                <a @if($page == 'orderPage')class="link-current" @endif
                    href="/order-events">
                    <i class="uil uil-transaction"></i>
                    <span class="link-name @if($page == 'orderPage')link-name-current @endif">Order</span>
                </a>
            </li>
            <li>
                <a @if($page == 'productPage')class="link-current" @endif
                    href="/product-events">
                    <i class="uil uil-package"></i>
                    <span class="link-name @if($page == 'productPage')link-name-current @endif">Product</span>
                </a>
            </li>
            <li>
                <a @if($page == 'paymentPage')class="link-current" @endif
                    href="/payment-events">
                    <i class="uil uil-money-bill-stack"></i>
                    <span class="link-name @if($page == 'paymentPage')link-name-current @endif">Payment</span>
                </a>
            </li>
            <li>
                <a @if($page == 'exportPage')class="link-current" @endif
                    href="/export">
                    <i class="uil uil-export"></i>
                    <span class="link-name @if($page == 'exportPage')link-name-current @endif">Export</span>
                </a>
            </li>
            <li>
                <a @if($page == 'infoPage')class="link-current" @endif
                    href="/info">
                    <i class="uil uil-info-circle"></i>
                    <span class="link-name @if($page == 'infoPage')link-name-current @endif">Info</span>
                </a>
            </li>
            <li>
                <a @if($page == 'helpPage')class="link-current" @endif
                    href="/help">
                    <i class="uil uil-question-circle"></i>
                    <span class="link-name @if($page == 'helpPage')link-name-current @endif">Help</span>
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
