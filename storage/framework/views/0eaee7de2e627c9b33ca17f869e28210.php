<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Example</title>
</head>

<body>
    <form action="<?php echo e(route('upload-example')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="avatar">
        <button type="submit">Upload</button>
    </form>
</body>

</html>
<?php /**PATH C:\Users\LENOVO\Documents\Kuliah\Semester 3\Pengembangan Aplikasi Website\File Project\Semester 3\Laravel baru\Praktikum16\ais_prak_16\resources\views/upload_example.blade.php ENDPATH**/ ?>