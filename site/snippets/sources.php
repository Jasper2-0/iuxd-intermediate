<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="sources">

    <div class="title">
        <h3>SOURCES</h3>
        <span></span>
    </div>

    <div id="sources"></div>

    <div class="source-block">

        <div class="row">


            <div class="col-md-4 col-sm-12">
                <div class="source">
                    <h4>XD Guru</h4>
                    <a href="https://www.xdguru.com/">More UI Kits, Templates & resources.</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="source">
                    <h4>XD Recources</h4>
                    <a href="(https://xdresources.co/)">All kinds of recources. UI Kits, Templates and
                        Mockups.</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="source">
                    <h4>Adobe's Tutorials'</h4>
                    <a href="https://helpx.adobe.com/nl/xd/tutorials.html">Adobe's tutorials for Adobe XD.</a>
                </div>
            </div>


        </div>
        <div class="row">

            <div class="col-md-4 col-sm-12">
                <div class="source">
                    <h4>Animation Example</h4>
                    <a href="https://www.youtube.com/watch?v=Ev3fSi7P66c">An example of how to make an animation in
                        XD.</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="source">
                    <h4>Voice Trigger Example</h4>
                    <a href="https://www.youtube.com/watch?v=Ev3fSi7P66c">An example of how to make an animation in
                        XD.</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="source">
                    <h4>Animation Example Two</h4>
                    <a href="<?= $page->linksix()->kirbyurl() ?>
">Another animation example.</a>
                </div>
            </div>

        </div>

    </div>

</div>