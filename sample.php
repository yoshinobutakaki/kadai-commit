<?php
    $result="無し";
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p>おみくじ結果：<?php print htmlspecialchars($result, ENT_QUOTES, "UTF-8");?></p>
        <form action="sumple.php" method="POST">
            <botton type="submit" name="act" value="drow">おみくじを引く！</botton>
        </form>
    </body>
</html>