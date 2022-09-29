<html>
<head><meta charset="utf-8"></head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>
    <div style="display:flex">
        <div>
            <img src='member_photo/<?=$row["name"]?>.jpg' width='200'>
        </div>
        <div style = "padding: 15px">
            <h2><?=$row["name"]?></h2><br>
            ที่อยู่:<?=$row["address"]?><br>
            เบอร์โทร:<?=$row["mobile"]?><br>
            อีเมล์:<?=$row["email"]?><br> 
        </div>
    </div>
    
</body>
</html>
