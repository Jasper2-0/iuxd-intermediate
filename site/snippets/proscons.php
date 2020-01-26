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
            <div class="col-md-6 col-sm-12">
                <h3>Pros</h3>
                    <p>
                        - All types of artboards available
                        - Simple and clean interface
                        - Repeat grid feature
                        - You can add animations into your prototype
                        - You can trigger your prototype by using voice triggers
                        - You’re able to view your live prototype on your smartphone
                    </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>Cons</h3>
                    <p>
                        - The current collaborative editing function is still beta
                        - The animation possibilities are less advanced than what’s possible in Principle
                        - You can only view the live prototyping on devices with Mac OS
                        - It’s not possible to design customised shapes

                    </p>
            </div>
            </div>
        </div>
    </div>
</div>