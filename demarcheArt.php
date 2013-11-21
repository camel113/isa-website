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
    <h1>Démarche artistique</h1>
    <?php if(isset ($_GET['page'])){if($_GET['page']==1){include('demarcheArtp1.php');}if($_GET['page']==2){include('demarcheArtp2.php');}} ?>
</div>
<div id="footer">
    <?php include('footer.php')?>
</div>
</div>
</body>
</html>
