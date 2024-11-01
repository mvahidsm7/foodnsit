<?php $__env->startSection('content'); ?>
		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>halaman</p>
							<h1>Reservasi</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->
	
		<!-- contact form -->
		<div class="contact-from-section mt-150 mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-5 mb-lg-0">
						 <div id="form_status"></div>
						<div class="contact-form">
							<form action="/pesan/sukses" method="post">
								<?php echo csrf_field(); ?>
								<section>Meja :</section>
								<select name="no_meja" id="" class="form-control input-group form-label">
									<option value="" hidden selected>Pilih Meja</option>
									<?php $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($m->no_meja); ?>" <?php if($m->status == 'dipesan'): ?> hidden <?php endif; ?>>0<?php echo e($m->no_meja); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select><br>
								<section>Tanggal :</section>
								<input type="date" class="form-control input-group form-label" name="tanggal"><br>
								<section>Menu :</section>
								<select name="menu" class="form-control input-group form-label" id="">
									<option value="" hidden selected>Pilih Menu</option>
									<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($m->id_menu); ?>"><?php echo e($m->nama); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
								</select><br>
								<section>Jam :</section>
								<input type="time" class="form-control input-group form-label" name="jam"><br>
								<button type="submit" class="btn btn-outline-success">Pesan</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat Kami</h4>
							<p>JL. Budi Jl. Raya Cilember RT 01/RW 04 <br> Sukaraja, Cicendo, Kota Bandung <br> Jawa Barat</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Jam operasional</h4>
							<p>SENIN - JUMAT: 12 to 8 PM <br> SABTU - MINGGU: Segimana mood </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: (022) 6652442 <br> Email: smkn11bdg@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end contact form -->
	
		<!-- find our location -->
		<div class="find-location blue-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p> <i class="fas fa-map-marker-alt"></i> Temui kami disini</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end find our location -->
	
		<!-- google map section -->
		<div class="embed-responsive embed-responsive-21by9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31688.385624347888!2d107.55295179731444!3d-6.88482970801786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bd6aaaaaab%3A0xf843088e2b5bf838!2sSMK%20Negeri%2011%20Bandung!5e0!3m2!1sen!2sid!4v1684462748745!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- end google map section -->
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\K-RPL\laravel\Final Pro\final\resources\views/reservasi.blade.php ENDPATH**/ ?>