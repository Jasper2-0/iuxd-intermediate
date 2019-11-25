<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<header class="intro" id="home">
    <div id="intro-blok-left">.</div>
    <div id="intro-blok-right">
        <?= $page->headertitle()->kirbytext() ?>
        <?= $page->headertext()->kirbytext() ?>
    </div>
</header>