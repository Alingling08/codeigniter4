<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>
<div class="auth-form-box">
    <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../backend/assets/img/icons/logo.png" alt="phoenix" width="58" />
            </div>
        </a>
        <h3 class="text-body-highlight">Sign In</h3>
        <p class="text-body-tertiary">Get access to your account</p>
    </div>
    <button class="btn btn-phoenix-secondary w-100 mb-3"><svg class="svg-inline--fa fa-google text-danger me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg="">
            <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
        </svg><!-- <span class="fab fa-google text-danger me-2 fs-9"></span> Font Awesome fontawesome.com -->Sign in with google</button>
    <button class="btn btn-phoenix-secondary w-100"><svg class="svg-inline--fa fa-facebook text-primary me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
        </svg><!-- <span class="fab fa-facebook text-primary me-2 fs-9"></span> Font Awesome fontawesome.com -->Sign in with facebook</button>
    <div class="position-relative">
        <hr class="bg-body-secondary mt-5 mb-4">
        <div class="divider-content-center bg-body-emphasis">or use email</div>
    </div>
    <?php $validation = \Config\Services::validation(); ?>
    <form action="<?= route_to('login.handler') ?>" method="POST">
        <?= csrf_field() ?>

        <?php if (!empty(session()->getFlashdata('success'))): ?>
            <div class="alert alert-success alert-dismissible fade show p-2" role="alert">
                <?= session()->getFlashdata('success') ?>

                <button class="p-2 mt-1 btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (!empty(session()->getFlashdata('fail'))): ?>
            <div class="alert alert-danger alert-dismissible fade show p-2" role="alert">
                <?= session()->getFlashdata('fail') ?>

                <button class="p-2 mt-1 btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="mb-3 text-start">
            <label class="form-label" for="email">Email address</label>
            <div class="form-icon-container">
                <input class="form-control form-icon-input" id="email" name="email" type="email" placeholder="name@example.com" value="<?= set_value('email') ?>" required>
                <svg class="svg-inline--fa fa-user text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                </svg><!-- <span class="fas fa-user text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
            </div>
            <?php if ($validation->getError('email')): ?>
                <small class="text-danger"><?= $validation->getError('email') ?></small>
            <?php endif; ?>

        </div>
        <div class="mb-3 text-start">
            <label class="form-label" for="password">Password</label>
            <div class="form-icon-container" data-password="data-password">
                <input class="form-control form-icon-input pe-6" id="password" name="password" type="password" placeholder="Password" data-password-input="data-password-input" required>
                <svg class="svg-inline--fa fa-key text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"></path>
                </svg><!-- <span class="fas fa-key text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
                <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
            </div>
            <?php if ($validation->getError('password') || !empty(session()->getFlashdata('password'))): ?>
                <small class="text-danger"><?= $validation->getError('password') ?><?= session()->getFlashdata('password') ?></small>
            <?php endif; ?>
        </div>
        <div class="row flex-between-center mb-7">
            <div class="col-auto">
                <div class="form-check mb-0">
                    <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked">
                    <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                </div>
            </div>
            <div class="col-auto"><a class="fs-9 fw-semibold" href="<?= route_to('forgot.form') ?>">Forgot Password?</a></div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
        <div class="text-center"><a class="fs-9 fw-bold" href="../../../pages/authentication/card/sign-up.html">Create an account</a></div>
    </form>
</div>
<?= $this->endSection() ?>