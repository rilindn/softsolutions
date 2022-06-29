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
                <a class="logo" href="/home">
                    <svg width="60" height="55" viewBox="0 0 225 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 44C0 19.6995 19.6995 0 44 0H181C205.301 0 225 19.6995 225 44V146C225 170.301 205.301 190 181 190H44C19.6995 190 0 170.301 0 146V44Z"
                            fill="#38A6DC" />
                        <path
                            d="M74.152 140.896C67.9227 140.896 62.2907 139.829 57.256 137.696C52.3067 135.563 48.3813 132.491 45.48 128.48C42.5787 124.469 41.0853 119.733 41 114.272H60.2C60.456 117.941 61.736 120.843 64.04 122.976C66.4293 125.109 69.672 126.176 73.768 126.176C77.9493 126.176 81.2347 125.195 83.624 123.232C86.0133 121.184 87.208 118.539 87.208 115.296C87.208 112.651 86.3973 110.475 84.776 108.768C83.1547 107.061 81.1067 105.739 78.632 104.8C76.2427 103.776 72.9147 102.667 68.648 101.472C62.8453 99.7653 58.1093 98.1013 54.44 96.48C50.856 94.7733 47.7413 92.256 45.096 88.928C42.536 85.5146 41.256 80.992 41.256 75.36C41.256 70.0693 42.5787 65.4613 45.224 61.536C47.8693 57.6106 51.5813 54.624 56.36 52.576C61.1387 50.4426 66.6 49.376 72.744 49.376C81.96 49.376 89.4267 51.6373 95.144 56.16C100.947 60.5973 104.147 66.8266 104.744 74.848H85.032C84.8613 71.776 83.5387 69.2586 81.064 67.296C78.6747 65.248 75.4747 64.224 71.464 64.224C67.9653 64.224 65.1493 65.12 63.016 66.912C60.968 68.704 59.944 71.3066 59.944 74.72C59.944 77.1093 60.712 79.1146 62.248 80.736C63.8693 82.272 65.832 83.552 68.136 84.576C70.5253 85.5146 73.8533 86.624 78.12 87.904C83.9227 89.6106 88.6587 91.3173 92.328 93.024C95.9973 94.7306 99.1547 97.2906 101.8 100.704C104.445 104.117 105.768 108.597 105.768 114.144C105.768 118.923 104.531 123.36 102.056 127.456C99.5813 131.552 95.9547 134.837 91.176 137.312C86.3973 139.701 80.7227 140.896 74.152 140.896ZM152.152 140.896C145.923 140.896 140.291 139.829 135.256 137.696C130.307 135.563 126.381 132.491 123.48 128.48C120.579 124.469 119.085 119.733 119 114.272H138.2C138.456 117.941 139.736 120.843 142.04 122.976C144.429 125.109 147.672 126.176 151.768 126.176C155.949 126.176 159.235 125.195 161.624 123.232C164.013 121.184 165.208 118.539 165.208 115.296C165.208 112.651 164.397 110.475 162.776 108.768C161.155 107.061 159.107 105.739 156.632 104.8C154.243 103.776 150.915 102.667 146.648 101.472C140.845 99.7653 136.109 98.1013 132.44 96.48C128.856 94.7733 125.741 92.256 123.096 88.928C120.536 85.5146 119.256 80.992 119.256 75.36C119.256 70.0693 120.579 65.4613 123.224 61.536C125.869 57.6106 129.581 54.624 134.36 52.576C139.139 50.4426 144.6 49.376 150.744 49.376C159.96 49.376 167.427 51.6373 173.144 56.16C178.947 60.5973 182.147 66.8266 182.744 74.848H163.032C162.861 71.776 161.539 69.2586 159.064 67.296C156.675 65.248 153.475 64.224 149.464 64.224C145.965 64.224 143.149 65.12 141.016 66.912C138.968 68.704 137.944 71.3066 137.944 74.72C137.944 77.1093 138.712 79.1146 140.248 80.736C141.869 82.272 143.832 83.552 146.136 84.576C148.525 85.5146 151.853 86.624 156.12 87.904C161.923 89.6106 166.659 91.3173 170.328 93.024C173.997 94.7306 177.155 97.2906 179.8 100.704C182.445 104.117 183.768 108.597 183.768 114.144C183.768 118.923 182.531 123.36 180.056 127.456C177.581 131.552 173.955 134.837 169.176 137.312C164.397 139.701 158.723 140.896 152.152 140.896Z"
                            fill="white" />
                    </svg>

                    <p class="title">Soft Solutions</p>
                </a>
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
        handleHeaderBgChange()
    };

    function handleHeaderBgChange() {
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            document.getElementById("header").classList.add('top-header--scrolled-background')
        } else {
            document.getElementById("header").classList.remove('top-header--scrolled-background')
        }
    }
    </script>