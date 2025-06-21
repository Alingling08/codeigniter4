<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>
<div class="auth-form-box">
    <div class="mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../backend/assets/img/icons/logo.png" alt="phoenix" width="58" />
            </div>
        </a>
        <h4 class="text-body-highlight text-center">Reset new password</h4>
        <p class="text-body-tertiary text-center">Type your new password</p>
    </div>

    <?php $validation = \Config\Services::validation(); ?>

    <form class="mt-5" action="<?= route_to('reset-password-handler', $token) ?>" method="POST">
        <?php csrf_field(); ?>
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
        <div class=" mb-2">
            <div class="position-relative" data-password="data-password">
                <input class="form-control form-icon-input pe-6" id="password" name="new_password" type="password" placeholder="Type new password" data-password-input="data-password-input" required>
                <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
            </div>
            <?php if ($validation->getError('new_password')): ?>
                <small class="text-danger text-right"><?= $validation->getError('new_password') ?></small>
            <?php endif; ?>
        </div>
        <div class="mb-4">
            <div class="position-relative" data-password="data-password">
                <input class="form-control form-icon-input pe-6" id="confirmPassword" name="password_confirmation" type="password" placeholder="Cofirm new password" data-password-input="data-password-input" required>
                <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
            </div>
            <?php if ($validation->getError('password_confirmation')): ?>
                <small class="text-danger text-right"><?= $validation->getError('password_confirmation') ?></small>
            <?php endif; ?>
        </div>
        <button class="btn btn-primary w-100" type="submit">Set Password</button>
    </form>
</div>
<?= $this->endSection() ?>