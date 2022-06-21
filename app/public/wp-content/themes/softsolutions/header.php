<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>Soft Solutions</title>
</head>

<body>
    <div class="site">
        <header class="header">
            <div class="top-header">
                <p class="title">Soft Solutions</p>
                <nav class="navigation-menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu'
                        ])?>
                </nav>
            </div>
            <div class="body-header">
                <h1 class="title">Software Solutions & Engineering</h1>
                <p class="description">
                    We build tailored software solutions, do custom software engineering and accomplish comprehensive
                    system integrations.
                </p>
            </div>
        </header>
    </div>