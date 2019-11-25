<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="features">
    <div class="title">
        <?= $page->featurestitle()->kirbytext() ?>
        <span></span>
    </div>

    <div class="row">
        <div class="column">
            <div class="feature">
                <div class="circle-1"></div>
                Animations
            </div>
        </div>
        <div class="column">
            <div class="feature">
                <div class="circle-2"></div>
                Voice Triggers
            </div>
        </div>
        <div class="column">
            <div class="feature">
                <div class="circle-3"></div>
                Collaboration
            </div>
        </div>
        <div class="column">
            <div class="feature">
                <div class="circle-4"></div>
                Prototypes
            </div>
        </div>
        <div class="column">
            <div class="feature">
                <div class="circle-5"></div>
                Repeatable Grids
            </div>
        </div>
        <div class="column">
            <div class="feature">
                <div class="circle-6"></div>
                Plug-ins
            </div>
        </div>
    </div>
</div>