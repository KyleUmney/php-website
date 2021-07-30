<?php
$username = "oyyou";
$instaResult = file_get_contents("http://www.reddit.com/r/RealBeesFakeTopHats/new.json?sort=new&limit=5");
$insta = json_decode($instaResult);
$children = $insta->data->children;
var_dump($insta->data->children[0]->data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php include("components/nav.php") ?>
        <h1>The BEEES</h1>
        <?php
        foreach ($children as $child) { ?>
            <div class="post-container" id="<?= $child->data->id ?>">
                <?php if (isset($child->data->thumbnail)) : ?>
                    <img src="<?= $child->data->thumbnail ?>">
                <?php endif; ?>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>