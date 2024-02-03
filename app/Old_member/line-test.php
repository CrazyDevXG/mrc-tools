<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ชีวิตดี">
    <meta name="title" content="น้ำผักปั่น น้ำผักผลไม้ห้าสีปั่นสดๆส่งทุกวัน ดูแลสุขภาพเพื่อชีวิตที่ดี">
    <meta name="keywords" content="น้ำผักปั่น น้ำผักผลไม้ห้าสีปั่นสดๆส่งทุกวัน ดูแลสุขภาพเพื่อชีวิตที่ดี">
    <title>ทดสอบการส่ง Line Notify</title>
    <link rel="stylesheet" href="send.css">
</head>

<body>
<div class="wrapper">
    <form class="form-signin" action="line-notify.php" method="post">       
      <h2 class="form-signin-heading">แจ้งการชำระเงิน</h2>
      <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required="" autofocus="" />
      <input type="text" class="form-control" name="email" placeholder="อีเมล์" required=""/>    
      <input type="text" class="form-control" name="phone" placeholder="เบอร์โทร" required=""/>
      <input type="text" class="form-control" name="product" placeholder="สินค้า" required=""/>  
      <br>  <br>
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Send Line</button>   
    </form>
  </div>

</body>
</html>