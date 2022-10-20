

<?php $__env->startSection('navbar3'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            Tampilan Data <a href="/add-post" class="btn btn-success">Input Data</a>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('post_createed')): ?>
                            <div class="alert alert success" role="alert">
                                <?php echo e(Session::get('post_created')); ?>

                            </div>
                            <?php endif; ?>
                           <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                    ?>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampilan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($tampilan->title); ?></td>
                                            <td><?php echo e($tampilan->body); ?></td>
                                            <td>
                                            

                                            <a href="/edit-post/<?php echo e($tampilan->id); ?>" class="btn btn-success">Edit</a>
                                            <a href="/delete/<?php echo e($tampilan->id); ?>" class="btn btn-danger">Hapus</a>
                                            
                                           
                
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/post.blade.php ENDPATH**/ ?>