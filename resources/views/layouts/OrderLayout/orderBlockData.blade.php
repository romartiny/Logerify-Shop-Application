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
        <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>
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
{{--                        <span class="number">{{$todayOrdersCount}}</span>--}}
                        <span class="text">events for 24 hours</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-clock"></i>
{{--                        <span class="number">{{$threeDayOrdersCount}}</span>--}}
                        <span class="text">events for 3 days</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-clock-five"></i>
{{--                        <span class="number">{{$monthOrdersCount}}</span>--}}
                        <span class="text">events for 1 month</span>
                    </div>
                </div>
            </div>
            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Orders Events</span>
            </div>
            <div class="activity-data w-screen">
                <h1>{{$id}}</h1>
            </div>
        </div>
    </div>
</section>
