<?php 
$top_articles = mysqli_query($conn, "select * from articles order by views desc limit 5")

?>
<div class="block">
							<h3>Мы_знаем</h3>
							<div class="block__content">
								<script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
							</div>
						</div>

						<div class="block">
							<h3>Топ читаемых статей</h3>
							<div class="block__content">
								<div class="articles articles__vertical">

								<?php 
								foreach($top_articles as $ta){ 
									
									$cat_for_top = false;									
									
									foreach($categories as $cat ){
										if($cat["id"] == $ta["categories_id"]){
											$cat_for_top = $cat["title"]; 					
										}
									}
									
									?>

									
									<article class="article">
										<div class="article__image" style="background-image: url(/static/images/<?php echo $ta["image"]; ?>);"></div>
										<div class="article__info">
											<a href="article.php?id=<?php echo $ta["id"]; ?>"><?php echo $ta["title"]; ?></a>
											<div class="article__info__meta">
												<?php
												if($cat_for_top){
													echo "<small>Категория: <a href=\"\">$cat_for_top</a></small>";
												}
												?>
												
											</div>
											<div class="article__info__preview"><?php echo 
											mb_strcut($ta["text"],0,50, "utf-8"); ?> ...</div>
										</div>
									</article>

									<?php }
								?>

									

								

								</div>
							</div>
						</div>

						<div class="block">
							<h3>Комментарии</h3>
							<div class="block__content">
								<div class="articles articles__vertical">

									<article class="article">
										<div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
										<div class="article__info">
											<a href="#">Jonny Flame</a>
											<div class="article__info__meta">
												<small><a href="#">Название статьи #1</a></small>
											</div>
											<div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла бла бла ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
										<div class="article__info">
											<a href="#">Jonny Flame</a>
											<div class="article__info__meta">
												<small><a href="#">Название статьи #1</a></small>
											</div>
											<div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла бла бла ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
										<div class="article__info">
											<a href="#">Jonny Flame</a>
											<div class="article__info__meta">
												<small><a href="#">Название статьи #1</a></small>
											</div>
											<div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла бла бла ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
										<div class="article__info">
											<a href="#">Jonny Flame</a>
											<div class="article__info__meta">
												<small><a href="#">Название статьи #1</a></small>
											</div>
											<div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла бла бла ...</div>
										</div>
									</article>

									<article class="article">
										<div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
										<div class="article__info">
											<a href="#">Jonny Flame</a>
											<div class="article__info__meta">
												<small><a href="#">Название статьи #1</a></small>
											</div>
											<div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла бла бла ...</div>
										</div>
									</article>

								</div>
							</div>
						</div>