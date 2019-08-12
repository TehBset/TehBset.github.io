
  <?php 
  include 'include/top.php';
  include 'include/header.php';
   ?>
   
   <section class="top-slide">
      <div class="top-container">
      <div>
        <h2 id='home'><a>RENTKAP</a></h2>
      </div>
      <div>
        <h2>БУДУЩЕЕ СРЕДИ НАС</h2>
      </div>
      <div><p>Управляем вашими</p></div>
      <div><p>обьектами за вас</p></div>
      </div>
      <div class="top-container1">
          <div class="top-container1_content">
            <h1>Наши преимущества:</h1>
            <ul>
              <li>  &#10004;Скорость</li>
              <li>  &#10004;Удобство</li>
              <li>  &#10004;Гибкость в ценах</li>
              <li>  &#10004;Проффесионализм</li>
              <li>  &#10004;Персональный подход</li>
            </ul>
          </div>
      </div>
    </section>
  <main>
  	<section class="spec">
  		<div class="zag"><h1 id="services"><a>НАШИ УСЛУГИ</a></h1><hr style="margin-top:2vh;">
        </div>
  		<div class="specialise-container_top">
  			<div class="left cont">
  				<a href="#services1" class="scrollto"><div class="filter">
  					<h1>Управление <br>недвижимостью</h1>
  				</div></a>
  			</div>
  			<div class="right cont">
  				<a href="#pomesh1" class="scrollto"><div class="filter">
  					<h1>Аренда <br>помещений</h1>
  				</div></a>
  			</div>
  		</div>
  	</section>
  	<section class="specialise">
  		<div class="specialize-container">  		
  		<div class="zag">
      <h1 id="services1"><a>Управление недвижимостью</a></h1><hr style="margin-top:2vh;">
      </div>
      <div class="fthcard">
      		<div class="card">
          <img src="img/Fix.png" alt="image"> 
          <p class="name">
            Техническое <br>
            обслуживание
          </p> 
          </div>
      		<div class="card">
            <img src="img/download.png" alt="image">
          <p class="name">
            Ремонт и<br> строительство
          </p>  
          </div>
          <div class="card">
            <img src="img/legal.png" alt="">
            <p class="name">
              Юридические <br>
              услуги  
            </p>  
          </div>
      </div>
      <div class="fthcard">
          <div class="card">
            <img src="img/arendators.png" alt="image"> 
          <p class="name">
            Наполнение  <br>
            арендаторами
          </p>   
          </div>
          <div class="card">
            <img src="img/klin.jpg" alt="">
            <p class="name">
              Клининг  
            </p>  
          </div>
      </div>
  	</div>
  	</section>
  	<!-- <section class="portfolio">
      <h3 id='rooms'><a>АРЕНДА ПОМЕЩЕНИЙ</a></h3>
      <p>Очень легкая арнеда</p>
      <div class="toggles">
        <button id="showall">ВСЕ</button>
        <button id="webdev">ЛЕНИНСКИЙ</button>
        <button id="webdesign">ОКТЯБТЬСКИЙ</button>
        <button id="graphd">ФРУНЗЕНСКИЙ</button>
      </div>
      <div class="posts">
        <div class="post webdev"><a href="area.php"><img src="img/dom1.jpg" alt="RentKap"></a></div>
        <div class="post webdesign"><a href="area.php"><img src="img/dom2.jpg" alt="RentKap"></a></div>
        <div class="post graphd"><a href="area.php"><img src="img/dom3.jpg" alt="RentKap"></a></div>
      </div><div class="posts">
        <div class="post webdev"><a href="area.php"><img src="img/dom4.jpg" alt="RentKap"></a></div>
        <div class="post webdesign"><a href="area.php"><img src="img/dom5.jpg" alt="RentKap"></a></div>
        <div class="post graphd"><a href="area.php"><img src="img/dom6.jpg" alt="RentKap"></a></div>
      </div>
    </section> -->
    <section>
      <div class="zag">
      <h1 id="pomesh1" style="margin-top: 10vh;">АРЕНДА ПОМЕЩЕНИЙ</h1>
      <hr>
      </div>
      <div class="zag"> 
      <h1 style="text-decoration: underline;">
      <a id="cath" href="area.php" >
        >>каталог помещений<<
      </a>
      </h1>
      </div>
      <div id="naF">
     <button onclick="switch1()" id="but1">ФОТО</button>/<button onclick="switch2()" id="but2">КАРТА</button></div>
      <div class="content_dem">
        <div id="carousel-example-2" class="carousel slide carousel-fade index" data-ride="carousel">
  <ol class="carousel-indicators" srtyle="margin-bottom:0!important;">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/slider1.jpg"
          alt="First slide">
          <div class="carousel-caption d-none d-md-block">
                 <h3>Наши помещения</h3>
            </div>
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/slider5.jpg"
          alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
                 <h3>Наши помещения</h3>
            </div>
        <div class="mask rgba-black-strong"></div>
      </div>
      
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/slider4.jpg"
          alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
                 <h3>Наши помещения</h3>
            </div>
        <div class="mask rgba-black-slight"></div>
      </div>
     
    </div>
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
<div id="right1">
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ef16429375d9d48f5b1e7740008114ccd060575f26ebd531d5e992b0581d759&amp;width=100%&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
</div>
</section>
<section id="partners">
  
</section>

  </main>
   <div id="back-top">
<a href="#logo" class='scrollto' onclick='return up()'>ВВЕРХ</a>  
</div>   
 <script type="text/javascript">
    var map = document.getElementById("right1");
var slider = document.getElementById("carousel-example-2");
var but1 = document.getElementById('but1');
var but2 = document.getElementById('but2');
map.style.display = "none";
function switch1(arg) {
  map.style.display = "none";
  slider.style.display = "block";
  but1.style.color = "#ffd400";
  but2.style.color = "#434343"
}
function switch2(argument) {
  map.style.display = "inline";
  slider.style.display = "none";
  but2.style.color = "#ffd400";
  but1.style.color = "#434343"
}
  </script>
  <?php 
  include 'include/footer.php';
   ?>
 
 
