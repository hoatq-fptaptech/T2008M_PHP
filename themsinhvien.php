<?php include_once "session.php";?>
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
<h1>Tài khoản đang sử dụng: <?php echo $_SESSION["user"]["username"]; ?></h1>
       <form action="luusinhvien.php"  method="POST">
           <input type="text" name="name" placeholder="Name.."/>
           <input type="number" name="age" placeholder="Age.."/>
           <textarea name="address" placeholder="Address"></textarea>
           <button type="submit">Submit</button>
       </form>
</body>
</html>