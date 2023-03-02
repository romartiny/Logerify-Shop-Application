<div class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
{{--        <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>--}}
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
                        <h1 class="box-title">{{ucfirst($infoEvent['name'])}} Information</h1>
                        <div class="box-description">
                            <div class="box-description-info">
                                <p class="box-text">Shop name: {{ucfirst($infoEvent['name'])}}</p>
                                <p class="box-text">Current plan: {{$infoEvent['plan_display_name']}}</p>
                                <p class="box-text">Shopify domain: {{$infoEvent['myshopify_domain']}}</p>
                                <p class="box-text">Shop owner: {{$infoEvent['shop_owner']}}</p>
                                <p class="box-text">Email: {{$infoEvent['email']}}</p>
                                <p class="box-text">Country: {{$infoEvent['country']}}</p>
                                <p class="box-text">Province: {{$infoEvent['province']}}</p>
                                <p class="box-text">Currency: {{$infoEvent['currency']}}</p>
                                <p class="box-text">Created: {{$infoEvent['created_at']}}</p>
                                <p class="box-text">Last update: {{$infoEvent['updated_at']}}</p>
                                <p class="box-text">Country name: {{$infoEvent['country_name']}}</p>
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
