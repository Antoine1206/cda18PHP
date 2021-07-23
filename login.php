<?php
include_once 'includes/header.php';
?>

<link rel="stylesheet" href="style.css" media="screen" type="text/css" />

<div id="container">
    <!-- zone de connexion -->
    
    <form action="login.php" method="POST">
        <h1>Connexion</h1>
        
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >

        <?php
        if(isset($_POST['password']) && isset($_POST['username'])){
            if($_POST['password'] == $motDePasse){
                header("Location: index.php");
                $_SESSION['username'] = $_POST['username'];
            } else {
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";}
        }?>



    </form>
</div>



<?php

include_once 'includes/footer.php';

?>