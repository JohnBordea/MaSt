<?php



function ends_with($string, $end) {
    return substr_compare($string, $end, -strlen($end)) === 0;
}

$q1 = mysqli_query($con, "select continent from products");
$q2 = mysqli_query($con, "select theme from products");
$q3 = mysqli_query($con, "select color from products");
$q4 = mysqli_query($con, "select year from products");

function box($continent, $theme) {
        echo    '<div class="col-4 col-12-medium">
        <section class="box feature">
        <a href="product_page.php?id=0" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                                <div class="inner">
                                    <header>
                                    <h2>'.$continent.'</h2>
                                    </header>
                                    <p> '.$theme.'</p>
                            </div>
                            </section>
                            </div>';
}