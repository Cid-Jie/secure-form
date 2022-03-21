<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thanks</title>
</head>
<body>
<?php

  foreach ($_POST as $input => $value)
  {
    if (empty($value))
    {
      exit('Please fill in all fields');
    }
  }

  if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL))
    {
      exit('Please enter a valid email address');
    }    

  if (!filter_var($_POST['user_phone'], FILTER_SANITIZE_NUMBER_INT))
    {
      exit('Please enter a valid phone number');
    } 

?>
<div class="message">
    <p>Thank you  <?php echo "{$_POST['user_name']}"; ?> for contact us about <?php echo "{$_POST['about']}"; ?>.
    </p>
    <p>One of our advisers will contact you either at this mail : <?php echo "{$_POST['user_mail']}"; ?>or by phone at : <?php echo "{$_POST['user_phone']}"; ?> as soon as possible to process your request : 
    </p>
    <?php echo "{$_POST['user_message']}"; ?>
    </p>
</div>
</body>
</html>




