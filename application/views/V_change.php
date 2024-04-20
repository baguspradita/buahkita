<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <p class="login-box-msg"><?= $this->session->flashdata('message'); ?></p>
            <form method="post" action="<?= base_url('C_Admin/changePassword') ?>">
                <div class="form-group">
                    <label for="curent password">Curent Password</label>
                    <input type="password" class="form-control" id="curent" name="curent" aria-describedby="emailHelp" placeholder="Curent Password">
                    <?= form_error('curent', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="New Password">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
                    <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="Confirm Password">Confirm Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Confirm Password">
                    <?= form_error('new_password2', '<small class="text-danger">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</div>