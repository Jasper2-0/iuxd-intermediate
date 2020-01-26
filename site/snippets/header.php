<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<header class="intro">
    <div id="home"></div>
    <div class="col-md-6 col-sm-12">
        <div class="intro-block-left"></div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="intro-block-right">
            <?= $page->headertitle()->kirbytext() ?>
            <?= $page->headertext()->kirbytext() ?>
        </div>
    </div>
</header>