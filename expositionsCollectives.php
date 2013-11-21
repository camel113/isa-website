<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php')?>
</head>
<body>
<div id="page">
<h1>Isabelle Pilloud</h1>
<div id="menu">
    <?php include('menu.php')?>
</div>
<div id="content">
    <h1 class="ChoixExpo" id="expoNonSelect"><a href="expositions.php">Expositions</a></h1>
    <h1 class="ChoixExpo" id="expoSelect" ><a href="expositionsCollectives.php?tab=1">Expositions collectives</a></h1>
    
    <?php if(isset($_GET['tab'])){if($_GET['tab']==1){include('tabExpoCollect3.php');}if($_GET['tab']==2){include('tabExpoCollect2.php');}if($_GET['tab']==3){include('tabExpoCollect1.php');}}?>
    
</div>
<div id="footer">
    <?php include('footer.php')?>
</div>
</div>
</body>
</html>
