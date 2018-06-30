<!DOCTYPE html>
<html lang="mk-MK">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Контакти</title>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

  <?php require '../include/header.php';?>
  <!-- INVERSE TABLE -->
  <main>
    <section class="container my-5">
      <div class="row">
        <div class="col-6">
        <form id="newsletter">
          <p class="h4 text-center mb-4">Write to us</p>

          <!-- Default input name -->
          <label for="name" class="grey-text">Your name</label>
          <input type="text" class="form-control" id="name" name="name">

          <br>

          <!-- Default input email -->
          <label for="email" class="grey-text">Your email</label>
          <input type="email" class="form-control" id="email" name="email">

          <br>

          <!-- Default input subject -->
          <label for="subject" class="grey-text">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject">

          <br>

          <!-- Default textarea message -->
          <label for="message" class="grey-text">Your message</label>
          <textarea type="text" id="message" name="message" class="form-control" rows="3"></textarea>

          <div class="text-center mt-4">
              <button class="btn btn-outline-warning" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
          </div>
      </form>
      </div>
    </div>
    </section>

    <section id="about" class="my-5">
    
    </section>

  </main>

  <?php require '../include/footer.php';?>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/common.js"></script>
</body>
</html>
