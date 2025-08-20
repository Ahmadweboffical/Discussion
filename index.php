<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Discussion</title>
    <?php include 'client/commonFile.php'; ?>
</head>
<body>
       <?php include 'client/header.php';
       if (isset($_GET['signup']))
         {
       include 'client/signup.php';
       }else if (isset($_GET['login.php']))
       {
       include 'client/login.php';
       }else{
        // Default case
       }
       ?>
</body>
</html>