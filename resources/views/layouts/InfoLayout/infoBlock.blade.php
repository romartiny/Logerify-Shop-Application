<div class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>
    </div>
    {{--                                    {{ dd($InfoLayout) }}--}}
    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Shop Information</span>
            </div>
            <div class="activity-data shop-info-data w-screen">
                <div class="info-data-box">
                    <div class="box-info-description">
                        <h1 class="box-title">Shop soplify.myshopify.com</h1>
                        <div class="box-description">
                            <div class="box-description-info">
                                <p class="box-text">Shop name:</p>
                                <span class="box-text">Shop soplify.myshopify.com</span>
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
