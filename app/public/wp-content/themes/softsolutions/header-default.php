<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>Soft Solutions</title>
</head>

<body <?php body_class() ?>>
    <div class="site">
        <header class="header-default">
            <div id="header" class="top-header top-header__default">
                <p class="title">Soft Solutions</p>
                <nav class="navigation-menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu'
                        ])?>
                </nav>
            </div>
        </header>
    </div>

    <script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 430 || document.documentElement.scrollTop > 430) {
            document.getElementById("header").classList.add('top-header--scrolled-background')
        } else {
            document.getElementById("header").classList.remove('top-header--scrolled-background')
        }
    }
    </script>