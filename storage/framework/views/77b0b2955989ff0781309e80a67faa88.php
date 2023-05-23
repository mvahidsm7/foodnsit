<?php $__env->startSection('content'); ?>
    <?php if($user->email == 'admin@food.com'): ?>
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>halaman</p>
                            <h1>Admin</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        
        <div class="cart-section mt-5 mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">Profil</h4>
                        </center>
                        <p class="card-text">
                        <h5>Nama :</h5>
                        </p>
                        <p class="card-text">
                            <?php echo e($user->name); ?>

                            <a href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                        </p>
                        <p class="card-text">
                        <h5>Pilihan :</h5>
                        </p>
                        <p class="card-text">
                            <a href="/admin/meja" class="btn btn-outline-primary">data meja</a>
                            <a href="/admin/menu" class="btn btn-outline-info">data menu</a>
                            <a href="/data-pesanan" class="btn btn-outline-info">data pesanan</a>
                            <a href="/" class="btn btn-outline-success">lainnya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    <?php else: ?>
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>halaman</p>
                            <h1>Profil & Pesanan Anda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        
        <div class="cart-section mt-5 mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">Profil</h4>
                        </center>
                        <p class="card-text">
                        <h5>Nama :</h5>
                        </p>
                        <p class="card-text"><?php echo e($user->name); ?></p>
                        <p class="card-text">
                        <h5>Email :</h5>
                        </p>
                        <p class="card-text"><?php echo e($user->email); ?></p>
                        <a class="btn btn-outline-danger" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="cart-section mt-5 mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">Pesanan Anda</h4>
                        </center>
                        <hr>
                        <?php $__currentLoopData = $pes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <center>
                                <p class="card-text">
                                <h5>Pesanan <?php echo e($p->no_pes); ?></h5>
                                </p>
                            </center>

                            
                            
                            </p>
                            <h5>Jam :</h5><?php echo e($p->jam); ?>

                            </p>
                            <h5>Tanggal :</h5><?php echo e($p->tanggal); ?>

                            </p>
                            <p>
                            <h5>Status Pembayaran :</h5>
                            <?php if($p->status == 0): ?>
                            Menunggu Pembayaran
                            <?php else: ?>
                            Dibayar
                            <?php endif; ?>
                            </p>
                            <p>

                                <a href="/bayar/<?php echo e($p->no_pes); ?>" class="btn btn-outline-success">Detail Pesanan</a>
                                <a href="/batal/<?php echo e($p->no_pes); ?>" class="btn btn-outline-danger">Batalkan Pesanan</a>

                            </p>
                            <hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\K-RPL\laravel\Final Pro\final\resources\views/pesanan.blade.php ENDPATH**/ ?>