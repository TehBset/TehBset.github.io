<?php
include 'include/top.php';
include 'include/header.php';
$i=0;
?>
<section class="main_content_areas">
  <p style="color: #CDCDCD">Главная/обьекты</p>
  <div class="zag">
    <h1 style="margin-left: 0; color:#737373">Наши обьекты:</h1>
    <hr style="margin-left: 3.1%; width:35%;">
  </div>
  <?php
  include 'db_connect.php';
  $content = $mysqli->query ("SELECT * FROM type");
  foreach ($content as $single):
  $state = $single;
  $path = $state["img"];
  $dir  = "img/$path";
  $files1 = scandir($dir);
  $n = count($files1);
  if ($single["id"]):
  ?>
  
  <div class="preview">
    <div id="carousel-example-<?php echo $i; ?>" class="carousel slide carousel-fade area" data-ride="carousel" style="height: 100%; margin-top: -5vh; width:40%;">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-<?php echo $i; ?>" data-slide-to="0" class="active"></li>
        <?php for ($i = 3; $i < $n; $i++):?>
        <li data-target="#carousel-example-<?php echo $i; ?>" data-slide-to="<?php echo $i - 2; ?>"></li>
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
      
    </div>
    <div class="text_cont">
      <div id="left_tc" class="tc">
        <div class="zag"><h1 style="text-align:left;">
          <?php echo $single["name"];?></h1><h6 style="margin-left: 10px;margin-top:-10px;"><?php echo $single["type"]; ?> тип</h6>
        <p style="float:left; margin-left: 10px; width: 100%;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i><?php echo $single["location"]; ?></p></div>
        <div class="descript" style="text-align:left;
          width: 100%; margin-top: 4vh;">
          <p><?php echo $single["description"];?></p>
        </div>
      </div>
      <div id="right_tc" class="tc">
           <div class="cost">
          <p><b><?php echo $single["price"];?><i class="fas fa-ruble-sign"></i>/мес</b></p>
        </div>
          <div class="but">
            <a href="article.php?id=<?php echo $single["id"]; ?>"><b>подробнее</b></a>
          </div>
        </div>
    </div>
  </div>
  <?php endif ?>
 <!--  <?php  if ($single["id"] % 2 == 0):?>
 <div class="preview">
   <div class="text_cont">
     <div id="right_tc" class="tc">
          <div class="cost">
         <p><b><?php echo $single["price"];?><i class="fas fa-ruble-sign"></i>/мес</b></p>
       </div>
         <div class="but">
           <a href="article.php?id=<?php echo $single["id"]; ?>"><b>подробнее</b></a>
         </div>
       </div>
     <div id="left_tc" class="tc">
       <div class="zag"><h1 style="text-align:right;">
         <?php echo $single["name"];?></h1><h6 style="margin-right: 10px;margin-top:-10px; text-align: right;"><?php echo $single["type"]; ?> тип</h6>
       <p style="float:right; margin-right: 10px; width: 100%; text-align:right;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i><?php echo $single["location"]; ?></p></div>
       <div class="descript1" style="
         width: 100%; margin-top: 4vh;">
         <p><?php echo $single["description"];?></p>
       </div>
     </div>
   </div>
   <div id="carousel-example-<?php echo $i;?>" class="carousel slide carousel-fade area" data-ride="carousel" style="height: 100%; margin-top: -5vh; width:40%;">
     <ol class="carousel-indicators">
       <li data-target="#carousel-example-<?php echo $i;?>" data-slide-to="0" class="active"></li>
       <?php for ($i = 3; $i < $n; $i++):?>
       <li data-target="#carousel-example-<?php echo $i;?>" data-slide-to="<?php echo $i - 2; ?>"></li>
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
   </div>
 </div>
 <?php endif ?> -->
  <?php endforeach ?>
 
</section>
<div id="back-top">
  <a href="#logo" class='scrollto' onclick='return up()'>ВВЕРХ</a>
</div>
<?php
include 'include/footer.php' ?>