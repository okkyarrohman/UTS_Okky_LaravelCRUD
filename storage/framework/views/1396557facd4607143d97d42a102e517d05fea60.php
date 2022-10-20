
<?php $__env->startSection('navbar3'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Inventaris
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('inven_created')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(Session::get('inven_created')); ?>

                                </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('inven.create')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="title">Nama Barang</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Barang" />
                                </div>

                                <div class="form-group">
                                    <label for="body">Kondisi</label>
                                    <textarea name="body" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo e(route('upload.uploadfile')); ?>" enctype="multipart/form-data">
                                     <?php echo csrf_field(); ?>
                                     <div class="form-group">
                                         <label for="file">Pilih File</label>
                                         <input type="file" class="form-control" name="file" id="file"/>
                                     </div>
                                  
                                    </form>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/add-inven.blade.php ENDPATH**/ ?>