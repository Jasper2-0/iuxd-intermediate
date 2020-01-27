<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="adobexd">
    <div class="title">
        <?= $page->prosconstitle()->kirbytext() ?>
        <span></span>
    </div>

    <div class="adobexd-why">
        <div class="row">
            <div class="offset-1 col-md-5 col-sm-12">
                <?= $page->prostitle()->kirbytext() ?>
                <?= $page->pros()->kirbytext() ?>
            </div>
            <div class="offset-1 col-md-5 col-sm-12 marg">
                <?= $page->constitle()->kirbytext() ?>
                <?= $page->cons()->kirbytext() ?>
            </div>
            </div>
        </div>
    </div>
</div>