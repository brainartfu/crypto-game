<?php
/*
🦉 Justin Faler
🧪 https://github.com/Jfaler
🧠 Base 64: UHJvcGVydHkgb2YgQml0bGl0cy5jb20gLyBQbGVhc2UgY29udGFjdCBpbW1lZGlhdGVseSBpZiB0aGlzIHByb2R1Y3QgaXMgdW5saWNlbnNlZC4=
*/

$content = array(
	"title" => $settings["name"],
	"about" => true,
	"pagecss" => "about",
);

$content = array_merge($content,$settings);
echo $m->render("pages/about", $content);
// 🧬 Property of Bitlits.com ©2013-2019
?>
