<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('5FCeAqP')) {
    $componentId = $_instance->getRenderedChildComponentId('5FCeAqP');
    $componentTag = $_instance->getRenderedChildComponentTagName('5FCeAqP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5FCeAqP');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('5FCeAqP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="guru1.jpeg" class="d-block w-100" alt="gambar 1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Penunjang Untuk Administrasi </h5>
                      <p>Sebagai bentuk kegiatan arsip dilingkungan sekolah yang terupdate</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="guru2.jpg" class="d-block w-100" alt="gambar 2">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 style="color: black">Disupport langsung oleh PD Dikti</h5>
                      <p style="color: black">PD Dikti merupakan pangkalan data yang bertugas untuk menyimpan arsip diseluruh lembaga pendidikan diindonesia</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="guru3.jpg" class="d-block w-100" alt="gambar 3">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Legalitas itu perlu</h5>
                      <p>legaslitas sangatlah diperlukan dalam menunjang kegiatan disekolah</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>

              <div class="container">
                <div class="row">
                  <div class="col-9" style="text-align: center">
                    <h3>Olah Data Inventaris</h3>
                    <br>
                </div>
                  <div class="col-4">
                    <img src="olah1.jpg" width="200px" height="200px">
                  </div>
                  <div class="col-6" style="text-align: left">Yang termasuk barang inventaris kelas antara lain; meja dan kursi siswa, meja dan kursi guru, lemari kelas, lambang negara, foto presiden dan wakil presiden, papan tulis dan papan absen.
                    <br>
                    <br>
                    <a href="post" class="btn btn-primary">Data Inventaris</a>
                </div>
              </div>
              <br>
              <br>

              <div class="container-down">
                <div class="row">
                  <div class="col-9" style="text-align: center">
                    <h3>Rekap Nama Siswa</h3>
                    <br>
                </div>
                  <div class="col-4">
                    <img src="siswa1.jpg" width="200px" height="200px">
                  </div>
                  <div class="col-6" style="text-align: left">Menurut Sudirman (2003) pengertian siswa adalah orang yang datang ke sekolah untuk memperoleh atau mempelajari beberapa tipe pendidikan. Pada masa ini siswa mengalami berbagai perubahan, baik fisik maupun psikis. Selain itu juga berubah secara kognitif dan mulai mampu berpikir abstrak seperti orang dewasa.
                    <br>
                    <br>
                    <a href="siswas" class="btn btn-primary">Data Siswa</a>
                        
                </div>
              </div>




<?php echo $__env->yieldContent('navbar4'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\UTSOkkyPembasdat\resources\views/layouts/mainpage2.blade.php ENDPATH**/ ?>