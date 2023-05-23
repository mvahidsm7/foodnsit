<?php $__env->startSection('content'); ?>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Halaman</p>
                        <h1>Meja</h1>
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
                <td>Kapasitas</td>
                <td>Status</td>
                <td>Lainnya</td>
            </tr>
            <?php $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($m->no_meja); ?></td>
                    <td><?php echo e($m->kapasitas); ?></td>
                    <td><?php echo e($m->status); ?></td>
                    <td><a href="meja/<?php echo e($m->no_meja); ?>edit">edit</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <form action="/tambah-meja" method="post">
            <?php echo csrf_field(); ?>
            <button class="btn btn-outline-success" type="submit">Tambah</button>
        </form>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\K-RPL\laravel\Final Pro\final\resources\views/meja.blade.php ENDPATH**/ ?>