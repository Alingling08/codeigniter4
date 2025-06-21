<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container-small mb-2">
    <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Profile</h2>
        </div>
        <div class="col-auto">
            <div class="row g-2 g-sm-3">
                <div class="col-auto">
                    <button class="btn btn-phoenix-danger"><svg class="svg-inline--fa fa-trash-can me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"></path>
                        </svg><!-- <span class="fas fa-trash-alt me-2"></span> Font Awesome fontawesome.com -->Delete account</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3 mb-6">
        <div class="col-12 col-lg-5">
            <div class="card h-100">
                <div class="card-body">
                    <!-- <div class="border-bottom border-dashed pb-4"> -->
                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                        <div class="col-12 col-sm-auto">
                            <input class="d-none" id="avatarFile" type="file">
                            <label class="cursor-pointer avatar avatar-5xl" for="avatarFile"><img class="rounded-circle" src="<?= get_user()->picture == null ? '/images/users/default.png' : '/images/users/' . get_user()->picture ?>" alt=""></label>
                        </div>
                        <div class="col-12 col-sm-auto flex-1">
                            <h3 class="profile-name"><?= get_user()->name ?></h3>
                            <small><em><?= get_user()->username ?></em></small>
                            <p class="text-body-secondary">Joined 3 months ago</p>
                            <div><a class="me-2" href="#!"><svg class="svg-inline--fa fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                    </svg><!-- <span class="fab fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover"></span> Font Awesome fontawesome.com --></a><a class="me-2" href="#!"><svg class="svg-inline--fa fa-facebook text-body-quaternary text-opacity-75 text-primary-hover" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
                                    </svg><!-- <span class="fab fa-facebook text-body-quaternary text-opacity-75 text-primary-hover"></span> Font Awesome fontawesome.com --></a><a href="#!"><svg class="svg-inline--fa fa-twitter text-body-quaternary text-opacity-75 text-primary-hover" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                    </svg><!-- <span class="fab fa-twitter text-body-quaternary text-opacity-75 text-primary-hover"></span> Font Awesome fontawesome.com --></a></div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="d-flex flex-between-center pt-4">
                        <div>
                            <h6 class="mb-2 text-body-secondary">Total Spent</h6>
                            <h4 class="fs-7 text-body-highlight mb-0">$894</h4>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-2 text-body-secondary">Last Order</h6>
                            <h4 class="fs-7 text-body-highlight mb-0">1 week ago</h4>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-2 text-body-secondary">Total Orders</h6>
                            <h4 class="fs-7 text-body-highlight mb-0">97 </h4>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="card h-100">
                <div class="card-body">
                    <div class="border-bottom border-dashed">
                        <h4 class="mb-3">Default Information
                        </h4>
                    </div>
                    <div class="pt-4 mb-lg-4 mb-xl-7">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5 class="text-body-highlight">Address</h5>
                            </div>
                            <div class="col-auto">
                                <p class="text-body-secondary profile-address"><?= get_user()->address ?></p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5 class="text-body-highlight ">Email</h5>
                            </div>
                            <div class="col-auto">
                                <p class="text-body-secondary"><a class="lh-1 profile-email" href="mailto:" .<?= get_user()->email ?>><?= get_user()->email ?></a></p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5 class="text-body-highlight">Phone</h5>
                            </div>
                            <div class="col-auto">
                                <p class="text-body-secondary"><a class="profile-mobile" href="tel:" .<?= get_user()->mobile ?>><?= get_user()->mobile ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="scrollbar">
            <ul class="nav nav-underline fs-9 flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link text-nowrap active" id="personal-info-tab" data-bs-toggle="tab" href="#tab-personal-info" role="tab" aria-controls="tab-personal-info" aria-selected="true"><svg class="svg-inline--fa fa-user me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                        </svg><!-- <span class="fas fa-user me-2"></span> Font Awesome fontawesome.com -->Personal info</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link text-nowrap" id="change-password-tab" data-bs-toggle="tab" href="#tab-change-password" role="tab" aria-controls="tab-change-password" aria-selected="true"><svg class="svg-inline--fa fa-user me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                        </svg><!-- <span class="fas fa-user me-2"></span> Font Awesome fontawesome.com -->Change Password</a></li>
            </ul>
        </div>
        <div class="tab-content" id="profileTabContent">
            <div class="tab-pane fade active show" id="tab-personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                <form action="<?= route_to('admin.profile.update') ?>" method="POST" id="personal-info-form">
                    <?= csrf_field() ?>
                    <div class="row gx-3 gy-4 mb-5">
                        <div class="col-12 col-lg-5">
                            <label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="fullName">Full name</label>
                            <input class="form-control" id="fullName" type="text" name="name" placeholder="Full name" value="<?= esc(get_user()->name) ?>">
                            <small class="text-danger error-text name_error"></small>
                        </div>
                        <div class="col-12 col-lg-3">
                            <label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="gender">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="male" selected="<?= get_user()->gender == 'male' ? 'selected' : '' ?>">Male</option>
                                <option value="female" selected="<?= get_user()->gender == 'female' ? 'selected' : '' ?>">Female</option>
                                <option value="non-binary" selected="<?= get_user()->gender == 'non-binary' ? 'selected' : '' ?>">Non-binary</option>
                                <option value="not-to-say" selected="<?= get_user()->gender == 'not-to-say' ? 'selected' : '' ?>">Prefer not to say</option>
                            </select>

                        </div>
                        <div class="col-12 col-lg-4">
                            <label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="<?= esc(get_user()->email) ?>" placeholder="Email" readonly>
                            <small class="text-danger error-text email_error"></small>
                        </div>
                        <div class="col-12 col-lg-8">
                            <label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="address">Address</label>
                            <input class="form-control" id="address" type="text" name="address" placeholder="Address" value="<?= esc(get_user()->address) ?>">
                            <small class="text-danger error-text gender_error"></small>
                        </div>
                        <div class="col-12 col-lg-4">
                            <label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="birthdate">Date of Birth</label>
                            <input class="form-control" id="birthdate" name="birthdate" type="date" placeholder="1999-01-01" value="<?= esc(get_user()->birthdate) ?>">
                            <small class="text-danger error-text birthdate_error"></small>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="phone">Phone</label>
                            <input class="form-control" id="phone" name="mobile" type="text" placeholder="+1234567890" value="<?= esc(get_user()->mobile) ?>">
                            <small class="text-danger error-text mobile_error"></small>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="alternative_contact">Alternative phone</label>
                            <input class="form-control" id="alternative_contact" name="alternative_contact" type="text" placeholder="+1234567890" value="<?= esc(get_user()->alternative_contact) ?>">
                            <small class="text-danger error-text alternative_contact_error"></small>
                        </div>
                        <div class="col-12 col-lg-4">
                            <label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="facebook">Facebook</label>
                            <input class="form-control" id="facebook" name="social_fb" type="text" placeholder="Facebook" value="<?= esc(get_user()->social_fb) ?>">
                            <small class="text-danger error-text social_fb_error"></small>
                        </div>
                        <div class="col-12 col-lg-4">
                            <label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="instagram">Instagram</label>
                            <input class="form-control" id="instagram" name="social_instagram" type="text" placeholder="Instagram" value="<?= esc(get_user()->social_instagram) ?>">
                            <small class="text-danger error-text social_instagram_error"></small>
                        </div>
                        <div class="col-12 col-lg-4">
                            <label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="twitter">Twitter</label>
                            <input class="form-control" id="twitter" type="text" name="social_twitter" placeholder="Twitter" value="<?= esc(get_user()->social_twitter) ?>">
                            <small class="text-danger error-text social_twitter_error"></small>
                        </div>
                        <div class="col-12 col-lg-12">
                            <label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="twitter">Brief Summary</label>

                            <textarea class="form-control" id="profile_summary" name="profile_summary" placeholder="Write a brief summary here." style="height: 128px"></textarea>
                            <small class="text-danger error-text profile_description_error"></small>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary px-7">Save changes</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade " id="tab-change-password" role="tabpanel" aria-labelledby="change-password-tab">

                <form action="<?= route_to('admin.profile.change-password') ?>" method="POST" id='change-password-form'>
                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" class="ci_csrf_data" />
                    <div class="row gx-3 gy-4 mb-5">
                        <div class="col-12 col-lg-4 mb-3">
                            <div class=" text-start">
                                <label class="form-label" for="password">Password</label>
                                <div class="form-icon-container" data-password="data-password">
                                    <input class="form-control form-icon-input pe-6" id="password" type="password" name="current_password" placeholder="Password" data-password-input="data-password-input"><svg class="svg-inline--fa fa-lock text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path>
                                    </svg><!-- <span class="fa-solid fa-lock text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
                                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                                </div>
                            </div>
                            <small class="text-danger error-text current_password_error"></small>
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <div class="text-start">
                                <label class="form-label" for="password">New Password</label>
                                <div class="form-icon-container" data-password="data-password">
                                    <input class="form-control form-icon-input pe-6" id="new-password" name="new_password" type="password" placeholder="Password" data-password-input="data-password-input"><svg class="svg-inline--fa fa-key text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"></path>
                                    </svg><!-- <span class="fa-solid fa-key text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
                                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                                </div>
                            </div>
                            <small class="text-danger error-text new_password_error"></small>
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <div class="text-start">
                                <label class="form-label" for="password">Confirm New Password</label>
                                <div class="form-icon-container" data-password="data-password">
                                    <input class="form-control form-icon-input pe-6" id="confirm-new-password" name="password_confirmation" type="password" placeholder="Password" data-password-input="data-password-input"><svg class="svg-inline--fa fa-key text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"></path>
                                    </svg><!-- <span class="fa-solid fa-key text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
                                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                                </div>
                            </div>
                            <small class="text-danger error-text password_confirmation_error"></small>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary px-7">Change Password</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="/extra-assets/ckeditor/ckeditor.js"></script>
<script>
    $(function() {
        CKEDITOR.replace('profile_summary');
    });
    $(document).ready(function() {
        $("#personal-info-form").on('submit', function(e) {
            e.preventDefault();
            var form = this;
            var formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    toastr.remove();
                    $(form).find('small.error-text').text('');
                },
                success: function(response) {
                    if ($.isEmptyObject(response.error)) {
                        if (response.status) {
                            $('.profile-name').each(function() {
                                $(this).html(response.user.name);
                            })
                            $('.profile-address').html(response.user.address);
                            $('.profile-mobile').attr('href', 'tel:' + response.user.mobile)
                            $('.profile-mobile').html(response.user.mobile)
                            toastr.success(response.msg);
                            // location.reload();
                        } else {
                            toastr.error(response.msg);
                        }
                    } else {
                        $.each(response.error, function(prefix, val) {
                            $(form).find('small.' + prefix + '_error').text(val);
                        })
                    }
                }
            })
        });

        $("#change-password-form").on('submit', function(e) {
            e.preventDefault();
            //CSRF Hash
            var csrfName = $('.ci_csrf_data').attr('name'); //CSRF TOKEN
            var csrfHash = $('.ci_csrf_data').val();

            var form = this;
            var formdata = new FormData(form);
            formdata.append(csrfName, csrfHash);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    toastr.remove();
                    $(form).find('small.error-text').text('');
                },
                success: function(response) {
                    //Update CSRF Hash
                    $('.ci_csrf_data').val(response.token);

                    if ($.isEmptyObject(response.error)) {
                        if (response.status) {
                            $(form)[0].reset();
                            toastr.success(response.msg);
                        } else {
                            toastr.error(response.msg);
                        }
                    } else {
                        $.each(response.error, function(prefix, val) {
                            $(form).find('small.' + prefix + '_error').text(val);
                        })
                    }
                }
            })
        });


    });
</script>
<?= $this->endSection() ?>