<!doctype html>
<html>
    <head>
        <title>Hi</title>
    </head>
    <body>
    
        <?php
            if(isset($_POST["name"])) {
                echo "Hi " . $_POST["name"] . ", enjoy this page!";
            }
            else{
        ?>
        <form method="post" action="index.php">
            Name : <input type ="text" name="name" size="12"><br>
            <input type="submit" value="Submit">
        </form>
       <?php }?>
    </body>
</html>
