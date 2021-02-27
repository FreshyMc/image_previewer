<?php 
    $imgs_dir = './imgs';

    $imgs = array_diff(scandir($imgs_dir), ['.', '..']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Previewer [Beta]</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php foreach($imgs as $img): ?>
    <div class="img-preview">
    <p><?php echo $img; ?></p>
    <img src="<?php echo $imgs_dir . '/' .  $img; ?>" alt="#">
    </div>
    <?php endforeach; ?>
</body>
</html>