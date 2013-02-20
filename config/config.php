<?php
$config	=	array();

// Массив задает разрешенные для незарегистрированного пользователя екшены / евенты
// В качестве ключа массива указывается необходимый роутер.
// В качестве значений - массив разрешенных евентов указанного роутера
// Если необходимо разрешить все евенты роутера, укажите пустой массив
// Смотрите примеры и не забудьте отключить родной "закрытый режим"

$config['allowedelements'] = array(

		'index' 		=> array()			,	// Главная страница
		'login'			=> array()			,	// Страница авторизации (не рекоммендую закрывать)
		'page'			=> array('about')	,	// Страница about модуля page
		'registration'	=> array()			,	// Страница регистрации (не рекоммендую закрывать)
		'rss'			=> array('index')	,	// Страница rss-потока
		'error'			=> array()			,	// Страница ошибки (не рекоммендую закрывать)
												// Ваши варианты
									);

return $config;

?>