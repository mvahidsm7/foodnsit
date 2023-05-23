<?php $__env->startSection('content'); ?>
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Detail</p>
                        <h1>Pesanan</h1>
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
                        <h4 class="card-title">Pesanan Anda</h4>
                    </center>
                    <hr>
                    <p>
                    <h5>Kode Pembayaran :</h5>
                    PPFNS001002003 <br>
                    <p>
                    <h5>Nomer Meja :</h5><?php echo e($pes->no_meja); ?>

                    <?php if($pes->no_meja == false): ?>
                        Tidak ada
                    <?php endif; ?>
                    </p>
                    <h5>Menu :</h5>
                    <?php if($pes->id_menu == false): ?>
                        Tidak ada
                    <?php else: ?>
                        <?php echo e($menu->nama); ?>

                    <?php endif; ?>
                    </p>
                    <h5>Jam :</h5><?php echo e($pes->jam); ?>

                    </p>
                    <h5>Tanggal :</h5><?php echo e($pes->tanggal); ?>

                    </p>
                    <h3>Total :
                        <?php if($pes->no_meja == false): ?>
                            <?php echo e($men); ?>

                        <?php endif; ?>
                        <?php if($pes->id_menu == false): ?>
                            <?php echo e($mej); ?>

                        <?php endif; ?>
                        <?php if($pes->id_menu == true && $pes->no_meja == true): ?>
                            <?php echo e($tot); ?>

                        <?php endif; ?>
                    </h3>
                    </p>
                    <hr>
                    <i>Bayar melalui bank dengan memasukkan kode tersebut di pembayaran lainnya</i>
                    <hr>
                    </p>
                    <p>
                        <?php if($pes->status == 0): ?>
                            <form action="/bayar/<?php echo e($pes->no_pes); ?>/sukses" method="post">
                                <?php echo csrf_field(); ?>
                                <center>
                                    <button type="submit" class="btn btn-outline-success"
                                        style="width: 750px">Bayar</button>
                                </center>
                            </form>
                        <?php else: ?>
                        <center>
                            <a href="/batal/<?php echo e($pes->no_pes); ?>" class="btn btn-outline-danger" style="width: 750px">Batalkan Pesanan</a>
                        </center>
                        <?php endif; ?>


                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\K-RPL\laravel\Final Pro\final\resources\views/bayar.blade.php ENDPATH**/ ?>