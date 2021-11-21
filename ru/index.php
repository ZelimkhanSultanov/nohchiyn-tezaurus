<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Тезаурус чеченского языка"> 
	<meta name="keywords" content="тезауруз, чеченский тезаурус, тезаурус чеченского языка"> 
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/tezaurus.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
	<title>Чеченский тезаурус</title>
</head>
<body>
<div id="tez_block">
	<div id="lang_block">
		<a href="/"><img src="/images/ce.png" width="26">&nbsp;Нохчийн</a>
	</div>
	<header>
		<a href="/ru/" id="logo" title="Чеченский тезаурус" ></a>
		<h1><a id="tezaurus" href="/ru/"  title="Чеченский тезаурус">Лексико-семантический тезаурус чеченского языка</a></h1>
		<span class="author">Абдулкадыров А.Т.</span>
		<h2>Добро пожаловать!</h2>	
	</header>
	<div id="tez_form">
		<input type="text" name="word" id="word" placeholder="Введите слово для поиска..." />
		<button id="tez_btn"  title="Найти">Найти</button>
	</div>
	<span id='error_empty_word'>Вы не ввели слово!!!</span>
    <span id='error_no_word'>Слово не найдено в базе!!!</span>
	<div id="result"></div>
<!--     <div id="tez_info">
        <h2 align="center">Добро пожаловать в чеченский тезаурус.</h2>	
    </div> -->
</div>
<footer>
	<div class="footer-block">
		<span class="copy">&#xa9; <?php echo date ('Y'); ?> г. </span>
		<span class="footer-txt">АКАДЕМИЯ НАУК ЧЕЧЕНСКОЙ РЕСПУБЛИКИ. ОТДЕЛ ПРИКЛАДНОЙ СЕМИОТИКИ.</span>
	</div> 
</footer>
</body>
</html>
