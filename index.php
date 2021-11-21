<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Нохчийн тезаурус"> 
	<meta name="keywords" content="тезауруз, чеченский тезаурус, нохчийн тезаурус, тезаурус чеченского языка"> 
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/tezaurus.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<title>Нохчийн тезаурус</title>
</head>
<body>

<div id="tez_block">
	<div id="lang_block">
		<a href="ru/"><img src="images/ru.png" width="26">&nbsp;Русский</a>
	</div>
	<header>
		<a href="/" id="logo" title="Нохчийн тезаурус" ></a>
		<h1><a id="tezaurus" href="/"  title="Нохчийн тезаурус">Нохчийн меттан лексикин-семантикин тезаурус</a></h1>
		<span class="author">Абдулкадыров Турпал-Iелин Адам</span>
		<h2>Марша догӀийла!</h2>	
	</header>
	<div id="tez_form">
		<input type="text" name="word" id="word" placeholder="Лоху дош дӀаязде..." />
		<button id="tez_btn"  title="Лаха">Лаха</button>
	</div>
	<span id='error_empty_word'>Дош дӀа ца яздина ахь!!!</span>
    <span id='error_no_word'>Дош бази чохь кара ца до!!!</span>
	<div id="result"></div>
<!--     <div id="tez_info">
        <h2 align="center">Добро пожаловать в чеченский тезаурус.</h2>	
    </div> -->
    
</div>
<footer>
	<div class="footer-block">
		<span class="copy">&#xa9; <?php echo date ('Y'); ?> г.</span>
		<span class="footer-txt"> НОХЧИЙН РЕСПУБЛИКИН ӀИЛМАНИЙН АКАДЕМИ. ПАЙДЕ СЕМИОТИКИН ОТДЕЛ.</span>
	</div> 
</footer>
</body>
</html>
