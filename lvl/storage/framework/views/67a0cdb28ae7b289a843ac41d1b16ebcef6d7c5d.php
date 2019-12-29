<!-- Sidebar -->
<div class="sidebar" data-color="orange" data-background-color="white">
    <!-- Brand Logo -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            <?php echo e(trans('panel.site_title')); ?>

        </a>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar-wrapper">
        <ul class="nav" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                    <p>
                        <i class="fas fa-fw fa-tachometer-alt">

                        </i>
                        <span><?php echo e(trans('global.dashboard')); ?></span>
                    </p>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="nav-item has-treeview <?php echo e(request()->is('admin/permissions*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/roles*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/users*') ? 'menu-open' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#user_management">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <p>
                            <span><?php echo e(trans('cruds.userManagement.title')); ?></span>
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse show" id="user_management">
                        <ul class="nav">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <span><?php echo e(trans('cruds.permission.title')); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <span><?php echo e(trans('cruds.role.title')); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <span><?php echo e(trans('cruds.user.title')); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <p>
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        <span><?php echo e(trans('global.logout')); ?></span>
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
<?php /**PATH C:\xampp\htdocs\lvl\resources\views/partials/menu.blade.php ENDPATH**/ ?>