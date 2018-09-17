<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 5:48 PM
 */

function getMenu ($menus, $page) {
    foreach ($menus as $id => $menu) {
        if (!empty($menu["items"])) {
            // TODO no cotemplado para el ejemplo
            echo "<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-fw fa-folder\"></i>
                        <span>Pages</span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                        <h6 class=\"dropdown-header\">Login Screens:</h6>
                        <a class=\"dropdown-item\" href=\"login.html\">Login</a>
                        <a class=\"dropdown-item\" href=\"register.html\">Register</a>
                        <a class=\"dropdown-item\" href=\"forgot-password.html\">Forgot Password</a>
                        <div class=\"dropdown-divider\"></div>
                        <h6 class=\"dropdown-header\">Other Pages:</h6>
                        <a class=\"dropdown-item\" href=\"404.html\">404 Page</a>
                        <a class=\"dropdown-item\" href=\"blank.html\">Blank Page</a>
                    </div>
                </li>";
        } else {
            $activa = $page == $id ? "active" : "";
            echo "<li class=\"nav-item $activa\">
                    <a class=\"nav-link\" href=\"index.php?page=$id\">
                        <i class=\"fas fa-fw {$menu["icon"]}\"></i>
                        <span>{$menu["title"]}</span></a>
                </li>";
        }
        echo "</li>";
    }
}
$page = empty($_REQUEST["page"]) ? null : $_REQUEST["page"];
echo "<ul class=\"sidebar navbar-nav\">";
echo "<li class=\"nav-item ";
echo $page == null ? "active" : "";
echo "\">";
echo "<a class=\"nav-link\" href=\"index.php\"><i class=\"fas fa-fw fa-tachometer-alt\"></i><span>$sistema</span></a></li>";
getMenu($menus, $page);
echo "</ul><!-- Sidebar -->"
?>