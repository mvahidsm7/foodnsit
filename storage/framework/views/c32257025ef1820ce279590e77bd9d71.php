<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="container mt-150 mb-150">
            <table class="table">
                <tr class="table-active">
                    <td>Kode</td>
                    <td>Nama</td>
                    <td>Gambar</td>
                    <td>Deskripsi</td>
                    <td>Harga</td>
                    <td>Lainnya</td>
                </tr>
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($m->id_menu); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                        <td><img src="<?php echo e(asset('')); ?><?php echo e($m->gambar); ?>" alt=""></td>
                        <td><?php echo e($m->deskripsi); ?></td>
                        <td><?php echo e($m->harga); ?></td>
                        <td>
                            <form action="/edit-menu/<?php echo e($m->id_menu); ?>" method="post"><?php echo csrf_field(); ?><button
                                    type="submit">edit</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <a class="btn btn-outline-success" href="/tambah-menu">Tambah Menu</a>
        </div>
        
    </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\vahid\LastProjectFixing\final\resources\views/admin/menu.blade.php ENDPATH**/ ?>