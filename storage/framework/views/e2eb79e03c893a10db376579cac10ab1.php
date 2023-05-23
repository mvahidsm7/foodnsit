<?php $__env->startSection('content'); ?>
    <?php if($user->mail === 'admin@food.com'): ?>

            <!-- breadcrumb-section -->
            <div class="breadcrumb-section breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="breadcrumb-text">
                                <p>Halaman ini</p>
                                <h1>Tidak Tersedia Untuk Anda</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end breadcrumb section -->
            <!-- error section -->
            <div class="full-height-section error-section">
                <div class="full-height-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-center">
                                <div class="error-text">
                                    <i class="far fa-sad-cry"></i>
                                    <h1>Oops! Akses di tolak.</h1>
                                    <p>Halaman yang kamu tuju tidak tersedia.</p>
                                    <a href="/" class="boxed-btn">Beranda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end error section -->
    <?php else: ?>
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Halaman</p>
                            <h1>Data Pesanan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->
        
        <div class="container mt-150 mb-150">
            <table class="table">
                <tr class="table-active">
                    <td>Nomer</td>
                    <td>ID pengguna</td>
                    <td>No Meja</td>
                    <td>Menu</td>
                    <td>Status</td>
                    <td>Lainnya</td>
                </tr>
                <?php $__currentLoopData = $pes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($m->no_pes); ?></td>
                        <td><?php echo e($m->id_user); ?></td>
                        <td><?php echo e($m->no_meja); ?></td>
                        <td><?php echo e($m->id_menu); ?></td>
                        <td><?php echo e($m->status); ?></td>
                        <td><a href="meja/<?php echo e($m->no_meja); ?>edit">edit</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <form action="/print-pesanan" method="get">
                <?php echo csrf_field(); ?>
                <button class="btn btn-outline-danger" type="submit"
                    href="<?php echo e(URL::to('/print-pesanan')); ?>">Print</button>
            </form>
        </div>
        
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BTI3-1\Desktop\final\resources\views/admin_pesanan.blade.php ENDPATH**/ ?>