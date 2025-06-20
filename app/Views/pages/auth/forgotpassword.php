<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>

<div class="auth-form-box">
    <div class="mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../backend/assets/img/icons/logo.png" alt="phoenix" width="58" />
            </div>
        </a>
        <h4 class="text-body-highlight  text-center ">Forgot your password?</h4>
        <p class="text-body-tertiary mb-5 text-center ">Enter your email below and we will <br class="d-md-none">send you <br class="d-none d-xxl-block">a reset link</p>

        <?php $validation = \Config\Services::validation(); ?>

        <form class="mb-5" action="<?= route_to('send_password_reset_link') ?>" method="POST">
            <?php csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('success'))): ?>
                <div class="alert alert-success alert-dismissible fade show p-2" role="alert">
                    <?= session()->getFlashdata('success') ?>

                    <button class="p-2 mt-1 btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

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
            <div class="d-flex align-items-center ">
                <input class="form-control flex-1" id="email" name="email" type="email" placeholder="Email" value="<?= set_value('email') ?>" required>

                <button class="btn btn-primary ms-2" type="submit">Send<svg class="svg-inline--fa fa-chevron-right ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                    </svg><!-- <span class="fas fa-chevron-right ms-2"></span> Font Awesome fontawesome.com --></button>
            </div>
            <?php if ($validation->getError('email')): ?>
                <small class="text-danger text-right"><?= $validation->getError('email') ?></small>
            <?php endif; ?>
        </form>
        <div class="text-center ">
            <a class="fs-9 fw-bold " href="<?= route_to('login.form') ?>">Login instead.</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>