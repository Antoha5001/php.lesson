<header id="header">
			<div class="header__top">
				<div class="container">
					<div class="header__top__logo">
						<h1><?php echo $config["title"];?></h1>
					</div>
					<nav class="header__top__menu">
						<ul>
							<li><a href="/">Главная</a></li>
							<li><a href="/pages/about_me.php">Обо мне</a></li>
							<li><a href="#">Я Вконтакте</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="header__bottom">
				<div class="container">
					<nav>
						<ul>
							<?php
								if ($conn == false){
									echo "Не удалось подключиться к БД";
									exit();
								} else {	
									echo "Подключено!";
									$categories = mysqli_query($conn, "select * from articles_categories");
									while($i = mysqli_fetch_assoc($categories)){
										echo "<li><a href=\"#\">{$i["title"]}</a></li>";
									}
								}
							?>
						</ul>
					</nav>
				</div>
			</div>
		</header>