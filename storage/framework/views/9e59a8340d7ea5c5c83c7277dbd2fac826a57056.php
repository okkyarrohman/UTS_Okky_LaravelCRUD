

<?php $__env->startSection('navbar3'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            Tampilan Data <a href="/add-post" class="btn btn-success">Input Data</a>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('siswa_deleted')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('siswa_deleted')); ?>

                            </div>
                            <?php endif; ?>
                           <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Absen</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($siswa->absen); ?></td>
                                            <td><?php echo e($siswa->nama); ?></td>
                                            <td><?php echo e($siswa->kelas); ?></td>
                                            <td>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/data-siswa.blade.php ENDPATH**/ ?>