<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/page.css">

    <title><?= $page->title() ?></title>
  </head>

  <body>
    <div class="container margin">
      <div class="row">
        <div class="col-6" style="padding-right: 50px;">
          <h5><?= $page->title_1() ?></h5>
          <p><?= $page->wat()->kirbytext() ?></p>
        </div>
        <div class="col-6">
          <img src="assets/images/img1.png" style="width: 100%;"/>
        </div>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid margin">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-2 flex direction">
            <img src="assets/images/usp1.png" style="width: 40%; margin: auto; margin-bottom: 30px;"/>
            <h7 class="text-center"><?= $page->usp1() ?></h7>
          </div>
          <div class="col-2 flex direction">
            <img src="assets/images/usp2.png" style="width: 40%; margin: auto; margin-bottom: 30px;"/>
            <h7 class="text-center"><?= $page->usp2() ?></h7>
          </div>
          <div class="col-2 flex direction">
            <img src="assets/images/usp3.png" style="width: 40%; margin: auto; margin-bottom: 30px;"/>
            <h7 class="text-center"><?= $page->usp3() ?></h7>
          </div>
          <div class="col-2 flex direction">
            <img src="assets/images/usp4.png" style="width: 40%; margin: auto; margin-bottom: 30px;"/>
            <h7 class="text-center"><?= $page->usp4() ?></h7>
          </div>
          <div class="col-2 flex direction">
            <img src="assets/images/usp5.png" style="width: 40%; margin: auto; margin-bottom: 30px;"/>
            <h7 class="text-center"><?= $page->usp5() ?></h7>
          </div>
        </div>
      </div>
    </div>

    <div class="container margin">
      <div class="row">
        <div class="col-6">
          <h5><?= $page->title_2() ?></h5>
          <ul style="padding-right: 50px;">
            <li><?= $page->wanneer_1() ?></li>
            <li><?= $page->wanneer_2() ?></li>
            <li><?= $page->wanneer_3() ?></li>
            <li><?= $page->wanneer_4() ?></li>
            <li><?= $page->wanneer_5() ?></li>
            <li><?= $page->wanneer_6() ?></li>
          </ul>
        </div>
        <div class="col-6">
          <img src="assets/images/placeholder_1.png" style="width: 100%;"/>
        </div>
      </div>
    </div>

    <div class="container margin">
      <div class="row justify-content-md-center">
        <div class="col-7">
          <h5><?= $page->title_wie() ?></h5>
          <p><?= $page->wie() ?></p>
        </div>
      </div>
    </div>

    <div class="container margin">
      <div class="row justify-content-md-center">
        <div class="col-4 flex justify-content-around">
          <div class="col">
            <img src="assets/images/wie1.png" style="height: 40%; margin-bottom: 15px;"/>
            <h6 class="wie_description text-center"><?= $page->wie1() ?></h6>
          </div>
          <div class="col">
            <img src="assets/images/wie2.png" style="height: 40%; margin-bottom: 15px;"/>
            <h6 class="wie_description text-center"><?= $page->wie2() ?></h6>
          </div>
        </div>
        <div class="col-6 flex justify-content-around">
          <div class="col">
            <img src="assets/images/wie3.png" style="height: 40%; margin-bottom: 15px;"/>
            <h6 class="wie_description text-center"><?= $page->wie3() ?></h6>
          </div>
          <div class="col">
            <img src="assets/images/wie4.png" style="height: 40%; margin-bottom: 15px;"/>
            <h6 class="wie_description text-center"><?= $page->wie4() ?></h6>
          </div>
          <div class="col">
            <img src="assets/images/wie5.png" style="height: 40%; margin-bottom: 15px;"/>
            <h6 class="wie_description text-center"><?= $page->wie5() ?></h6>
          </div>
        </div>
        <div class="col-2 flex justify-content-around">
          <div class="col">
            <img src="assets/images/wie6.png" style="height: 40%; margin-bottom: 15px;"/>
            <h6 class="wie_description text-center"><?= $page->wie6() ?></h6>
          </div>
        </div>
      </div>
    </div>

    <div class="hero">
      <div class="container margin flex">
        <div class="hero-left margin">
          <div class="col">
            <h5><?= $page->title_verloop() ?></h5>
          </div>
        </div>
        <div class="hero-right margin">
          <div class="col-md-12 offset-md-1">
            <!--Accordion wrapper-->
            <div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true">

            <!-- Accordion card -->
            <div class="card rounded shadow-sm">

              <!-- Card header -->
              <div class="card-header z-depth-1" role="tab" id="heading10">
                <h6 id="underline1"><span class="align-middle"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
                aria-controls="collapse10"><?= $page->maandag () ?></a></span></h6>
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
              <div class="card-header z-depth-1" role="tab" id="heading11">
                <h6 id="underline2"><span class="align-middle"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11" aria-expanded="false"
                aria-controls="collapse11"><?= $page->dinsdag () ?></a></span></h6>
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
              <div class="card-header z-depth-1" role="tab" id="heading12">
                <h6 id="underline3"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse12" aria-expanded="false"
                aria-controls="collapse12"><?= $page->woensdag () ?></a></span></h6>
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
              <div class="card-header z-depth-1" role="tab" id="heading13">
                <h6 id="underline4"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse13" aria-expanded="false"
                aria-controls="collapse13"><?= $page->donderdag () ?></a></span></h6>
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
              <div class="card-header z-depth-1" role="tab" id="heading14">
                <h6 id="underline5"><span class="align-middle"><a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse14" aria-expanded="false"
                aria-controls="collapse14"><?= $page->vrijdag () ?></a></span></h6>
              </div>
              <!-- Card body -->
              <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14"
                data-parent="#accordionEx2">
                <div class="card-body rgba-teal-strong white-text">
                  <p><?= $page->vrijdag_description () ?></p>
                </div>
              </div>
            </div>
            </div>
            <!--/.Accordion wrapper-->
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>