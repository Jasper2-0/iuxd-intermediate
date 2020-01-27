<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="adobexd dark">
    <div class="title">
        <?= $page->moretitle()->kirbytext() ?>
        <span></span>
    </div>

    <div class="adobexd-why dark">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <?= $page->moretextone()->kirbytext() ?>
            </div>
            <div class="col-md-6 col-sm-12 marg">
                <?= $page->moretexttwo()->kirbytext() ?>
            </div>
        </div>
    </div>
</div>