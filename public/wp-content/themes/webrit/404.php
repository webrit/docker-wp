<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage wmagnet theme
 */
get_header(); // Подключаем header.php ?>

<style>
	html {
		margin-top: 0px !important;
	}

	body {
		box-sizing: border-box;
		margin: 0;
	}

	#notfound {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		height: 100vh;
		font-family: sans-serif;
		text-align: center;
	}

	#notfound p {
		max-width: 600px;
		width: 100%;
		font-weight: 200;
	}

	#notfound h1 {
		font-size: 186px;
		color: red;
		margin: 0;
	}

	#notfound h2 {
		font-size: 33px;
		font-weight: 200;
		text-transform: uppercase;
		margin-top: 0px;
		margin-bottom: 15px;
		letter-spacing: 3px;
	}
</style>

<section id="notfound">
	<div class="notfound-404">
		<h1>404</h1>
	</div>
	<h2>Упс! Ничего не найдено</h2>
	<p>Страница, которую вы ищете, могла быть удалена, если ее имя было изменено или временно недоступно. <br><br> <a
			href="/">Вернуться на главную</a></p>



</section>
<?php get_footer(); // подключаем footer.php ?>