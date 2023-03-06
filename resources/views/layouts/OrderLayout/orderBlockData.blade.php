<section class="dashboard">

    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>
    </div>
    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <a href="/order-events" class="back-button-link">
                    <i class="uil uil-backward"></i>
                </a>
                <span class="text">Order event {{$orderEvent['id']}}</span>
            </div>
            <div class="activity-data w-screen">
                <div class="box-info-block">
{{--                    {{dd($orderEvent)}}--}}
                    <div class="order-info-block">
                        <p class="event-data">ID: {{$orderEvent['id']}}</p>
                        <p class="event-data">Number: {{$orderEvent['order_number']}}</p>
                        <p class="event-data">Created: {{$orderEvent['created_at']}}</p>
                        <p class="event-data">Currency: {{$orderEvent['currency']}}</p>
                        <p class="event-data">Email: {{$orderEvent['email']}}</p>
                        <p class="event-data">Phone: {{$orderEvent['phone']}}</p>
                        <p class="event-data">Status: {{$orderEvent['financial_status']}}</p>
                        <p class="event-data">Discount: {{$orderEvent['total_discounts']}}</p>
                        <p class="event-data">Tax: {{$orderEvent['total_tax']}}</p>
                        <p class="event-data">Weight: {{$orderEvent['total_weight']}}</p>
                        <p class="event-data">Weight: {{$orderEvent['total_weight']}}</p>
                    </div>
{{--                    {{dd($orderEvent['line_items'])}}--}}
                    <h2 class="items-title">Purchased items</h2>
                    <div class="order-info-items">
                        <div class="line-items flex">
                            @foreach($orderEvent['line_items'] as $lineItem)
                                <div class="mobile-block-box">
                                    <div class="box-mobile p-4 rounded-lg shadow">
                                        <div class="box-mobile-info">
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    ID: {{ $lineItem['id'] }}
                                                </span>
                                            </div>
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    Name: {{ $lineItem['name'] }}
                                                </span>
                                            </div>
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    Weight: {{ $lineItem['grams'] }}
                                                </span>
                                            </div>
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    Price: {{ $lineItem['price'] }}
                                                </span>
                                            </div>
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    SKU: {{ $lineItem['sku'] }}
                                                </span>
                                            </div>
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    Discount: {{ $lineItem['total_discount'] }}
                                                </span>
                                            </div>
                                            <div class="box-type">
                                                <span class="table-item-text">
                                                    Vendor: {{ $lineItem['vendor'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
{{--                    <p class="event-data">{{dd($orderEvent['line_items'])}}</p>--}}
                </div>
            </div>
        </div>
    </div>

</section>
