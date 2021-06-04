<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
    <?php
        $id = $_GET['id'];
        $id = $_GET["id"];// $_GET la 1 array voi cac key la key cua param tren url
        $ds = queryDB("select * from sinhviens where id = $id");
        if(count($ds) == 0){
            header("Location: list.php");
        }
        $sv = $ds[0];
    ?>
    <form action="capnhat.php"  method="POST">
        <input type="hidden" name="id" value="<?php echo $sv["id"];?>"/>
        <input type="text" name="name" value="<?php echo $sv["name"];?>" placeholder="Name.."/>
        <input type="number" name="age" value="<?php echo $sv["age"];?>" placeholder="Age.."/>
        <textarea name="address" placeholder="Address"><?php echo $sv["address"];?></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>