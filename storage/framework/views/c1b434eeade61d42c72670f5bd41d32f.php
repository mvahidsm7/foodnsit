<?php $__env->startSection('content'); ?>
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Selamat datang <q><i><?php echo e($user->name); ?></i></q> di</p>
                            <h1>FOOD n SIT</h1>
                            <div class="hero-btns">
                                <?php if($user->name == 'admin'): ?>
                                    <a href="/profil" class="boxed-btn">Admin</a>
                                    <a href="/menu" class="bordered-btn">Menu</a>
                                <?php else: ?>
                                    <a href="/pesan" class="boxed-btn">Reservasi</a>
                                    <a href="/menu" class="bordered-btn">Menu</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Tidak ada pengiriman</h3>
                            <p>Anda pesan ya anda datang ke restoran</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>Dukungan 24/7</h3>
                            <p>Layanan kami tersedia 24 jam 7 hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Refund</h3>
                            <p>Anda bisa me refund jika membatalkan pesanan dengan pajak 10% dari pesanan anda</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Menu</span> Unggulan</h3>
                        <p>Menu yang sering dipesan oleh pengguna</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo e($m->gambar); ?>"
                                    alt=""></a>
                        </div>
                        <h3><?php echo e($m->nama); ?></h3>
                        <p class="product-price">IDR <?php echo e($m->harga); ?></p>
                        <p><?php echo e($m->deskripsi); ?></p>
                        <a href="/pesan" class="cart-btn"><i class="fas fa-shopping-cart"></i> Pesan Sekarang</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar1.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Rafli Sofa Ramadhan <span>I-Do</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar2.jpg" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Revan Dwiki <span>UMKM</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar3.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Anggia Rahmadita <span>Zoo</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar4.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Berlina Shobirah <span>Swim Go</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BTI3-1\Desktop\final\resources\views/index.blade.php ENDPATH**/ ?>