
<?php $__env->startSection('navbar3'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Data Inventaris Barang
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('post_created')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(Session::get('post_created')); ?>

                                </div>
                            <?php endif; ?>
                            <form method="POST" action="/update-post/<?php echo e($post->id); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="title">Nama Barang</label>
                                    <input type="text" name="title" class="form-control" value="<?php echo e($post->title); ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="body">Jumlah</label>
                                    <textarea name="body" class="form-control" rows="3"><?php echo e($post->body); ?></textarea>
                                </div>


                                <div class="card-body">
                                    <form method="POST" action="<?php echo e(route('upload.uploadfile')); ?>" enctype="multipart/form-data">
                                     <?php echo csrf_field(); ?>
                                     <div class="form-group">
                                         <label for="file">Upload File</label>
                                         <input type="file" class="form-control" name="file" id="file"/>
                                     </div>
                                     <br>
                                     <button type="submit" class="btn btn-success">Update Data</button>
                                    </form>


                                    <a href="/post" class="btn btn-primary">Menu Data</a>
                                 </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/edit-post.blade.php ENDPATH**/ ?>