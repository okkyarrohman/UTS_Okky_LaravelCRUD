
<?php $__env->startSection('navbar'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Jasa Kirim Barang
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('post_created')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(Session::get('post_created')); ?>

                                </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('post.create')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="title">Jabatan</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Barang" />
                                </div>

                                <div class="form-group">
                                    <label for="body">Lama Bekerja</label>
                                    <textarea name="body" class="form-control" rows="3"></textarea>
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

<?php echo $__env->make('layouts.mainpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/home/add-post.blade.php ENDPATH**/ ?>