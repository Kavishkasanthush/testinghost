

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once(get_template_directory() . '/testing.php');
    
    $meta_value = get_user_meta(9, "schooltest", true );

    // assuming that the meta_value is stored as a serialized array
    $meta_values = unserialize($meta_value);

    $first_value = $meta_values[0];
    $second_value = $meta_values[1];

    echo $first_value;
    echo $second_value;
    ?>
</body>
</html>