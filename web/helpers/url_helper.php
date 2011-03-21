<?php

define('IS_ABSOLUTE_URL', true);

function url_for_book($page_name, $absolute=false) {
	return url_for("/book/?p=" . $page_name, $absolute);
}

function url_for_news($page_name, $absolute=false) {
	return url_for("/news/?p=" . $page_name, $absolute);
}
