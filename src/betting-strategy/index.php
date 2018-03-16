<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Стратгеии</title>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  
  <?php require '../include/header.php';?>

  <main>
    <section class="container my-5">
      <h1 class="w100 text-center h2 mb-4">Полезни стратегии за залагане на спорт</h1>
      <div class="row">
        <div class="col-md-6">
          <!-- LIST GROUP WITH LINKS -->
          <ul class="list-group mb-5">
              <li class="list-group-item list-group-item-info">Финансови стратегии</li>
              <a class="list-group-item list-group-item-action" href="#">My List Item Two</a>
              <a class="list-group-item list-group-item-action" href="#">My List Item Three</a>
              <a class="list-group-item list-group-item-action" href="#">My List Item Four</a>
              <a class="list-group-item list-group-item-action" href="#">My List Item Five</a>
          </ul>
        </div>
        <div class="col-md-6">
          <!-- LIST GROUP WITH LINKS -->
          <ul class="list-group mb-5">
              <li class="list-group-item list-group-item-warning">Футбол стратегии</li>
              <a class="list-group-item list-group-item-action" href="/betting-strategy/1/">Как да печелим од залози на футбол</a>
              <a class="list-group-item list-group-item-action" href="/betting-strategy/2/">Как да залагаме на голове Над/Под</a>
              <a class="list-group-item list-group-item-action" href="/betting-strategy/3/">My List Item Four</a>
              <a class="list-group-item list-group-item-action" href="/betting-strategy/4/">My List Item Five</a>
          </ul>
        </div>
      </div>
    </section>
    <section class="container mb-5">
      <!-- HEADER, FOOTER, CENTERED -->
        <div class="card text-center">
            <div class="card-header">
                Полезна статия
            </div>
            <div class="card-body">
                <h4 class="card-title">Тенис стратегия</h4>
                <p class="card-text">Подробен гайд за залагане на тенис. Кой, какво, кога.</p>
                <a href="#" class="btn btn-danger">Прочети</a>
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

  </main>

  <?php require '../include/footer.php';?>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>
