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
                <h3>Pros</h3>
                    <ul>
                        <li>- All types of artboards available</li>
                        <li>- Simple and clean interface</li>
                        <li>- Repeat grid feature</li>
                        <li>- You can add animations into your prototype</li>
                        <li> - You can trigger your prototype by using voice triggers</li>
                        <li> - You’re able to view your live prototype on your smartphone</li>
                    </ul>
            </div>
            <div class="offset-1 col-md-5 col-sm-12 marg">
                <h3>Cons</h3>
                    <ul>
                        <li>- The current collaborative editing function is still beta</li>
                        <li>- The animation possibilities are less advanced than what’s possible in Principle</li>
                        <li>- You can only view the live prototyping on devices with Mac OS</li>
                        <li>- It’s not possible to design customised shapes</li>

                    </ul>
            </div>
            </div>
        </div>
    </div>
</div>