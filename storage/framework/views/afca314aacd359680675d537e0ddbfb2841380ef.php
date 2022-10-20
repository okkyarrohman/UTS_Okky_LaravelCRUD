

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
                            <?php if(Session::has('post_deleted')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('post_deleted')); ?>

                            </div>
                            <?php endif; ?>
                           <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jabatan</th>
                                        <th>Lama Bekerja</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($post->id); ?></td>
                                            <td><?php echo e($post->title); ?></td>
                                            <td><?php echo e($post->body); ?></td>
                                            <td>
                                            <a href="/delete-post/<?php echo e($post->id); ?>" class="btn btn-danger">Hapus</a>
                                            <a href="/edit-post/<?php echo e($post->id); ?>" class="btn btn-success">Edit</a>
                                            <a href="/upload" class="btn btn-info">Upload Bukti</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/home/post.blade.php ENDPATH**/ ?>