<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Sending Emails</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{url('assets/css/contact.css')}}" type="text/css">

    <!-- Font Awesome (free) SVG-Version -->
    <script data-search-pseudo-elements defer src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>

  </head>
  <body>

  <div style="padding: 4rem">

  <div class="container">
  <div class="d-flex flex-row-reverse">
    <form class="theme-switch-wrapper ml-4 mr-2 ml-md-0">
        @csrf
      <label class="theme-switch" for="theme-switch">
        <input class="js-mode-toggle mr-2" type="checkbox" id="theme-switch">
        <span class="slider round"></span>
      </label>
    </form>
    <span class="pr-4 text-danger">switch me!</span>
  </div>
  </div>

    <!--contact us section-->
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <h2>Emails Sending</h2>

            <form class="contact-form" id="contactForm" name="contactForm" method="post" action="{{url('send')}}" enctype="multipart/form-data" novalidate>
                @csrf
                <div id="subject-row" class="row">
                    <div class="col-12 col-sm-8">
                        <label for="subject" class="d-none">Subject:</label>
                        <input type="text" id="subject" name="subject" class="form-control contact shadow-br" required>
                        <div id="subject-feedback" class="pb-2">&nbsp;</div>
                    </div>
                </div>
              <div id="message-row" class="row">
                <div class="col-12">
                  <label for="message" class="d-none">Your Message:</label>
                  <textarea rows="7" id="message" name="message" class="form-control contact shadow-br" required></textarea>
                  <div id="message-feedback" class="pb-2">&nbsp;</div>
                </div>
              </div>

                <div class="form-row pt-3">
                    <div class="col-12 col-md-3">
                        <label for="attachments">Attachments:</label>
                        <input type="file" id="attachments" name="attachments[]" class="form-control" multiple>
                    </div>
                </div>

              <div class="form-row pt-3">
                <div class="col-12 col-md-3">
                  <button class="btn btn-success form-control shadow-br" type="submit" id="submit" name="submit"></button>
                </div>
                <div class="col-12 col-md-3 pt-4 pt-sm-0">
                  <button class="btn btn-danger form-control shadow-br" type="reset" id="reset" name="reset"></button>
                </div>
              </div>
              <div class="row pt-3">
                <div class="col-12">
                  <div id="success" class="col-12 text-center alert" role="alert">&nbsp;</div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>


    <!-- Description :  The JS component of the Bootstrap Framework. -->
    <!-- !!! Make sure you keep the right order !!! -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Custom JavaScript for this template -->
    <script src="assets/js/contact.js"></script>
  </body>
</html>
