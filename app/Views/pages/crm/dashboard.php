<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="row gy-3 mb-4 justify-content-between">
    <div class="col-xxl-6">
        <a href="<?= route_to('crm.download-leads-csv') ?>" class="mb-2 btn btn-primary">Download Leads CSV</a>
        <a href="<?= route_to('crm.download-leads-excel') ?>" class="mb-2 btn btn-primary">Download Leads Excel</a>
        <a href="<?= route_to('crm.download-leads-pdf') ?>" class="mb-2 btn btn-primary">Download Leads PDF</a>
        <h2 class="mb-2 text-body-emphasis">CRM Dashboard</h2>
        <h5 class="text-body-tertiary fw-semibold mb-4">Check your business growth in one place</h5>
        <div class="row g-3 mb-3">
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex d-sm-block justify-content-between">
                            <div class="border-bottom-sm border-translucent mb-sm-4">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center icon-wrapper-sm shadow-primary-100" style="transform: rotate(-7.45deg);"><svg class="svg-inline--fa fa-phone-flip text-primary fs-7 z-1 ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-flip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"></path>
                                        </svg><!-- <span class="fa-solid fa-phone-alt text-primary fs-7 z-1 ms-2"></span> Font Awesome fontawesome.com --></div>
                                    <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Outgoing call</p>
                                </div>
                                <p class="text-primary mt-2 fs-6 fw-bold mb-0 mb-sm-4">3 <span class="fs-8 text-body lh-lg">Leads Today</span></p>
                            </div>
                            <div class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start"><span class="badge badge-phoenix badge-phoenix-success fs-10 mb-2">+24.5%</span>
                                <p class="mb-0 fs-9 text-body-tertiary">Than Yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex d-sm-block justify-content-between">
                            <div class="border-bottom-sm border-translucent mb-sm-4">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center icon-wrapper-sm shadow-info-100" style="transform: rotate(-7.45deg);"><svg class="svg-inline--fa fa-calendar text-info fs-7 z-1 ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"></path>
                                        </svg><!-- <span class="fa-solid fa-calendar text-info fs-7 z-1 ms-2"></span> Font Awesome fontawesome.com --></div>
                                    <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Outgoing meeting</p>
                                </div>
                                <p class="text-info mt-2 fs-6 fw-bold mb-0 mb-sm-4">12 <span class="fs-8 text-body lh-lg">This Week</span></p>
                            </div>
                            <div class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start"><span class="badge badge-phoenix badge-phoenix-warning fs-10 mb-2">+24.5%</span>
                                <p class="mb-0 fs-9 text-body-tertiary">Than last week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-6 col-xxl-4 gy-5 gy-md-3">
                <div class="border-bottom border-translucent">
                    <h5 class="pb-4 border-bottom border-translucent">Top 5 Lead Sources</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent list-group-crm fw-bold text-body fs-9 py-2">
                            <div class="d-flex justify-content-between"><span class="fw-normal fs-9 mx-1"> <span class="fw-bold">1. </span>None </span><span>(65)</span></div>
                        </li>
                        <li class="list-group-item bg-transparent list-group-crm fw-bold text-body fs-9 py-2">
                            <div class="d-flex justify-content-between"><span class="fw-normal mx-1"><span class="fw-bold">2. </span>Online Store</span><span>(74)</span></div>
                        </li>
                        <li class="list-group-item bg-transparent list-group-crm fw-bold text-body fs-9 py-2">
                            <div class="d-flex justify-content-between"><span class="fw-normal fs-9 mx-1"><span class="fw-bold">3.</span> Advertisement</span><span>(32)</span></div>
                        </li>
                        <li class="list-group-item bg-transparent list-group-crm fw-bold text-body fs-9 py-2">
                            <div class="d-flex justify-content-between"><span class="fw-normal fs-9 mx-1"><span class="fw-bold">4.</span> Seminar Partner</span><span>(25)</span></div>
                        </li>
                        <li class="list-group-item bg-transparent list-group-crm fw-bold text-body fs-9 py-2">
                            <div class="d-flex justify-content-between"><span class="fw-normal fs-9 mx-1"> <span class="fw-bold">5.</span> Partner</span><span>(23)</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 mb-6">
        <h3>Contacts Created</h3>
        <p class="text-body-tertiary mb-1">Payment received across all channels</p>
        <div class="echart-contacts-created" style="min-height: 270px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1750339911652">
            <div style="position: relative; width: 366px; height: 270px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="366" height="270" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 270px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
            <div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(239, 242, 246); border-width: 1px; border-radius: 4px; color: rgb(20, 24, 36); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(308px, 147px, 0px); border-color: rgb(203, 208, 221); z-index: 1000; pointer-events: none; visibility: hidden; opacity: 0;">
                <div>
                    <p class="mb-2 text-body-tertiary">
                        Jun 18
                    </p>
                    <div class="ms-1">
                        <h6 class="text-body-tertiary"><svg class="svg-inline--fa fa-circle me-1 fs-10" style="color: #cbd0dd;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                            </svg><!-- <span class="fas fa-circle me-1 fs-10" style="color:#cbd0dd"></span> Font Awesome fontawesome.com -->
                            Actual revenue : 12
                        </h6>
                    </div>
                    <div class="ms-1">
                        <h6 class="text-body-tertiary"><svg class="svg-inline--fa fa-circle me-1 fs-10" style="color: #3874ff;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                            </svg><!-- <span class="fas fa-circle me-1 fs-10" style="color:#3874ff"></span> Font Awesome fontawesome.com -->
                            Projected revenue : 34
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xxl-6 mb-3 mb-sm-0">
        <div class="row">
            <div class="col-sm-7 col-md-8 col-xxl-8 mb-md-3 mb-lg-0">
                <h3>New Contacts by Source</h3>
                <p class="text-body-tertiary">Payment received across all channels</p>
                <div class="row g-0">
                    <div class="col-6 col-xl-4">
                        <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-translucent">
                            <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-square fs-11 me-2 text-primary" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-square fs-11 me-2 text-primary" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9 text-body">Organic</span></div>
                            <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">80</h3>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4">
                        <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl border-translucent">
                            <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-square fs-11 me-2 text-success" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-square fs-11 me-2 text-success" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9 text-body">Paid Search</span></div>
                            <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">65</h3>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4">
                        <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md border-end-xl-0 border-translucent">
                            <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-square fs-11 me-2 text-info" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-square fs-11 me-2 text-info" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9 text-body">Direct</span></div>
                            <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">40</h3>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4">
                        <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-bottom-xl-0 border-translucent">
                            <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-square fs-11 me-2 text-info-light" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-square fs-11 me-2 text-info-light" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9 text-body">Social</span></div>
                            <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">220</h3>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4">
                        <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end border-translucent">
                            <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-square fs-11 me-2 text-danger-lighter" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-square fs-11 me-2 text-danger-lighter" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9 text-body">Referrals</span></div>
                            <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">120</h3>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4">
                        <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100">
                            <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-square fs-11 me-2 text-warning-light" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-square fs-11 me-2 text-warning-light" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9 text-body">Others</span></div>
                            <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">35</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-md-4 col-xxl-4 my-3 my-sm-0">
                <div class="position-relative d-flex flex-center mb-sm-4 mb-xl-0 echart-contact-by-source-container mt-sm-7 mt-lg-4 mt-xl-0">
                    <div class="echart-contact-by-source" style="min-height: 245px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1750339911651">
                        <div style="position: relative; width: 366px; height: 245px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="366" height="245" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 245px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
                        <div class=""></div>
                    </div>
                    <div class="position-absolute rounded-circle bg-primary-subtle top-50 start-50 translate-middle d-flex flex-center" style="height:100px; width:100px;">
                        <h3 class="mb-0 text-primary-dark fw-bolder" data-label="data-label">560</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xxl-6 mb-8">
        <div class="mb-3">
            <h3>New Users &amp; Leads</h3>

            <p class="text-body-tertiary mb-0">Payment received across all channels</p>
        </div>

        <div class="row g-6">
            <div class="col-md-6 mb-2 mb-sm-0">
                <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users me-2 text-info" style="min-height:24px; width:24px">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <h4 class="text-body-tertiary mb-0">New Users :<span class="text-body-emphasis"> 42</span></h4><span class="badge badge-phoenix fs-10 badge-phoenix-success d-inline-flex align-items-center ms-2"><span class="badge-label d-inline-block lh-base">+24.5%</span><svg class="svg-inline--fa fa-caret-up ms-1 d-inline-block lh-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"></path>
                        </svg><!-- <span class="ms-1 fa-solid fa-caret-up d-inline-block lh-1"></span> Font Awesome fontawesome.com --></span>
                </div>
                <div class="pb-0 pt-4">
                    <div class="echarts-new-users" style="min-height: 110px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1750339911653">
                        <div style="position: relative; width: 366px; height: 110px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="366" height="110" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 110px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas><canvas data-zr-dom-id="zr_1" width="366" height="110" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 110px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
                        <div class=""></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap me-2 text-primary" style="height:24px; width:24px">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                    <h4 class="text-body-tertiary mb-0">New Leads :<span class="text-body-emphasis"> 45</span></h4><span class="badge badge-phoenix fs-10 badge-phoenix-success d-inline-flex align-items-center ms-2"><span class="badge-label d-inline-block lh-base">+30.5%</span><svg class="svg-inline--fa fa-caret-up ms-1 d-inline-block lh-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"></path>
                        </svg><!-- <span class="ms-1 fa-solid fa-caret-up d-inline-block lh-1"></span> Font Awesome fontawesome.com --></span>
                </div>
                <div class="pb-0 pt-4">
                    <div class="echarts-new-leads" style="min-height: 110px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1750339911654">
                        <div style="position: relative; width: 366px; height: 110px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="366" height="110" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 110px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas><canvas data-zr-dom-id="zr_1" width="366" height="110" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 110px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
                        <div class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xxl-6">
        <div class="row align-items-start justify-content-between mb-4 g-3">
            <div class="col-auto">
                <h3>Ad Clicks</h3>
                <p class="text-body-tertiary lh-sm mb-0">Check effectiveness of your ads</p>
            </div>
            <div class="col-12 col-sm-4">
                <select class="form-select form-select-sm" id="select-ad-clicks-month">
                    <option>Mar 1 - 31, 2022</option>
                    <option>April 1 - 30, 2022</option>
                    <option>May 1 - 31, 2022</option>
                </select>
            </div>
        </div>
        <div class="echart-add-clicks-chart" style="min-height: 385px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1750339911655">
            <div style="position: relative; width: 366px; height: 385px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="366" height="385" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 385px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas><canvas data-zr-dom-id="zr_1" width="366" height="385" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 385px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas><canvas data-zr-dom-id="zr_2" width="366" height="385" style="position: absolute; left: 0px; top: 0px; width: 366px; height: 385px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
            <div class=""></div>
        </div>
    </div>
    <div class="col-12 col-xxl-6 mb-6 gy-0 gy-xxl-3">
        <div class="row align-items-start justify-content-between mb-4 g-3">
            <div class="col-auto">
                <h3>Deal Forecast<span class="fw-semibold">- $90,303</span></h3>
                <p class="text-body-tertiary mb-1">Show what you offer here</p>
            </div>
            <div class="col-12 col-sm-4">
                <select class="form-select form-select-sm" id="select-ad-forcast-month">
                    <option>Mar 1 - 31, 2022</option>
                    <option>April 1 - 30, 2022</option>
                    <option>May 1 - 31, 2022</option>
                </select>
            </div>
        </div>
        <div class="w-100">
            <div class="d-flex flex-start">
                <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 20.72%">$21.0k</p>
                <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 35.76%">$3.4k</p>
                <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 25.38%">$15.1k</p>
                <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 25.14%">$4.6k</p>
            </div>
            <div class="progress mb-3 rounded-3" style="height: 10px;">
                <div class="progress-bar border-end border-2 bg-primary-dark" role="progressbar" style="width: 20.72%" aria-valuenow="20.72" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Appointment" data-bs-original-title="Appointment"></div>
                <div class="progress-bar border-end border-2" role="progressbar" style="width: 35.76%" aria-valuenow="35.76" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Qualified" data-bs-original-title="Qualified"></div>
                <div class="progress-bar bg-success border-end border-2" role="progressbar" style="width: 25.38%" aria-valuenow="25.38" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Closed Won" data-bs-original-title="Closed Won"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 25.14%" aria-valuenow="25.14" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Contact Sent" data-bs-original-title="Contact Sent"></div>
            </div>
        </div>
        <h4 class="mt-4 mb-3">Deal Forecast by Owner </h4>
        <div class="border-top border-bottom-0" id="dealForecastTable" data-list="{&quot;valueNames&quot;:[&quot;contact&quot;,&quot;appointment&quot;,&quot;qualified&quot;,&quot;closed-won&quot;,&quot;contact-sent&quot;],&quot;page&quot;:5}">
            <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0">
                    <thead>
                        <tr>
                            <th class="sort border-end border-translucent white-space-nowrap align-middle ps-0 text-uppercase text-body-tertiary" scope="col" data-sort="contact" style="width:15%; min-width:100px">Contact</th>
                            <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary" scope="col" data-sort="appointment" style="width:15%; min-width:95px">
                                <div class="d-inline-flex flex-center"><svg class="svg-inline--fa fa-square fs-11 text-primary me-2" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                        <g transform="translate(224 256)">
                                            <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                            </g>
                                        </g>
                                    </svg><!-- <span class="fa-solid fa-square fs-11 text-primary me-2" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9">Appointment</span></div>
                            </th>
                            <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary" scope="col" data-sort="qualified" style="width:20%; min-width:100px">
                                <div class="d-inline-flex flex-center"><svg class="svg-inline--fa fa-square fs-11 text-primary-light me-2" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                        <g transform="translate(224 256)">
                                            <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                            </g>
                                        </g>
                                    </svg><!-- <span class="fa-solid fa-square fs-11 text-primary-light me-2" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9">Qualified</span></div>
                            </th>
                            <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary" scope="col" data-sort="closed-won" style="width:20%; min-width:100px">
                                <div class="d-inline-flex flex-center"><svg class="svg-inline--fa fa-square fs-11 text-success me-2" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                        <g transform="translate(224 256)">
                                            <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                            </g>
                                        </g>
                                    </svg><!-- <span class="fa-solid fa-square fs-11 text-success me-2" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9">Closed Won</span></div>
                            </th>
                            <th class="sort align-middle text-end ps-3 text-uppercase text-body-tertiary" scope="col" data-sort="contact-sent" style="width:20%; min-width:100px">
                                <div class="d-inline-flex flex-center"><svg class="svg-inline--fa fa-square fs-11 text-info me-2" data-fa-transform="up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.375em;">
                                        <g transform="translate(224 256)">
                                            <g transform="translate(0, -64)  scale(1, 1)  rotate(0 0 0)">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96z" transform="translate(-224 -256)"></path>
                                            </g>
                                        </g>
                                    </svg><!-- <span class="fa-solid fa-square fs-11 text-info me-2" data-fa-transform="up-2"></span> Font Awesome fontawesome.com --><span class="mb-0 fs-9">Contact Sent</span></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-deal-forecast-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Carrie Anne</a></td>
                            <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1000</td>
                            <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1256</td>
                            <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1200</td>
                            <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$1200</td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Milind Mikuja</a></td>
                            <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">558</td>
                            <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$2531</td>
                            <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$2200</td>
                            <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$2200</td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Stanley Drinkwater</a></td>
                            <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1100</td>
                            <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$100</td>
                            <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$100</td>
                            <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$100</td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Josef Stravinsky</a></td>
                            <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">856</td>
                            <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$326</td>
                            <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$265</td>
                            <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$265</td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Roy Anderson</a></td>
                            <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1200</td>
                            <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1452</td>
                            <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$865</td>
                            <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$865</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3"> </td>
                            <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">4,744</td>
                            <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">$5,665</td>
                            <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">$4630</td>
                            <td class="border-bottom-0 align-middle white-space-nowrap text-end fw-bold text-body-emphasis pt-2 pb-0 ps-3">$4630</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>