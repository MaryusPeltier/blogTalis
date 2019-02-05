<?php 
require "header.php";
?>
    <form action="add_post_post.php" method="post">
        <input type="text" style="border:2px solid gray; border-radius:5px; padding:6px; text-decoration:none; color:black;" name="title" placeholder="Title">
        <textarea name="content" style="border:2px solid gray; border-radius:5px; padding:6px; text-decoration:none; color:black;" placeholder="Content"></textarea>
        <input type="submit" style="border:2px solid gray; border-radius:5px; padding:6px; text-decoration:none; color:black;" value="Valider">
    </form>
</body>
</html>