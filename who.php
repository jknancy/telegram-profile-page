<?php
$slug="who";
require_once('core/header.php');?>


        <img src="<?php echo getImageSrc($dom); ?>" alt="Nancy" class="profile-image" width="150">
        <h1><?php echo getTitleText($dom); ?></h1>
        <span><a href="https://nancy.ton.run">Nancy.ton</a> | <a href="https://nancy.ee">Nancy.ee</a> | <a href="mailto:i@nancy.ee">i@nancy.ee</a></span>
        <p><?php
        foreach ($elements['tgme_page_description'] as $element) {
            echo $element->nodeValue, PHP_EOL;
        }
        ?></p>
        <a href="tg://resolve?domain=nancy" class="link-button">Connect with Nancy</a>

    <?php
    require_once('core/footer.php');?>