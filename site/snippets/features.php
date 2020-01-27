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

    <div id="features"></div>

    <div class="row tab">
        <div class="col-md-2 tablinks" onclick="openCity(event, 'animations')">
            <div class="feature">
                <div class="circle-1"></div>
                <?= $page->fonetitle()->kirbytext() ?>
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'voice')">
            <div class="feature">
                <div class="circle-2"></div>
                <?= $page->ftwotitle()->kirbytext() ?>
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'collab')">
            <div class="feature">
                <div class="circle-3"></div>
                <?= $page->fthreetitle()->kirbytext() ?>
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'prototypes')">
            <div class="feature">
                <div class="circle-4"></div>
                <?= $page->ffourtitle()->kirbytext() ?>
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'grids')">
            <div class="feature">
                <div class="circle-5"></div>
                <?= $page->ffivetitle()->kirbytext() ?>
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'plugins')">
            <div class="feature">
                <div class="circle-6"></div>
                <?= $page->fsixtitle()->kirbytext() ?>
            </div>
        </div>
    </div>

</div>

<div id="animations" class="tabcontent">
  <?= $page->fonetitle()->kirbytext() ?>
  <p><?= $page->fonetext()->kirbytext() ?></p>
</div>

<div id="voice" class="tabcontent">
  <?= $page->ftwotitle()->kirbytext() ?>
  <p><?= $page->ftwotext()->kirbytext() ?></p>
</div>

<div id="collab" class="tabcontent">
  <?= $page->fthreetitle()->kirbytext() ?>
  <p><?= $page->fthreetext()->kirbytext() ?></p>
</div>

<div id="prototypes" class="tabcontent">
  <?= $page->ffourtitle()->kirbytext() ?>
  <p><?= $page->ffourtext()->kirbytext() ?></p>
</div>

<div id="grids" class="tabcontent">
  <?= $page->ffivetitle()->kirbytext() ?>
  <p><?= $page->ffivetext()->kirbytext() ?></p>
</div>

<div id="plugins" class="tabcontent">
  <?= $page->fsixtitle()->kirbytext() ?>
  <p><?= $page->fsixtext()->kirbytext() ?></p>
</div>

<script>
function openCity(evt, subject) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(subject).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
