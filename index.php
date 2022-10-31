
<?php
   
    /*
    * Title: PHP User input sanitization
    * Descripttion: In this project working with php user sanitization and retain the submited data.
    * Author: Jakir hossain
    * Website: jakircse.com
    * Date: 01/11/2022
    * 
    */

    $fname = '';
    $lname = '';
    $email = '';
    $phone = '';

    if(isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['email']) && isset($_REQUEST['phone'])) {
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User input sanitization</title>

    <!-- miligram style link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- custom style link -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- result section -->
    <div class="container main">
        <h2 class="title">PHP User input sanitization</h2>
        <div class="row">
            <div class="column column-50 column-offset-20">
                
                <blockquote>First name: <?php echo $fname ?></blockquote>
                <blockquote>Last name: <?php echo $lname ?></blockquote>
                <blockquote>Email: <?php echo $email ?></blockquote>
                <blockquote>Phone: <?php echo $phone?></blockquote>
            </div>
        </div>
        <!-- result section end -->

        <!-- form section start -->
        <div class="row">
            <div class="column column-50 column-offset-20">
                <form action="index.php" method="POST">
                    <label for="fname">First name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" id="lname">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone">
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
        <!-- form section end -->
    </div>

</body>
</html>