<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>
<div class="auth-form-box">
    <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../backend/assets/img/icons/logo.png" alt="phoenix" width="58" />
            </div>
        </a>
        <h3 class="text-body-highlight">Sign Up</h3>
        <p class="text-body-tertiary">Create your account today</p>
    </div>
    <button class="btn btn-phoenix-secondary w-100 mb-3"><svg class="svg-inline--fa fa-google text-danger me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg="">
            <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
        </svg><!-- <span class="fab fa-google text-danger me-2 fs-9"></span> Font Awesome fontawesome.com -->Sign up with google</button>
    <button class="btn btn-phoenix-secondary w-100"><svg class="svg-inline--fa fa-facebook text-primary me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
        </svg><!-- <span class="fab fa-facebook text-primary me-2 fs-9"></span> Font Awesome fontawesome.com -->Sign up with facebook</button>
    <div class="position-relative mt-4">
        <hr class="bg-body-secondary">
        <div class="divider-content-center bg-body-emphasis">or use email</div>
    </div>
    <form>
        <div class="mb-3 text-start">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" placeholder="Name">
        </div>
        <div class="mb-3 text-start">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" id="email" type="email" placeholder="name@example.com">
        </div>
        <div class="row g-3 mb-3">
            <div class="col-sm-6">
                <label class="form-label" for="password">Password</label>
                <div class="position-relative" data-password="data-password">
                    <input class="form-control form-icon-input pe-6" id="password" type="password" placeholder="Password" data-password-input="data-password-input">
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="confirmPassword">Confirm Password</label>
                <div class="position-relative" data-password="data-password">
                    <input class="form-control form-icon-input pe-6" id="confirmPassword" type="password" placeholder="Confirm Password" data-password-input="data-password-input">
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                </div>
            </div>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" id="termsService" type="checkbox">
            <label class="form-label fs-9 text-transform-none" for="termsService">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
        </div>
        <button class="btn btn-primary w-100 mb-3">Sign up</button>
        <div class="text-center"><a class="fs-9 fw-bold" href="../../../pages/authentication/card/sign-in.html">Sign in to an existing account</a></div>
    </form>
</div>
<?= $this->endSection() ?>