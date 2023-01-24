<h1>
    PHP - Badwords
</h1>

<p>
    <?php 
    echo $_GET['paragraph'];
    ?>
</p>

<p>
    <?php 
        $sentence = 'Il paragrafo è lungo : ';
        echo $sentence.strlen($_GET['paragraph']);
    ?>
</p>

<p>
    <?php 
    echo $_GET['text'];
    ?>
</p>