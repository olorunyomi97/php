<?php include "templates/header.php"; ?>
    <h2> Add a user </h2>
    
     <form method="post">
        <label for="firstname">First Name </label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Last Name </label>
        <input type="text" name="lastname" id="lastname">

        <label for="email">Email Address </label>
        <input type="text" name="email" id="email">

        <label for="firstname">Location </label>
        <input type="text" name="location" id="location">

        <input type="submit" name="submit" value="submit">
     </form>
     
     <a href="index1.php">Back to Home</a>
     
<?php include "templates/footer.php"; ?>

