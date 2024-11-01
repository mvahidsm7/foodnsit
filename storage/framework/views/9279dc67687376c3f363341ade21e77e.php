<?php $__env->startSection('content'); ?>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>silahkan konfirmasi</h1>
                        <b class="text-light"><i>Dana yang akan dikembalikan akan di kirimkan ke rekening anda dengan potongan 10%</i></b>
                        <p>Apakah anda yakin?</p>
                        <center>
                            <form action="/batal/<?php echo e($pes->no_pes); ?>/sukses" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-outline-secondary text-light">Konfirmasi</button>
                                <a href="/profil" class="btn btn-outline-success text-light">Batal</a>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\K-RPL\laravel\Final Pro\final\resources\views/batal.blade.php ENDPATH**/ ?>