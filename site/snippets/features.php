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
    <p>This feature is used to animate prototypes to make it look like a real working app. Create custom animations and
        transitions with a wide variety of settings using timing, effects, triggers and much more.</p>
</div>

<div id="voice" class="tabcontent">
    <h3>Voice Triggers</h3>
    <p>Apps can be designed using voice commands. In addition, what users create for smart assistants can be previewed
        as well.</p>
</div>

<div id="collab" class="tabcontent">
    <h3>Collaboration</h3>
    <p>Collaborate in real time with other designers. Coediting lets you and your team work together in the same
        document at the same time, speeding up your workflow and eliminating duplicative or conflicting work.</p>
</div>

<div id="prototypes" class="tabcontent">
    <h3>Prototypes</h3>
    <p>Creates animated prototypes through linking artboards. These prototypes can be previewed on supported mobile
        devices.</p>
</div>

<div id="grids" class="tabcontent">
    <h3>Repeatable Grids</h3>
    <p>Select items in your design, such as a contact list or photo gallery, and replicate them horizontally or
        vertically as many times as you want — all your styles and spacing stay intact. Update an element once, and your
        changes will update everywhere</p>
</div>

<div id="plugins" class="tabcontent">
    <h3>Plug-ins</h3>
    <p>XD is compatible with custom plugins that add additional features and uses. Plugins range from design to
        functionality, automation and animation.</p>
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