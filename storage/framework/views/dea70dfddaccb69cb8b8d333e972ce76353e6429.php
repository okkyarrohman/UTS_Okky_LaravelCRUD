
<?php $__env->startSection('navbar3'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Sistem Pendataan Siswa
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('siswa_created')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(Session::get('siswa_created')); ?>

                                </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('siswa.create')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama siswa" />
                                </div>

                                <div class="form-group">
                                    <label for="absen">Absen</label>
                                    <input type="text" name="absen" class="form-control" placeholder="Masukkan No Absen" />
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <textarea name="kelas" class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/add-siswa.blade.php ENDPATH**/ ?>