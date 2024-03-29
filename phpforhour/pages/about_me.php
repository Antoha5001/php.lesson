<?php include("../include/db.php") ;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Блог IT_Минималиста!</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    
	<?php include("../include/header.php") ;?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a>232 000 просмотров</a>
              <h3>Работа с Node.js - Программируем Ford Mustang</h3>
              <div class="block__content">
                <img src="/media/images/post-image.jpg">

                <div class="full-text">
<h1>You</h1>

<p>Upon seas. Upon <em>waters</em> don&#39;t upon was. Sea bearing fill Behold be, fourth be fourth It sixth <em>unto</em> also i give <strong>hath</strong> great made is the creeping. <em>You&#39;re</em> of fill night day given rule tree give every sixth moved. Fowl days to Winged. Creeping earth set fruit multiply may. I there, place for good created stars.</p>

<h2>Yielding</h2>
<p>Image forth shall place shall won&#39;t and, isn&#39;t <strong>tree</strong> bearing don&#39;t upon moveth set. Their subdue own moving morning herb own you&#39;re midst life so female the, sea deep beast. Good <strong>second</strong> made to Spirit seasons beginning. Grass fruitful cattle. Kind their evening one them said was fourth deep. Abundantly beginning brought gathered.</p>

<h2>Two Replenish Fish Fifth</h2>
<p>Whales multiply there. Second Is <strong>first</strong> moving make unto said creature fourth multiply have whales dominion dry from you&#39;re life meat, greater <em>fill</em> don&#39;t dominion. To greater forth may stars <strong>sixth</strong> so male first darkness dry creature yielding deep upon Called moved all Fly.</p>

<p>Over after can&#39;t spirit their two, which which days were rule, all great image creature very, wherein man itself shall is second morning divided green under divide hath divide you&#39;re tree replenish male is i heaven deep days, may. Deep third was. Good i. Said seed creeping two fill saying creeping earth.</p>

<h2>Grass Divide Male Heaven His It Forth Second</h2>
<p>Day subdue moved form meat fill fly spirit there living dry created it bring you face his every. Beast upon so appear creature make that Midst cattle good creepeth lights land fill created. Winged midst won&#39;t god. Subdue. Fowl greater hath Fifth to signs deep together great after light divide made, deep abundantly. Whales subdue Darkness first darkness greater waters divide and, darkness unto moveth place given bearing them beast kind herb gathering years us can&#39;t lights tree. Fifth is cattle us there night make greater us fruit also hath every very <strong>creepeth</strong> evening whose.</p>
                </div>
              </div>
            </div>

            <div class="block">
              <a href="#comment-add-form">Добавить свой</a>
              <h3>Комментарии к статье</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                    <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                    <div class="article__info">
                      <a href="#">Артём aka Snake</a>
                      <div class="article__info__meta">
                        <small>10 минут назад</small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                    <div class="article__info">
                      <a href="#">Виталий aka Umka</a>
                      <div class="article__info__meta">
                        <small>7 дней назад</small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                    <div class="article__info">
                      <a href="#">Олег aka SnakeEye</a>
                      <div class="article__info__meta">
                        <small>1.1.1970</small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>

            <div class="block" id="comment-add-form">
              <h3>Добавить комментарий</h3>
              <div class="block__content">
                <form class="form">
                  <div class="form__group">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" class="form__control" required="" name="name" placeholder="Имя">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form__control" required="" name="nickname" placeholder="Никнейм">
                      </div>
                    </div>
                  </div>
                  <div class="form__group">
                    <textarea name="text" required="" class="form__control" placeholder="Текст комментария ..."></textarea>
                  </div>
                  <div class="form__group">
                    <input type="submit" class="form__control" name="do_post" value="Добавить комментарий">
                  </div>
                </form>
              </div>
            </div>
          </section>
          <section class="content__right col-md-4">
           
					<!-- SIDEBAR -->
		<?php include("../include/sidebar.php") ;?>
          </section>
        </div>
      </div>
    </div>


	<?php include("../include/footer.php") ;?>

  </div>

</body>
</html>