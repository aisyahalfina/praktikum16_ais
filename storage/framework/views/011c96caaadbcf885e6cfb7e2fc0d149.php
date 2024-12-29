<div class="container mt-4">
    <h4><?php echo e($pageTitle); ?></h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <!-- Kondisional untuk menentukan ikon berdasarkan $pageTitle -->
        <div
            class="<?php if($pageTitle === 'Home'): ?> bi-house-fill
                    <?php elseif($pageTitle === 'Profile'): ?> bi-person-circle
                    <?php else: ?> bi-file-earmark <?php endif; ?> me-3 fs-1">
        </div>
        <h4 class="mb-0">Well done! this is <?php echo e($pageTitle); ?>.</h4>
    </div>
</div>
<?php /**PATH C:\Users\LENOVO\Documents\Kuliah\Semester 3\Pengembangan Aplikasi Website\File Project\Semester 3\Laravel baru\Praktikum14\ais_prak_database_14\resources\views/default.blade.php ENDPATH**/ ?>