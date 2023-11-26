    <?php
        if (!empty($_GET['alert']) && !empty($_GET['alertType'])) {
            $alert = $_GET['alert'];
            $type = $_GET['alertType'];
            $url = $_SERVER['PHP_SELF'];
            echo "<div class=\"alert $type alert-dismissable\">
                    <a type=\"button\" class=\"close\" href=\"$url\"><i class=\"fas fa-times fa-sm\"></i></a>$alert</div>";
        }
    ?>