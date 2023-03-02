<div class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <span class="shop-name">{{ $shopDomain ?? Auth::user()->name }}</span>
    </div>
    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <i class="uil uil-file-export"></i>
                <span class="text">Export Events</span>
            </div>
            <div class="activity-data export-data w-screen">
                <div class="export-block">
                    <div class="export-box">
                        <div class="export-form">
                            <span class="export-title">Export</span>
                            <p class="export-additional-info">Export to csv can help to get access to the data without application in any place. Be careful with the date uploaded and do not let the date fall into the other hands.</p>
                            <span class="export-variant-text">Export Data</span>
                            <div class="export-variant">
                                <label for="events"></label>
                                <select name="events" id="events">
                                    <option value="admin">Admin events</option>
                                    <option value="order">Order events</option>
                                    <option value="theme">Theme events</option>
                                    <option value="product">Product events</option>
                                    <option value="payment">Payment events</option>
                                </select>
                            </div>

                            <span class="export-variant-text">Export Type</span>
                            <div class="export-as">
                                <label for="export-type"></label>
                                <select name="export-type" id="export-type">
                                    <option value="csv">CSV for Excel, Numbers, or other spreadsheet programs</option>
                                    <option value="txt">Txt file</option>
                                </select>
                            </div>

                            <div class="export-dates">
                                <div class="export-date-start">
                                    <label for="start" class="export-date-label">Start date</label>
                                    <input type="date" id="start" name="events-start"
                                           value="2018-07-22"
                                           min="2018-01-01" max="2024-12-31">
                                </div>

                                <div class="export-date-end">
                                    <label for="end" class="export-date-label">Last date</label>

                                    <input type="date" id="end" name="events-end"
                                           value="2018-07-22"
                                           min="2018-01-01" max="2024-12-31">
                                </div>
                            </div>

                            <div class="form-footer">
                                <div class="export-help-link">
                                    <span class="export-help-text">Learn more</span>
                                    <a href="/info" class="export-help-link">about Logerify</a>
                                </div>

                                <button class="download-export-events-button">Export Events</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

