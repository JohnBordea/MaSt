<?php



function ends_with($string, $end) {
    return substr_compare($string, $end, -strlen($end)) === 0;
}

$q1 = mysqli_query($con, "select Continent");
$q2 = mysqli_query($con, "select Theme");
$q3 = mysqli_query($con, "select Color");
$q4 = mysqli_query($con, "select From Year");

function box($continent, $theme) {
        echo    '<section class="box feature">
        <a href="product_page.php?id=0" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                                <div class="inner">
                                    <header>
                                    <h2>'.$continent.'</h2>
                                    </header>
                                    <p> '.$theme.'</p>
                            </div>
                            </section';
}