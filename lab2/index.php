<?php 
print_r($_POST);
    session_start();
    print_r($_SESSION);
    $message = "not_equal";
    //if(isset($_POST['csrf']) && isset($_SESSION['csrf'])){
        print "<br>".$_POST['csrf']. ".......".$_SESSION['csrf'];
        if($_POST['csrf'] == $_SESSION['csrf']){
            $message = "equal";
            
        }
    //}
    $_SESSION['csrf'] = md5(openssl_random_pseudo_bytes(32));
?>
<html>
    <h1>Web-Application-Security</h1>
    <form action="index.php" method="POST">
        <input type="hidden" value="<?php print $_SESSION['csrf']; ?>" name="csrf" />
        <input type="submit" value="submit" />
    </form> 
    <?php print $message; ?>
</html>