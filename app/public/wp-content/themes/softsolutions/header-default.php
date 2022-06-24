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
            <div class="top-header top-header-default">
                <p class="title">Soft Solutions</p>
                <nav class="navigation-menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu'
                        ])?>
                </nav>
            </div>
        </header>
    </div>