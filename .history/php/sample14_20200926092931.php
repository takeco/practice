<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$date = sprintf('%04d年 % 2d月 % 2d日 %s',date('Y'),date('n'),date('j'), '金');
$news = file_get_contents('../news_data/news.txt');
$news .= "$date , ニュースを追加しました/n";
file_put_contents('../news_data/news.txt', $news);
readfile('../news_data/news.txt');
print($news);

// $s = $s . 'add';
// $s .= 'add';

?>
</pre>
</main>
</body>    
</html>