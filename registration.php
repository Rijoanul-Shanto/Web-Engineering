<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Output</title>
  </head>
  <body>
    <img src="img/background.png" alt="Cover photo" width="100%" height="400">
    <h1>Welcome!</h1>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Name: <?php echo $_POST['name'] ?> <br>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Email: <?php echo $_POST['email'] ?> <br>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Mobile: <?php echo $_POST['mobile'] ?> <br>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Address: <?php echo $_POST['address'] ?> <br>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Section: <?php echo $_POST['section'] ?> <br>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Gender:
    <?php
      if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo "Male";
      else echo "Female";
     ?> <br>
     <img src="img/default.png" alt="Default" width="1%" height="1%">
     You are interested in:
    <?php
      if (!empty($_POST['interest'])) {
        foreach ($_POST['interest'] as $selected) {
          echo $selected;
          echo " ";
        }
      }
    ?> <br>
    <img src="img/default.png" alt="Default" width="1%" height="1%">
    Your Date of Birth is: <?php echo $_POST['dateofbirth']; ?> <br> <br>

    <img src="img/back.png" alt="Back" height="30px" width="30px">
    <a href="registration.html">BACK</a>
  </body>
</html>
