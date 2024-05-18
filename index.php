<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="resource/style.css">
</head>
<body>
<div class="container">
  <form action="resource/form_action.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <input type="text" id="country" name="con_name" placeholder="Your country..">
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
  <?php
  if(isset($_GET['show'])&&$_GET['show']==1)
  {
    echo "<p>Submit Successful!!</p>";
  }
  ?>
</div>
</body>
</html>