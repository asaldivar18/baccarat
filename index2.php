<?php include("header.php") ?>
 <?php 
        function drawplayer() {
    $playernum = rand(1,10);
    $extra = rand(1,10);
    if ($playernum < 7){
        $playernum += $extra;
    if ($playernum > 10)
        $playernum -= 10;
    if ($playernum > 20)
        $playernum -= 20;
        
    };
    if ($playernum == 10 || $playernum == 20)
        $playernum = 0;
        $_SESSION["playernum"] = $playernum;
    echo $playernum;
    }


    function drawbanker() {
    $bankernum = rand(1,10);
    $extra = rand(1,10);
    if ($bankernum < 7){
        $bankernum += $extra;
    if ($bankernum > 10)
        $bankernum -= 10;
            if ($bankernum > 20)
            $bankernum -= 20;
    };
        if ($bankernum == 10 || $bankernum == 20)
        $bankernum = 0;
        
        $_SESSION["bankernum"] = $bankernum;
    echo $bankernum;
    }
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
    <div class="col-lg-6"><h2>Player has <?php drawplayer() ?></h2>
    </div>
    <div class="col-lg-6"><h2>Banker has <?php drawbanker(); ?></h2></div>
    <p style="color:red"><?php result();?></p>
    <p></p>
    <div class="col-lg-12">
            <a href="index2.php"class="btn btn-default btn-lg btn-block">Next round</a>
    </div>
    <div id="hide">used 2 this</div>
    <div><?php echo   "Player score:" . $_SESSION["playercount"] ." Banker score:". $_SESSION["bankercount"];?></div>
</div>
    <div id="clockbox"></div>
<?php include ("footer.php") ?>
