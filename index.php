<?php include("header.php");
    $_SESSION["playercount"];
$_SESSION["bankercount"];
?>
 <?php 
    function result(){
        if ($_SESSION["bankernum"] == $_SESSION["playernum"])
            echo "tie";
        else if ($_SESSION["bankernum"] > $_SESSION["playernum"]){
            echo "banker wins!";
            $_SESSION["bankercount"]++;
        }
        else if ($_SESSION["bankernum"] < $_SESSION["playernum"]){
            echo "player wins!";
            $_SESSION["playercount"]++;
}
           
    }


?>
<div id="player" class="jumbotron text-center">
    <h1 >Welcome Back</h1>
    <hr/>
    <div class="col-lg-6"><h2>Player has 0</h2>
    </div>
    <div class="col-lg-6"><h2>Banker has 0</h2></div>
    <p style="color:red"><?php result();?></p>
    <p></p>
    <div class="col-lg-12">
            <a href="index2.php"class="btn btn-default btn-lg btn-block">Start Round</a>
    </div>
    <div id="hide">used 2 this</div>
    <div><?php echo   "Player score:" . $_SESSION["playercount"] ." Banker score:". $_SESSION["bankercount"];?></div>
</div>
    <div id="clockbox"></div>
<?php include ("footer.php") ?>
