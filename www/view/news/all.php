<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php foreach($items as $value):?>
    <h1><?php echo $value ->title?></h1>
    <div>
        <?php echo $value->text?>
        <?php echo $value->date?>
    </div>
<?php endforeach; ?>

</body>
</html>