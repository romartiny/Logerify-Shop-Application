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
            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Transaction Activity</span>
            </div>
            <div class="activity-data w-screen">
                <table class="w-full rounded-lg table-plus">
                    <thead class="thead-elem border-b-2">
                    <tr class="title-section">
                        <th class="title-text w-18 p-3 text-sm font-semibold tracking-wide text-left">Author</th>
                        <th class="title-text w-16 p-3 text-sm font-semibold tracking-wide text-left">Type</th>
                        <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                                text-sm font-semibold tracking-wide text-left">Action</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Message</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                    </tr>
                    </thead>
                    {{ dd($transactionEvents) }}
                    <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                    {{--                        @foreach($productEvents as $event)--}}
                    {{--                            @if($event['subject_type'] == 'Product')--}}
                    {{--                                <tr class="tr-elem">--}}
                    {{--                                    <td class="p-3 text-sm text-gray-700">--}}
                    {{--                                        <span class="total-InfoLayout text-sm text-gray-700">--}}
                    {{--                                            {{ $event['author'] }}--}}
                    {{--                                        </span>--}}
                    {{--                                    </td>--}}
                    {{--                                    <td class="p-3 text-sm text-gray-700">--}}
                    {{--                                        <span class="total-InfoLayout text-sm text-gray-700">--}}
                    {{--                                            {{ $event['subject_type'] }}--}}
                    {{--                                        </span>--}}
                    {{--                                    </td>--}}
                    {{--                                    <td class="p-3 text-sm text-gray-700 flex justify-around">--}}
                    {{--                                        <span class="p-1.5 text-xs flex flex-col font-medium uppercase text-center--}}
                    {{--                                        tracking-wider rounded-lg bg-opacity-50 recent-type verb-{{$event['verb']}}">--}}
                    {{--                                            {{ $event['verb'] }}--}}
                    {{--                                        </span>--}}
                    {{--                                    </td>--}}
                    {{--                                    <td class="total-InfoLayout p-3 text-sm text-gray-700">--}}
                    {{--                                        {{ $event['description'] }}--}}
                    {{--                                    </td>--}}
                    {{--                                    <td class="total-InfoLayout p-3 text-sm text-gray-700 created-date">--}}
                    {{--                                        {{ $event['created_at'] }}--}}
                    {{--                                    </td>--}}
                    {{--                                </tr>--}}
                    {{--                            @endif--}}
                    {{--                        @endforeach--}}
                    </tbody>
                </table>
                <div class="table-mobile flex">
                    {{--                    @foreach($productEvents as $event)--}}
                    {{--                            @if($event['subject_type'] == 'Product')--}}
                    {{--                                <div class="mobile-block-box">--}}
                    {{--                                    <div class="box-mobile p-4 rounded-lg shadow">--}}
                    {{--                                        <div class="box-mobile-InfoLayout">--}}
                    {{--                                            <div class="box-type">--}}
                    {{--                                                <span class="table-mobile-text text-gray-500">--}}
                    {{--                                            {{ $event['subject_type'] }}--}}
                    {{--                                        </span>--}}
                    {{--                                                <span class="p-1.5 mx-1.5 text-xs font-medium uppercase text-center tracking-wider--}}
                    {{--                                        rounded-lg bg-opacity-50 recent-type verb-{{$event['verb']}}">--}}
                    {{--                                            {{ $event['verb'] }}--}}
                    {{--                                        </span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <span class="table-mobile-text text-sm text-gray-700">--}}
                    {{--                                                {{ $event['author'] }}--}}
                    {{--                                            </span>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="table-mobile-desc">--}}
                    {{--                                            <div class="mobile-description-block w-160">--}}
                    {{--                                                <span class="table-mobile-text text-gray-500">--}}
                    {{--                                                {{ $event['description'] }}--}}
                    {{--                                            </span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <span class="table-mobile-text text-sm text-gray-700 created-date">--}}
                    {{--                                                {{ $event['created_at'] }}--}}
                    {{--                                            </span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            @endif--}}
                    {{--                    @endforeach--}}
                </div>
            </div>
        </div>
    </div>
</section>
