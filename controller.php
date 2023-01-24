<h1>
    PHP - Badwords
</h1>

<p>
    <?php 
        echo $_GET['paragraph'];
    ?>
    <br>
    <?php 
        $sentence = 'Il paragrafo è lungo : ';
        echo $sentence.strlen($_GET['paragraph']);
    ?>
</p>

<?php 
    $newParagraph = str_replace(strtolower($_GET['word']), '***', strtolower($_GET['paragraph']));
?>

<p>
    <?php 
        echo $newParagraph;
    ?>
    <br>
    <?php 
        $sentence = 'Il paragrafo è lungo : ';
        echo $sentence.strlen($newParagraph);
    ?>
</p>
