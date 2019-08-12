
  <?php 
  include 'include/top.php';
  include 'include/header.php';
   ?>
  <main>
    <?php  
include 'db_connect.php';
$single = $_GET["id"];
$content = $mysqli->query ("SELECT * FROM type WHERE id=$single");
  foreach ($content as $value):
    $state = $value;
    $path = $state["img"]; 
    $dir  = "img/$path";
    $files1 = scandir($dir);
    $n = count($files1);
  ?>
<section class="main_content_areas cic">
  <p style="color: #CDCDCD">Главная/обьекты</p>
  <div class="zag">
  <h1 style="margin-left: 0; color:#737373"><?php echo $state["name"];?></h1>
  <hr style="margin-left: 3.1%; width:35%;">
  </div>
</section>
<section>
  <div id="main_con">
    <div id="left_m">
     <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="width:100%;">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <?php for ($i = 3; $i < $n; $i++):?>
    <li data-target="#carousel-example-2" data-slide-to="<?php echo $i - 2; ?>"></li>
   <?php endfor ?>
  </ol>
  <div class="carousel-inner" role="listbox">
  <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="<?php echo $dir;?>/<?php echo $files1[2]; ?>"
          alt="slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <?php for ($i = 3; $i < $n; $i++):?>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="<?php echo $dir;?>/<?php echo $files1[$i]; ?>"
          alt="slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <?php endfor ?>
  </div>
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
    <div id="right_m">
      <h3><?php echo $state["description"];?></h3>
      <script type="text/javascript" charset="utf-8" async src=<?php echo $state["card"];?>> </script>
       <p>Тип:<?php echo $state["type"];?></p>
      <p><b><?php echo $state["price"];?>руб/мес</b></p>
    </div>
  </div>
</section>
<?php endforeach ?>
  </main>
<?php include 'include/footer.php'; ?>