<!DOCTYPE html>
<html lang="mk-MK">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Водич за почетници - Значење и Видови на облози</title>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

  <?php require '../include/header.php';?>

  <main>
    <section class="container my-5">
        <!-- CARD GROUP -->
        <div class="card-group mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Значење на облози</h4>
                    <p class="card-text">Популарно значење на облози кои ги користат обложувалниците</p>
                </div>
            </div>
        </div>

          <div class="row mb-5">
            <div class="col-md-6">
                <!-- ACCORDION -->
                <div id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse1" data-parent="#accordion" data-toggle="collapse">
                        Залог 1 X 2
                      </a></h5>
                    </div>

                    <div id="collapse1" class="collapse show">
                      <div class="card-body">
                        <ul class="list-unstyled">
                          <li>1 - Победа на домакинот</li>
                          <li>X - Нерешен резултат</li>
                          <li>2 - Победа на гостинот</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse2" data-parent="#accordion" data-toggle="collapse">
                        1X 12 2X - Дупла шанса
                      </a></h5>
                    </div>

                    <div id="collapse2" class="collapse">
                      <div class="card-body">
                        <ul class="list-unstyled">
                          <li>1X - Победа на домакинот или нерешен резултат</li>
                          <li>12 - Победа на домакинот или победа на гостинот</li>
                          <li>2X - Победа на гостинот или нерешен резултат</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse3" data-parent="#accordion" data-toggle="collapse">
                        Вкупно голови
                      </a></h5>
                    </div>

                    <div id="collapse3" class="collapse">
                      <div class="card-body">
                        <ul class="list-unstyled">
                          <li>2+ - На натпреварот ќе има постигнато 2 или повеќе голови.</li>
                          <li>3+ - На натпреварот ќе има постигнато 2 или повеќе голови.</li>
                          <li>4+ - На натпреварот ќе има постигнато 2 или повеќе голови.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse4" data-parent="#accordion" data-toggle="collapse">
                        Вкупно Голови - Опсег 
                      </a></h5>
                    </div>

                    <div id="collapse4" class="collapse">
                      <div class="card-body">
                        <ul class="list-unstyled">
                          <li>0-1 гол -  на натпреварот ќе се постигнат од 0 до 1 гола.</li>
                          <li>0-2 гола -  на натпреварот ќе се постигнат од 0 до 2 гола.</li>
                          <li>0-3 гола -  на натпреварот ќе се постигнат од 0 до 3 гола.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse5" data-parent="#accordion" data-toggle="collapse">
                        Хендикеп +/-
                      </a></h5>
                    </div>

                    <div id="collapse5" class="collapse">
                      <div class="card-body">
                        Домаќинот / Гостинот ќе победи со поголема разлика од зададена хендикеп граница.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse6" data-parent="#accordion" data-toggle="collapse">
                        Двојно дејствие
                      </a></h5>
                    </div>

                    <div id="collapse6" class="collapse">
                      <div class="card-body">
                        Облог "ако". Тој се применува доколку предходниот е добиен, нерешен или откажан.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- ACCORDION -->
                <div id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse7" data-parent="#accordion" data-toggle="collapse">
                        Коефициенти ЗА
                      </a></h5>
                    </div>

                    <div id="collapse7" class="collapse md-show">
                      <div class="card-body">
                        Цената кога коефициентот е помал од 2.
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse8" data-parent="#accordion" data-toggle="collapse">
                        Коефициенти Спрема
                      </a></h5>
                    </div>

                    <div id="collapse8" class="collapse">
                      <div class="card-body">
                        Цената кога коефициентот е поголем од 2.
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" role="tab" id="heading">
                      <h5 class="mb-0"><a href="#collapse9" data-parent="#accordion" data-toggle="collapse">
                        Парлеј
                      </a></h5>
                    </div>

                    <div id="collapse9" class="collapse">
                      <div class="card-body">
                        Американски термин за <a href="#comby">комбиниран облог</a>.
                      </div>
                    </div>
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
          <input type="text" class="form-control form-control-lg" placeholder="Внесете го вашето име">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control form-control-lg" placeholder="Внесете го вашиот е-маил">
        </div>
        <div class="col-md-4">
          <button class="btn btn-warning btn-lg btn-block"><i class="fa fa-envelope-open-o"></i> Добијте промокод</button>
        </div>
      </div>
    </div>
  </section>

    <section class="container my-5">
        <!-- CARD GROUP -->
        
         <h4 class="card-title text-center mb-4">Видови на облози</h4>

         <div class="card mb-4">
            <h4 class="card-header h5">
                Сингл облог
            </h4>
            <div class="card-body">
                <p class="card-text">Cерија од облози на различни настани.Сите настани мора да бидат погодени за да добиете.</p>
            </div>
        </div>

        <div class="card mb-4">
            <h4 class="card-header h5" id='comby'>
                Комбиниран облог
            </h4>
            <div class="card-body">
                <p class="card-text">Cерија од облози на различни настани.Сите настани мора да бидат погодени за да добиете.</p>
            </div>
        </div>

        <div class="card mb-4">
            <h4 class="card-header h5">
                Двойни
            </h4>
            <div class="card-body">
                <p class="card-text">Комбинација од две селекции. За да добиете потребно е да бидат погодени и двете.</p>
            </div>
        </div>

    </section>
  </main>

  <?php require '../include/footer.php';?>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>
