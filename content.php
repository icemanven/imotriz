<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 5:49 PM
 */
echo "<div id=\"content-wrapper\"><div class=\"container-fluid\">";
require_once "breadcrumb.php";
if ($page === null) {
    require_once "dashboard.php";
} else {
    require_once $page . ".php";
}
require_once "stikyfooter.php";
echo "</div>"
?>







    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
            </div>
        </div>
    </footer>

</div>
