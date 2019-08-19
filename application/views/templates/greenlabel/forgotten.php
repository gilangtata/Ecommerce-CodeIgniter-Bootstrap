<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="inner-nav">
    <div class="container">
        <a href="<?= LANG_URL ?>"><?= lang('home') ?></a> <span class="active"> > <?= lang('user_login') ?></span>
    </div>
</div>
<div class="container user-page">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <?php
            if ($this->session->flashdata('resultSend')) {
                ?>
                <hr>
                <div class="alert alert-info"><?= $this->session->flashdata('resultSend') ?></div>
                <hr>
            <?php }
            ?>
            <div class="loginmodal-container">
                <h1><?= lang('user_forgotten_page') ?></h1><br>
                <form method="POST" action="">
                    <input type="text" name="email" placeholder="Email">
                    <input type="submit" name="signup" class="login loginmodal-submit" value="<?= lang('send_me_new_pass') ?>">
                </form>
            </div>
        </div>
    </div>
</div>