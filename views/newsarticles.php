
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach($result as $row=>$oneItem)
{
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
    echo '<img class="fotos" src="images/'.$oneItem['image'].'">'.'<br>';
	echo '<content class="text">'.$oneItem['content'].'</content>';
	echo '</article>';
}

echo '</section>';
    ?>
</body>
</html>
