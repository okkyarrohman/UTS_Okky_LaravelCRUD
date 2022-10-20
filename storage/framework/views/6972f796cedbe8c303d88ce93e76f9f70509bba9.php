
<?php $__env->startSection('navbar'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Upload Bukti
                        </div>
                        <div class="card-body">
                           <form method="POST" action="<?php echo e(route('upload.uploadfile')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="file">Pilih File</label>
                                <input type="file" class="form-control" name="file" id="file"/>
                            </div>
                            <button type="submit" class="btn btn-success">Upload</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views//home/upload.blade.php ENDPATH**/ ?>