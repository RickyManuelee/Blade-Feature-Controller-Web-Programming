<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('container'); ?>
    <figure class="text-center">
        <h1 class="mt-5">Welcome!</h1>
        <blockquote class="blockquote">
            <p>Website ini berisikan informasi saya</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Nama saya <cite title="Source Title">Ricky Manuelee</cite>
        </figcaption>

        <img src="https://source.unsplash.com/300x300?man" class="rounded mx-auto d-block" alt="...">
        <div class="mt-3">
            <small class="text-muted">Klik menu about untuk mengetahui tentang saya</small>
        </div>
    </figure>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Sem 5\Web Prog\LEC\Forum\Forum 1\GSLC Blade Feature\GSLC1\resources\views/Home.blade.php ENDPATH**/ ?>