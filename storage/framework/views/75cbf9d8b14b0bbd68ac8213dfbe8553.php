<?php $__env->startSection('content'); ?>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Halaman</p>
                        <h1>Tambah Meja</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    
    <div class="container mt-150 mb-150">
        <center>
        <form action="/tambah-meja/sukses" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" name="kapasitas" id="" placeholder="kapasitas">
            <button class="btn btn-warning" type="submit">simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\K-RPL\laravel\Final Pro\final\resources\views/tambah-meja.blade.php ENDPATH**/ ?>