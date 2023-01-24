<h1>
    PHP - Badwords
</h1>

<p>
    <?php 
        echo $_POST['paragraph'];
    ?>
    <br>
    <?php 
        $sentence = 'Il paragrafo è lungo : ';
        echo $sentence.strlen($_POST['paragraph']);
    ?>
</p>

<p>
    <?php
        $newParagraph = str_replace(strtolower($_POST['word']), '***', strtolower($_POST['paragraph']));
        echo $newParagraph;
    ?>
    <br>
    <?php 
        $sentence = 'Il paragrafo è lungo : ';
        echo $sentence.strlen($newParagraph);
    ?>
</p>
