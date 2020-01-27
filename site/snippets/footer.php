<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="footer">

    <div class="social">

        <div class="row">
            <div class="column">
                <div class="feature">
                    <a href="<?= $page->linktwitter()->kirbyurl() ?>">
                        <div class="social-icon social-icon-1"></div>
                        Twitter
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="feature">
                    <a href="<?= $page->linkfacebook()->kirbyurl() ?>">
                        <div class="social-icon social-icon-2"></div>
                        Facebook
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="feature">
                    <a href="<?= $page->linkinstagram()->kirbyurl() ?>">
                        <div class="social-icon social-icon-3"></div>
                        Instagram
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>