<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    date('h:i:s A');
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>How to put PHP in HTML- Date Example</title>
</head>
<body>
<div>This is pure HTML message.</div>
<div>Next, we’ll display today’s date and day by PHP!</div>
<div>
Today’s date is <b><?php echo date('Y/m/d') ?></b> and it’s a <b><?php echo date(‘l’) ?></b> today!
</div>
<div>Again, this is static HTML content.</div>
</body>
</html>