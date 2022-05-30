<?php include("include/db.php") ;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $config["title"];?></title>

	<!-- Bootstrap Grid -->
	<link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Custom -->
	<link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

	<div id="wrapper">

	<?php include("include/header.php") ;?>

		<div id="content">
			<div class="container">
				<div class="row">
					<section class="content__left col-md-8">
						<div class="block">
							<a href="/categories.php">Все записи</a>
							<h3>Новейшее_в_блоге</h3>
							<?php ; 

							
							?>
							<div class="block__content">

								<div class="articles articles__horizontal">

								<?php
								$qart = mysqli_query($conn, "select * from articles order by id desc limit 6");								

								while ($art = mysqli_fetch_assoc($qart)){
									?>
									<article class="article">
										<div class="article__image" style="background-image: url(/static/images/<?php echo $art["image"]; ?>);"></div>
										<div class="article__info">
											<a href="articles.php?id= <?php echo $art["id"]; ?> "><?php echo $art["title"]; ?></a>
											<div class="article__info__meta">

											<?php 	
											foreach ($categories as $c){
												if($c["id"] == $art["categories_id"]){ ?>
												
													<small>Категория: <a href="categories.php?id=<?php 
												echo $art["categories_id"]; ?>"><?php echo $c["title"]?>
												</a></small>
											<?php break;	} else {?>
												<!-- <small>Нет категории</small> -->

												<?php }


											}?>
												
											</div>
											<div class="article__info__preview"><?php echo mb_strcut( $art["text"],0, 70, "utf8"); ?> ...</div>
										</div>
									</article>
								
								<?php }			
								?>

									

								</div>
							</div>
						</div>

						<div class="block">
							<a href="/categories.php?id=6">Все записи</a>
							<h3>Безопасность [Новейшее]</h3>
							<?php ; 

							
							?>
							<div class="block__content">

								<div class="articles articles__horizontal">

								<?php
								$qart = mysqli_query($conn, "select * from articles where categories_id = 6 order by id desc limit 6");								

								while ($art = mysqli_fetch_assoc($qart)){
									?>
									<article class="article">
										<div class="article__image" style="background-image: url(/static/images/<?php echo $art["image"]; ?>);"></div>
										<div class="article__info">
											<a href="articles.php?id= <?php echo $art["id"]; ?> "><?php echo $art["title"]; ?></a>
											<div class="article__info__meta">

											<?php 	
											foreach ($categories as $c){
												if($c["id"] == $art["categories_id"]){ ?>
												
													<small>Категория: <a href="categories.php?id=<?php 
												echo $art["categories_id"]; ?>"><?php echo $c["title"]?>
												</a></small>
											<?php break;	} else {?>
												<!-- <small>Нет категории</small> -->

												<?php }


											}?>
												
											</div>
											<div class="article__info__preview"><?php echo mb_strcut( $art["text"],0, 70, "utf8"); ?> ...</div>
										</div>
									</article>
								
								<?php }			
								?>

									

								</div>
							</div>
						</div>

						<div class="block">
							<a href="#">Все записи</a>
							<h3>Программирование [Новейшее]</h3>
							<div class="block__content">
								<div class="articles articles__horizontal">

									<article class="article">
										<div class="article__image"></div>
										<div class="article__info">
											<a href="#">Название статьи</a>
											<div class="article__info__meta">
												<small>Категория: <a href="#">Программирование</a></small>
											</div>
											<div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image"></div>
										<div class="article__info">
											<a href="#">Название статьи #2</a>
											<div class="article__info__meta">
												<small>Категория: <a href="#">Lifestyle</a></small>
											</div>
											<div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image"></div>
										<div class="article__info">
											<a href="#">Название статьи #3</a>
											<div class="article__info__meta">
												<small>Категория: <a href="#">Программирование</a></small>
											</div>
											<div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image"></div>
										<div class="article__info">
											<a href="#">Название статьи #4</a>
											<div class="article__info__meta">
												<small>Категория: <a href="#">Lifestyle</a></small>
											</div>
											<div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
										</div>
									</article>

								</div>
							</div>
						</div>
					</section>
					<section class="content__right col-md-4">
					<!-- SIDEBAR -->
		<?php include("include/sidebar.php") ;?>
					</section>
				</div>
			</div>
		</div>


					<!-- FOOTER -->
		<?php include("include/footer.php") ;?>

	</div>

</body>
</html>