<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <?php
        $dshocsinh = [];
        $dshocsinh[] = [
            "name"=>"Nguyen Van An",
            "age"=>18
        ]; // them 1 mang co cac key value
        $dshocsinh[] = [
            "name"=>"Nguyen Minh Duc",
            "age"=>20
        ];
        $dshocsinh[] =  [
            "name"=>"Dao Duy Anh",
            "age"=>21
        ];
    ?>
    <ul>
    <?php foreach ($dshocsinh as $hs){ ?>
        <li><?php echo $hs["name"]."--".$hs["age"]; ?></li>
    <?php  } ?>
    </ul>
    <a href="index.php">Quay về trang chủ</a>
</body>
</html>