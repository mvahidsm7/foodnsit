<?php $__env->startSection('content'); ?>
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Halaman</p>
						<h1>Menu</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".3">Makanan</li>
                            <li data-filter=".2">Dessert</li>
                            <li data-filter=".1">Minuman</li>
                        </ul>
                	</div>
        		</div>
    		</div>

			<div class="row product-lists">
				<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-6 text-center <?php echo e($m->kategori); ?>">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo e($m->gambar); ?>" alt=""></a>
						</div>
						<h3><?php echo e($m->nama); ?></h3>
						<p class="product-price"><span>Per porsi</span>
							RP. 
							<?php if($m->kategori == 1): ?>
								<?php echo e($harga[1]->harga); ?>

							<?php endif; ?>
							<?php if($m->kategori == 2): ?>
								<?php echo e($harga[2]->harga); ?>

							<?php endif; ?>
							<?php if($m->kategori == 3): ?>
								<?php echo e($harga[3]->harga); ?>

							<?php endif; ?>
						</p>
						<p><?php echo e($m->deskripsi); ?></p>
						<a href="/pesan" class="cart-btn"><i class="fas fa-shopping-cart"></i> Pesan</a>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
	<!-- end products -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BTI3-1\Desktop\final\resources\views/menu.blade.php ENDPATH**/ ?>