<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/page.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!--<title><?= $page->title() ?></title>-->
  </head>

  <body>
    <div class="jumbotron jumbotron-fluid header">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 style="margin-top: 30px; margin-bottom: 30px; color: rgb(251, 251, 251);"><?= $page->title_header () ?></h2>
            <p style="color: rgb(251, 251, 251);"><?= $page->p_header () ?></p>
          </div>
          <div class="col-md-6">
            <img src="assets/images/visual7.png" style="width: 100%; margin-left: 30px; opacity: 0.8;"/>
          </div>
        </div>
      </div>
    </div>

    <!---------- I N T R O ---------->
    <div class="container margin2">
      <div class="row justify-content-end">
        <div class="col-md-8">
          <h5><?= $page->title_1 () ?></h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div id="border-left2"></div>
          <h6 class="intro_designsprints"><?= $page->intro_1 () ?></h6>
        </div>
        <div class="col-md-8">
          <p style="margin-top: -16px;"><?= $page->wat()->kirbytext() ?></p>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-md-8">
          <h6 style="margin-top: 28px;"><?= $page->waarom_title () ?></h6>
        </div>  
      </div>
      <div class="row justify-content-end">
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/usp1.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->usp1() ?></p>
          </div>        
        </div> 
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/usp2.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->usp2() ?></p>
          </div>        
        </div> 
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/usp3.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->usp3() ?></p>
          </div>        
        </div> 
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/usp4.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->usp4() ?></p>
          </div>        
        </div>  
      </div>
    </div>

    <!---------- U S P ---------->
    <div class="jumbotron-b jumbotron-fluid margin">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h6><?= $page->waarvoor_title() ?></h6>
          </div>
          <div class="col-md-6">
            <h6><?= $page->wanneer_title() ?></h6>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 checklist2" style="margin-top: 20px;">
            <div style="padding-top: 20px; padding-bottom: 10px; padding-right: 10px;">
              <ul style="padding-left: 30px;">
                <li><?= $page->waarvoor_1() ?></li>
                <li><?= $page->waarvoor_2() ?></li>
                <li><?= $page->waarvoor_3() ?></li>
                <li><?= $page->waarvoor_4() ?></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 offset-md-1" style="margin-top: 20px;">
            <p><?= $page->wanneer_p() ?></p>
            <img src="assets/images/visual5.png" style="width: 100%; padding-right: 25px; position: absolute;"/>
          </div>
        </div>
      </div>
    </div>

    <!---------- K W A L I T E I T ---------->
    <div class="container margin">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/visual3.png" style="width: 100%; padding-right: 25px; position: absolute;"/>
        </div>
        <div class="col-md-6">
          <h5><?= $page->title_2() ?></h5>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-md-6 checklist" style="margin-top:10px;">
          <div style="padding-top: 20px; padding-bottom: 10px;">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->wanneer_1() ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->wanneer_2() ?></p>              
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->wanneer_3() ?></p>              
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->wanneer_4() ?></p>             
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->wanneer_5() ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->wanneer_6() ?></p>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!---------- W I E   D O E N   M E E ---------->
    <div class="hero">
      <div class="container margin2 flex">
        <div class="hero-left margin2">
          <div class="col-md-12">
            <h5><?= $page->title_deelnemers() ?></h5>
            <p><?= $page->deelnemers_introtekst()->kirbytext() ?></p>
          </div>
        </div>
        <div class="hero-right margin2">
          <div class="col-md-12 offset-md-1">
            <!--Accordion wrapper-->
            <div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true">

            <!-- Accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1 d-flex flex-row" role="tab" id="heading10">
                <img src="assets/images/wie1.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
                <h6 id="underline1b"><span class="align-middle"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
                aria-controls="collapse10"><?= $page->facilitator () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->maandag_description () ?></p>
                </div>
              </div>
            </div>

            <!-- Accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1 d-flex flex-row" role="tab" id="heading11">
                <img src="assets/images/wie2.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
                <h6 id="underline2b"><span class="align-middle"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11" aria-expanded="false"
                aria-controls="collapse11"><?= $page->product_owner () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->dinsdag_description () ?></p>
                </div>
              </div>
            </div>

            <!-- Accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1 d-flex flex-row" role="tab" id="heading12">
                <img src="assets/images/wie3.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
                <h6 id="underline3b"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse12" aria-expanded="false"
                aria-controls="collapse12"><?= $page->visual_designer () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->woensdag_description () ?></p>
                </div>
              </div>
            </div>

            <!-- Accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1 d-flex flex-row" role="tab" id="heading13">
                <img src="assets/images/wie4.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
                <h6 id="underline4b"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse13" aria-expanded="false"
                aria-controls="collapse13"><?= $page->ux_designer () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->donderdag_description () ?></p>
                </div>
              </div>
            </div>

            <!-- Accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1 d-flex flex-row" role="tab" id="heading14">
                <img src="assets/images/wie5.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
                <h6 id="underline5b"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse14" aria-expanded="false"
                aria-controls="collapse14"><?= $page->developer () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->vrijdag_description () ?></p>
                </div>
              </div>
            </div>

            <!-- accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1 d-flex flex-row" role="tab" id="heading15">
                <img src="assets/images/wie6.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
                <h6 id="underline6b"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse15" aria-expanded="false"
                aria-controls="collapse15"><?= $page->copy_writer () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->zaterdag_description () ?></p>
                </div>
              </div>
            </div>

            </div>
            <!--/.Accordion wrapper-->
          </div>
        </div>
      </div>
    </div>

    <!---------- K E U Z E ---------->
    <div class="container margin">
      <div class="row">
        <div class="col-md-6">
          <h5><?= $page->title_keuze() ?></h5> 
          <p><?= $page->zaterdag_description () ?></p> 
        </div>
        <div class="col-md-6">
          <img src="assets/images/visual2.png" style="width: 100%; position: absolute;"/>
        </div>
      </div>

    </div>

    <!---------- F A C I L I T A T O R ---------->
    <div class="container targetdivs" id="facilitator-div">

      <!--- B U T T O N S --->
      <div class="row" style="margin-bottom: 150px;">
        <div class="col-md-3" id="btn1" href="#" data-target="facilitator" style="cursor:pointer">
          <div class="card-2actief card-header2 shadow-sm d-flex flex-row">
            <img src="assets/images/wie1.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
            <h6 id="underline2d"><span class="align-middle"><?= $page->facilitator () ?></a></span></h6>
          </div>
        </div>
        <div class="col-md-3" id="btn2" href="#" data-target="deelnemer" style="cursor:pointer">
          <div class="card-2 card-header2 shadow-sm d-flex flex-row">
            <img src="assets/images/wie3.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
            <h6 id="underline2c"><span class="align-middle"><?= $page->deelnemer () ?></a></span></h6>
          </div>
        </div>
      </div>

      <!--- C H E C K L I S T --->
      <div class="row">
        <div class="col-md-4">
          <div id="border-left"></div>
          <h6 class="intro_facilitator"><?= $page->text_facilitator () ?></h6>
        </div>
        <div class="col-md-8 checklist">
          <h6 style="margin-left: 15px; margin-top: 30px;"><?= $page->nodig_facilitator_title () ?></h6>
          <div style="padding-top: 20px; padding-bottom: 10px;">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_facilitator_1 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_facilitator_2 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_facilitator_3 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_facilitator_4 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_facilitator_5 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_facilitator_6 () ?></p>
              </label>
            </div>
          </div>
        </div>
      </div>

      <!--- V O O R B E R E I D E N --->
      <div class="row justify-content-end">
        <div class="col-md-8">
          <h6 style="margin-top: 60px;"><?= $page->voorbereiden_facilitator_title () ?></h6>
        </div>  
      </div>
      <div class="row justify-content-end">
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/voorbereiden1.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->voorbereiden_facilitator_1 () ?></p>
          </div>        
        </div> 
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/voorbereiden2.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->voorbereiden_facilitator_2 () ?></p>
          </div>        
        </div> 
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/voorbereiden3.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->voorbereiden_facilitator_3 () ?></p>
          </div>        
        </div> 
        <div class="col-md-2">
          <div class="voorbereiden shadow-sm">
            <img src="assets/images/wie2.png" style="width: 45px; height: 45px; margin-bottom: 15px;"/>
            <p><?= $page->voorbereiden_facilitator_4 () ?></p>
          </div>        
        </div>  
      </div>

      <!--- S K I L L S --->
      <div class="row justify-content-end">
        <div class="col-md-8">
          <h6 style="margin-top: 60px; margin-bottom: 20px;"><?= $page->skills_facilitator_title () ?></h6>
          <p><?= $page->skills_facilitator_p () ?></p>
        </div>
      </div>

      <div class="row justify-content-end">
        <div class="col-md-8">
          <h6 style="margin-top: 44px; margin-bottom: 20px;"><?= $page->links_title () ?></h6>
          <ul style="padding-left: 20px;">
            <li><a href="https://www.thesprintbook.com/"><?= $page->links_list_1 () ?></a></li>
            <li><a href="https://www.thesprintbook.com/how"><?= $page->links_list_2 () ?></a></li>
            <li><a href="https://www.gv.com/sprint/"><?= $page->links_list_3 () ?></a></li>
            <li><a href="https://hike.one/update/your-first-design-sprint-do-these-3-things-first"><?= $page->links_list_4 () ?></a></li>
            <li><a href="https://designsprintkit.withgoogle.com/introduction/overview"><?= $page->links_list_5 () ?></a></li>
          </ul>
        </div>
      </div>
    </div>


    <!---------- D E E L N E M E R ---------->
    <div class="container targetdivs" id="deelnemer-div" style="display:none;" >

      <!--- B U T T O N S --->
      <div class="row" style="margin-bottom: 150px;">
        <div class="col-md-3" id="btn1" href="#" data-target="facilitator" style="cursor:pointer">
          <div class="card-2 card-header2 shadow-sm d-flex flex-row">
            <img src="assets/images/wie1.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
            <h6 id="underline2c"><span class="align-middle"><?= $page->facilitator () ?></a></span></h6>
          </div>
        </div>
        <div class="col-md-3" id="btn2" href="#" data-target="deelnemer" style="cursor:pointer">
          <div class="card-2actief card-header2 shadow-sm d-flex flex-row">
            <img src="assets/images/wie3.png" style="width: 35px; height: 35px; margin: auto; margin-left: 0px; margin-right: 20px;"/>
            <h6 id="underline2d"><span class="align-middle"><?= $page->deelnemer () ?></a></span></h6>
          </div>
        </div>
      </div>

      <!--- C H E C K L I S T --->
      <div class="row">
        <div class="col-md-4">
          <div id="border-left"></div>
            <h6 class="intro_facilitator"><?= $page->border_deelnemer () ?></h6>
        </div>
        <div class="col-md-8 checklist">
          <h6 style="margin-left: 15px; margin-top: 30px;"><?= $page->nodig_facilitator_title () ?></h6>
          <div style="padding-top: 20px; padding-bottom: 10px;">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_deelnemer_1 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_deelnemer_2 () ?></p>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <p><?= $page->nodig_deelnemer_3 () ?></p>
              </label>
            </div>
          </div>
        </div>
      </div>

      <!--- S K I L L S --->
      <div class="row justify-content-end">
        <div class="col-md-8">
          <h6 style="margin-top: 60px; margin-bottom: 20px;"><?= $page->skills_deelnemer_title () ?></h6>
          <p><?= $page->skills_deelnemer_p () ?></p>
        </div>
      </div>

      <div class="row justify-content-end">
        <div class="col-md-8">
          <h6 style="margin-top: 44px; margin-bottom: 20px;"><?= $page->links_title () ?></h6>
          <ul style="padding-left: 20px;">
            <li><a href="https://www.thesprintbook.com/how"><?= $page->links_list_1b () ?></a></li>
            <li><a href="https://designsprintkit.withgoogle.com/introduction/overview"><?= $page->links_list_2b () ?></a></li>
          </ul>
        </div>
      </div>
    </div>

    <!---------- T R E L L O ---------->
    <div class="hero">
      <div class="container margin flex">
        <div class="hero-left margin">
          <div class="col-md-12" style="padding-bottom: 150px;">
            <h5><?= $page->title_verloop() ?></h5>
            <p><?= $page->p_verloop () ?></p>
            <h6><a href="https://trello.com/b/zbIWs13g/google-sprint-iii" target="_blank" style="color: #6200EE; font-size: 17px;">Klik hier voor het Trellobord</a></h6>
          </div>
        </div>
        <div class="hero-right margin">
          <div class="col-md-12 offset-md-1">
            <iframe src="https://trello.com/b/zbIWs13g.html" style="border-radius: 3px; width: 110%; height: 500px;" frameBorder="0"></iframe>
          </div>
        </div>
      </div>
    </div>

  <!---------- F O O T E R ---------->
    <div class="jumbotron jumbotron-fluid" style="padding-top: 100px; padding-bottom: 100px; margin-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="assets/images/footer1.png" style="width: 100%; margin-left: 30px; opacity: 1;"/>
          </div>
          <div class="col-md-3 offset-md-1 align-self-center">
            <img src="assets/images/footer2.png" style="width: 100%; margin-left: 30px; opacity: 1;"/>
          </div>
          <div class="col-md-3 align-self-center">
            <img src="assets/images/footer3.png" style="width: 100%; margin-left: 30px; opacity: 1;"/>
          </div>
        </div>
      </div>
    </div>

    <script>
      /**********************Scroll Animation "START"************************************/
      $(document).ready(function(){
      var $animation_elements = $('.anim');
      var $window = $(window);

      function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('animated');
      } else {
      $element.removeClass('animated');
      }
      });
      }

      $window.on('scroll resize', check_if_in_view);
      $window.trigger('scroll');
      });
      /**********************Scroll Animation "END"************************************/

      /**********************Change color of center aligned animated content small Circle  "START"************************************/
      $(document).ready(function(){
          $(" .debits").hover(function(){
              $(" .center-right").css("background-color", "#4997cd");
              }, function(){
              $(" .center-right").css("background-color", "#fff");
          }); 
      });
      $(document).ready(function(){
          $(".credits").hover(function(){
              $(".center-left").css("background-color", "#4997cd");
              }, function(){
              $(".center-left").css("background-color", "#fff");
          }); 
      });
      /**********************Change color of center aligned animated content small Circle  "END"************************************/
    
      /********** CHANGE CONTENT **********/
      
      $("#btn1, #btn2").on("click", function(e){
        e.preventDefault();
        var target = $(this).data("target");
        $(".targetdivs").css("display", "none");
        $("#"+target+"-div").css("display", "block");
      });

    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>