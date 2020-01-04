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
                Animations
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'voice')">
            <div class="feature">
                <div class="circle-2"></div>
                Voice Triggers
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'collab')">
            <div class="feature">
                <div class="circle-3"></div>
                Collaboration
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'prototypes')">
            <div class="feature">
                <div class="circle-4"></div>
                Prototypes
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'grids')">
            <div class="feature">
                <div class="circle-5"></div>
                Repeatable Grids
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'plugins')">
            <div class="feature">
                <div class="circle-6"></div>
                Plug-ins
            </div>
        </div>
    </div>

</div>

<div id="animations" class="tabcontent">
  <h3>Animations</h3>
  <p>This is a text about the feature above.</p>
</div>

<div id="voice" class="tabcontent">
  <h3>Voice Triggers</h3>
  <p>This is a text about the feature above.</p>
</div>

<div id="collab" class="tabcontent">
  <h3>Collaboration</h3>
  <p>This is a text about the feature above.</p>
</div>

<div id="prototypes" class="tabcontent">
  <h3>Prototypes</h3>
  <p>This is a text about the feature above.</p>
</div>

<div id="grids" class="tabcontent">
  <h3>Repeatable Grids</h3>
  <p>This is a text about the feature above.</p>
</div>

<div id="plugins" class="tabcontent">
  <h3>Plug-ins</h3>
  <p>This is a text about the feature above.</p>
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