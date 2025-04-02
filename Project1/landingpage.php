<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
  .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
      <a class="navbar-brand text-info-emphasis" href="#">Queries</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="form.php">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="tablerecord.php">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="#">About</a>
          </li>
          </ul>
      </div>
    </div>
  </nav>
  <section>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./img.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Centered Hero</h1>
        <p class="lead mb-4 text-primary-emphasis">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>
  </section>
  <div class="b-example-divider"></div>
        <section>
          <div class="px-4 py-5 my-5 text-center">
            <div class="col-lg-6 mx-auto">
              <h2 class="display-5 fw-bold text-body-emphasis lh-2 mb-3">Service</h2>
              <p class="lead mb-4 text-primary-emphasis">Bootstrap is a popular front-end framework for building responsive and mobile-first websites.
              <ul class="lead md-4 text-primary-emphasis">
                <li>It provides pre-designed CSS, JavaScript components, and utility classes to quickly create modern and consistent user interfaces.</li>
                <li>It Includes pre-built responsive grid systems for mobile-first design.</li>
                <li>Offers a wide range of UI components like buttons, modals, and navbars.</li>
                <li>Provides built-in support for responsive typography, spacing, and utilities.</li>
                <li>Extensively customizable via Sass variables and Bootstrap's configuration.
              </ul>
              </p>
            </div>
          </div>
        </section>
        <div class="b-example-divider"></div>
        <section>
          <div class="px-4 py-5 my-5 text-center">
            <div class="col-lg-6 mx-auto">
              <h2 class="display-5 fw-bold text-body-emphasis lh-2 mb-3">About</h2>
              <p class="lead mb-4 text-primary-emphasis">Bootstrap also comes with several JavaScript components which do not require other libraries like jQuery. They provide additional user interface elements such as dialog boxes, tooltips, progress bars, navigation drop-downs, and carousels. Each Bootstrap component consists of an HTML structure, CSS declarations, and in some cases accompanying JavaScript code. They also extend the functionality of some existing interface elements, including for example an auto-complete function for input fields.</p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link -active px-2 text-body-primary">Home</a></li>
      <li class="nav-item"><a href="form.php" class="nav-link -active px-2 text-body-primary">Form</a></li>
      <li class="nav-item"><a href="tablerecord.php" class="nav-link -active px-2 text-body-primary">Record</a></li>
      <li class="nav-item"><a href="#" class="nav-link -active px-2 text-body-primary">Service</a></li>
      <li class="nav-item"><a href="#" class="nav-link -active px-2 text-body-primary">About</a></li>
    </ul>
    <p class="text-center text-body-dark">&copy; 2024 Company, Inc</p>
  </footer>
</div>

</html>