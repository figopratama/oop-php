<!-- COMPOSITION -->
<!-- CLASS ARTIST AND CLASS PAINTING RELATION is One to Many -->

<?php

class Painting {

    function info($title, $price, $releasedate) {
        echo $title . "<br>";
        echo $price . "<br>";
        echo $releasedate . "<br>";
    }
}

class Artist {

    private $painting1;
    private $painting2;

    function __construct() {
        $this->painting1 = new Painting();
        $this->painting2 = new Painting();
    }

    /* Function detail include: Title, Price, and Release date */
    function detail() {
        $this->painting1->info("Insert Title1", "Insert Price1", "Insert Release Date");
        $this->painting2->info("Insert Title2", "Insert Price2", "Insert Release Date");
    }
}

$artist1 = new Artist();

/*print function details*/
$artist1->detail();

?>


