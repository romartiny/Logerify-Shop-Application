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
                    <span class="text">Theme Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clock-three"></i>
                        <span class="number">{{$totalStoreThemesCount}}</span>
                        <span class="text">total themes</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-clock"></i>
                        <span class="number">{{strlen($currentThemeName) > 9
                                            ? substr($currentThemeName, 0, 5) . '...'
                                            : $currentThemeName}}</span>
                        <span class="text">current theme</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-clock-five"></i>
                        <span class="number">{{$totalCustomThemesCount}}</span>
                        <span class="text">custom themes</span>
                    </div>
                </div>
            </div>

            <div class="title">
                <i class="uil uil-chart"></i>
                <span class="text">Theme Activity</span>
            </div>

            <div class="activity-data w-screen">
                <table class="w-full rounded-lg table-plus">
                    <thead class="thead-elem border-b-2">
                    <tr class="title-section">
                        <th class="title-text w-18 p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                        <th class="title-text flex flex content-around flex-wrap flex-col-reverse p-3
                                text-sm font-semibold tracking-wide text-left">Role
                        </th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Created At</th>
                        <th class="title-text p-3 text-sm font-semibold tracking-wide text-left">Updated At</th>
                    </tr>
                    </thead>
                    <tbody class="tbody-elem divide-y divide-gray-100" id="log-table">
                    @foreach($themeEvents as $event)
                            <tr class="tr-elem">
                                <td class="p-3 text-sm text-gray-700">
                                        <span class="total-info text-sm text-gray-700">
                                            {{ $event['id'] }}
                                        </span>
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700">
                                    {{ strlen($event['name']) > 10 ? ucfirst(substr($event['name'], 0, 13) . '...'): ucfirst($event['name'])}}
                                </td>
                                <td class="p-3 text-sm text-gray-700 flex justify-around">
                                        <span class="p-1.5 text-xs flex flex-col font-medium uppercase text-center
                                        tracking-wider rounded-lg bg-opacity-50 recent-type verb-{{$event['role']}}">
                                            {{ $event['role'] }}
                                        </span>
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700 created-date">
                                    {{ $event['created_at'] }}
                                </td>
                                <td class="total-info p-3 text-sm text-gray-700 created-date">
                                    {{ $event['updated_at'] }}
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="table-mobile flex">
                    @foreach($themeEvents as $event)
                        <div class="mobile-block-box">
                            <div class="box-mobile p-4 rounded-lg shadow">
                                <div class="box-mobile-info">
                                    <div class="box-type">
                                                <span class="table-mobile-text text-gray-500">
                                            {{ $event['id'] }}
                                        </span>
                                    </div>
                                    <span class="table-mobile-text text-sm text-gray-700">
                                                {{ $event['created_at'] }}
                                            </span>
                                </div>
                                <div class="table-mobile-desc-fix">
                                    <div class="mobile-description-block w-160">
                                            <span class="table-mobile-text p-1.5 text-xs font-medium uppercase
                                            text-center tracking-wider rounded-lg bg-opacity-50
                                            verb-create">
                                                {{ $event['role'] }}
                                            </span>
                                    </div>
                                    <span class="table-mobile-text text-gray-500">
                                        {{ strlen($event['name']) > 10 ? ucfirst(substr($event['name'], 0, 20) . '...'): ucfirst($event['name'])}}
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
