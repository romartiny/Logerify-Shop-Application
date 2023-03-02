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
                    <span class="text">Transaction Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clock-three"></i>
                        <span class="number">{{$todayProductEventsCount}}</span>
                        <span class="text">events for 24 hours</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-clock"></i>
                        <span class="number">{{$threeDayProductEventsCount}}</span>
                        <span class="text">events for 3 days</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-clock-five"></i>
                        <span class="number">{{$monthProductEventsCount}}</span>
                        <span class="text">events for 1 month</span>
                    </div>
                </div>
            </div>
            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Transaction Activity</span>
            </div>
            <div class="activity-data w-screen">
                <table class="w-full rounded-lg table-plus">
                    <thead class="thead-elem border-b-2">
                    <tr class="title-section">
                        <th class="title-text w-18 p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                        <th class="title-text w-24 p-3 text-sm font-semibold tracking-wide text-left">Test</th>
                        <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                                text-sm font-semibold tracking-wide text-left">Amount
                        </th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Payment Method</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Processed At</th>
                    </tr>
                    </thead>
                    <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                        @foreach($paymentEvents as $event)
                            <tr class="tr-elem">
                                <td class="p-3 text-sm text-gray-700">
                                    <span class="total-info text-sm text-gray-700">
                                        {{ $event['id'] }}
                                    </span>
                                </td>
                                <td class="p-3 text-sm text-gray-700">
                                    <span class="total-info text-sm text-gray-700">
                                        {{ $event['test'] === True ? 'True' : 'False' }}
                                    </span>
                                </td>
                                <td class="p-3 text-sm text-white-100 flex justify-around">
                                    <span class="p-1.5 text-xs flex flex-col font-medium uppercase text-center
                                    tracking-wider rounded-lg bg-opacity-50
                                    verb-{{ $event['amount'] > 0 ? 'plus' : 'minus' }}">
                                        {{ $event['amount'] . ' ' . $event['currency']}}
                                    </span>
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    {{ ucfirst($event['payment_method']) }}
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700 created-date">
                                    {{ $event['processed_at'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-mobile flex">
                    @foreach($paymentEvents as $event)
                        <div class="mobile-block-box">
                            <div class="box-mobile p-4 rounded-lg shadow">
                                <div class="box-mobile-info">
                                    <div class="box-type">
                                        <span class="table-mobile-text text-gray-500">
                                            ID {{ $event['id'] }}
                                        </span>
                                    </div>
                                    <span class="p-1.5 mx-1.5 text-xs font-medium uppercase text-center tracking-wider
                                    rounded-lg bg-opacity-50 verb-{{ $event['amount'] > 0 ? 'plus' : 'minus' }}">
                                        {{ $event['amount'] . ' ' . $event['currency']}}
                                    </span>
                                </div>
                                <div class="table-mobile-desc-fix">
                                    <div class="mobile-description-block w-160">
                                        <span class="table-mobile-text text-gray-500">
                                            {{ ucfirst($event['payment_method']) }}
                                        </span>
                                    </div>
                                    <span class="table-mobile-text text-gray-500 created-date">
                                        {{ $event['processed_at'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
