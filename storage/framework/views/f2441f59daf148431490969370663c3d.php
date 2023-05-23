<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pesanan</title>
</head>
<body>
    <center>
        <br>
    <section class="sheet padding-10mm">
    <div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo"><img src="assets/img/logo.png" alt="">
						</div>
                        <br>
        <h1>LAPORAN PESANAN</h1>
        <h3>Bulan:</h3>

    <div class="container mt-150 mb-150">
        <table class="table" border="1" style="width: 100%" cellspacing="0">
            <tr class="table-active">
                <td>Nomer</td>
                <td>ID pengguna</td>
                <td>No Meja</td>
                <td>Menu</td>
                <td>Status</td>
            </tr>
            <?php $__currentLoopData = $pes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($m->no_pes); ?></td>
                    <td><?php echo e($m->id_user); ?></td>
                    <td><?php echo e($m->no_meja); ?></td>
                    <td><?php echo e($m->id_menu); ?></td>
                    <td><?php echo e($m->status); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </section>
</body>
</html><?php /**PATH C:\Users\BTI3-1\Desktop\final\resources\views/laporan.blade.php ENDPATH**/ ?>