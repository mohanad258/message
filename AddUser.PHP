<?php
$db = new mysqli('localhost', 'root', '', 'messageauthentication');
$action=false;

// بدء معالجة البيانات إذا تم إرسال النموذج
if (isset($_POST['sav'])) {
    // استخدام trim لإزالة الفراغات من الحقول
    $name1 = trim($_POST['Name']);
    $email = trim($_POST['Email']);
    $Validity2 = trim($_POST['Val']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);
    $phoneNumber = trim($_POST['phoneNumber']);
    
    // التحقق من إدخال جميع البيانات المطلوبة
    if (empty($name1) || empty($email) || empty($Validity2) || empty($password) || empty($phoneNumber)) {
        $error_message = "يرجى ملء جميع الحقول المطلوبة.";
    } else if ($password !== $password2) {
        // تحقق من تطابق كلمتي المرور
        $error_message = "كلمتا المرور لا تتطابقان.";
    } else {
        // تشفير كلمة المرور باستخدام SHA1
        $password_sha1 = sha1($password);
        
        // تحقق من وجود أخطاء في الاتصال
        if ($db->connect_error) {
            die("فشل الاتصال: " . $db->connect_error);
        }

        // استعلام الإدراج
        $q = "INSERT INTO `users` (`UserName`, `password`, `Validity`, `email`, `phonnumber`) VALUES ('$name1', '$password_sha1', '$Validity2', '$email', '$phoneNumber')";
        $r = $db->query($q);
        
        // تحقق من نجاح الاستعلام
        if ($r) {
            $action = true;
        } else {
            echo "خطأ في الإدخال: " . $db->error; // عرض رسالة الخطأ
        }
    } 
}

// استعلام لجلب جميع المستخدمين
$users_sql = "SELECT * FROM users";
$all_user = mysqli_query($db, $users_sql);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/toastr.css">
    <title>Users App</title>
</head>
 
<body>
    <div class="container">
         <div class="wrapper p-5 m-5">
 
         <div class="d-flex p-2 justify-content-between mb-2"> <!--لجعل الايقونة الى اليمين -->
            <div><h2>All Users</h2></div>
            <div><a href="InsertUser.php"><i data-feather="user-plus"></i></a></div><!-- لعرض الايقونة مع ادخال اسم الايقونة-->      
         </div>       
    </div>
<hr>
     <table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">password</th>
      <th scope="col">Validity</th>
      <th scope="col">email</th>
      <th scope="col">phon number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
                   <?php 
                    $index = 1; // عداد لترقيم الصفوف
                    while ($user = $all_user->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $index++; ?></td>
                            <td><?php echo htmlspecialchars($user['UserName']); ?></td>
                            <td><?php echo htmlspecialchars($user['password']); ?></td>
                            <td><?php echo htmlspecialchars($user['Validity']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php echo htmlspecialchars($user['phonnumber']); ?></td>
                            
                            <div class="d-flex p-2 justify-content-between mb-2">                
                        </tr>
                    <?php } ?>
                </tbody>
  </table>
 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/icon.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/main.js"></script>

    <?php 
if($action !=false){
    if($action==true) {?>
<<script>
Show_Add();
</script>    
<?php
}
}
?>
 
    <script>
        feather.replace();  
      </script>
</body>

</html>