

<?php $__env->startSection('navbar3'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            Tampilan Data <a href="/add-inven" class="btn btn-success">Input Data</a>
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
                                        <th>Nama Barang</th>
                                        <th>Kondisi Barang</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/inventaris.blade.php ENDPATH**/ ?>