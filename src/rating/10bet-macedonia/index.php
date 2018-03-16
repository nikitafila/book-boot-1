<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bootstrap 4 Starter Pack</title>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

  <?php require '../../include/header.php';?>

  <section class="py-5">
    <div class="row">
      <div class="col-md-9 sdfsdfa">
          <h1 class="display-4 mb-4">Heading One</h1>
          
      </div>
      <div class="col-md-3">
        <!-- BLOCK -->
        <div class="vidlet-aria">
          <div class="title-vidlet"><i class="fa fa-2x fa-check-circle"></i>
            За букмейкъра
          </div>
          <div class="vidlet-main">
            <span>Основан: 2000</span>
            <span>Страна: Великобритания</span>
            <span>Езици: BG, EN и други</span>
            <span>Лиценз: UK, България, Гибралтар</span>
            <span>Уебсайт: Bet365.com</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- NEWSLETTER -->
  <section id="newsletter" class="bg-secondary text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <input type="text" class="form-control form-control-lg" placeholder="Въведи свое име">
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control form-control-lg" placeholder="Въведи имейл">
          </div>
          <div class="col-md-4">
            <button class="btn btn-warning btn-lg btn-block"><i class="fa fa-envelope-open-o"></i> Получи промокод</button>
          </div>
        </div>
      </div>
  </section>
  <?php require '../../include/footer.php';?>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>
