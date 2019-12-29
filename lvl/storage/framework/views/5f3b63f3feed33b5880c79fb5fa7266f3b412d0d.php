<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
    <div class="container justify-content-center">
        <div class="navbar-wrapper text-center">
            <a href="#" class="navbar-brand">
                <?php echo e(trans('panel.site_title')); ?>

            </a>
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <div class="card card-login mb-3">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">
                                <strong>Sign in to start your session</strong>
                            </h4>
                        </div>
                        <div class="card-body login-card-body">
                            <?php if(\Session::has('message')): ?>
                                <p class="alert alert-info">
                                    <?php echo e(\Session::get('message')); ?>

                                </p>
                            <?php endif; ?>

                            <form action="<?php echo e(route('login')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" required autofocus placeholder="<?php echo e(trans('global.login_email')); ?>" name="email" value="<?php echo e(old('email', null)); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('email')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required placeholder="<?php echo e(trans('global.login_password')); ?>" name="password">
                                    <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('password')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember"><?php echo e(trans('global.remember_me')); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-link btn-lg"><?php echo e(trans('global.login')); ?></button>
                                </div>
                            </form>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a class="" href="<?php echo e(route('password.request')); ?>">
                                <small><?php echo e(trans('global.forgot_password')); ?></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvl\resources\views/auth/login.blade.php ENDPATH**/ ?>