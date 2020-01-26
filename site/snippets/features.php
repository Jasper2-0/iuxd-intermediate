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
  <p>Add animations to your prototype to convey the interaction you wish the final product to have.
  By using auto-animate, you can add microinteractions that otherwise would not be obvious to the user. It puts life into your prototype and gives the user a clear idea of what you imagine the end result to be.</p>
</div>

<div id="voice" class="tabcontent">
  <h3>Voice Triggers</h3>
  <p>With voice triggers you are able to interact with your prototypes in a whole other way. Use voice triggers and
  speech playback to take your users beyond the screen.</p>
</div>

<div id="collab" class="tabcontent">
  <h3>Collaboration</h3>
  <p>By using other Adobe software you can easily make changes to your design without having to import files again. For example, if you make a design in Illustrator and want to make a change later on,
  the file you have used in Adobe XD will easily update itself. Besides using Adobe software, Adobe XD also collaborates with productivity apps such as Slack, JIRA and Microsoft Teams.</p>
</div>

<div id="prototypes" class="tabcontent">
  <h3>Prototypes</h3>
  <p>Switch from design to prototype mode with a single click, and connect artboards to communicate the flow and paths of multiscreen apps. Connect design elements from one artboard to another, including Repeat Grid cells.
  Add interactions with intuitive visual controls to test and validate the experience. When you’re done, you can share your prototype through a shareable web link to get feedback on your designs.
  Reviewers can comment directly on your prototypes and specific parts of your design.</p>
</div>

<div id="grids" class="tabcontent">
  <h3>Repeatable Grids</h3>
  <p>Select items in your design, such as a contact list or photo gallery, and replicate them horizontally or vertically as many times as you want — all your styles and spacing stay intact. Update an element once,
  and your changes will update everywhere.</p>
</div>

<div id="plugins" class="tabcontent">
  <h3>Plug-ins</h3>
  <p>By using plugins, you can extend the functionality of Adobe XD for workflows and integrations with the growing collection of plugins created by their developer community. You can use them to automate tasks,
  integrate with other tools, design with data and more.</p>
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
