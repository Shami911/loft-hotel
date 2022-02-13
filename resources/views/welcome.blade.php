@extends('layout')
@section('title')Главная@endsection
@section('content')
    

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background: url(storage/images/{{$info->bgimage}}) center center;background-size:50%;">
    <div class="hero-container" data-aos="fade-up">
      <h1>{{$info->slogan}}</h1>
      {{-- <h2>Мини отели предусмотрены, чтобы туристы смогли сэкономить деньги и превосходно отдохнуть. Позвольте нашему коллективу открыть перед вами возможности мини отеля, чтобы вы смогли «собрать впечатления» в Дербенте и стать еще чуть-чуть счастливее. Мы очень ждем вас!</h2> --}}
      {{-- <h2>{{$info->description}}</h2> --}}
      <a href="#why" class="btn-get-started scrollto">Почему мы?</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h4>ЖДЕМ ВАС!</h4>
              <h3>Приглашаем Вас в наш гостевой дом «LOFT».</h3>
              <p>Современный гостевой дом "LOFT" является отличным выбором для любителей искусства, дизайна и технологий.</p>
            </div>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Интерьер</a></h4>
              <p class="description">Элегантный интерьер и полный комфорт создают идеальную атмосферу для отдыха после многочисленных экскурсий.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Индивидуальный подход</a></h4>
              <p class="description">Индивидуальный подход к запросам гостей является одной из наших сильных сторон: от момента бронирования до благополучного возвращения домой.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Консьерж</a></h4>
              <p class="description">Наш персонал всегда в Вашем распоряжение, рады предоставить Вам любую помощь и дать необходимую информацию: заказать билеты, взять в аренду машину, воспользоваться услугами прачечной, заказать сиделку для ваших детей или столик в ресторане, получить информацию о городских мероприятиях, концертах...</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>9 причин остановиться у нас:</h2>
          <h3 id="why">Почему вам стоит <span>выбрать нас</span>?</h3>
          <p>Чтобы вы могли достичь удовольствия и удовольствий жизни.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box p-50px"  style="height: 390px;"  data-aos="fade-up">
              <span>01</span>
              <h4>Функциональные, укомплектованные номера.</h4>
              <p>Это очень важное условие для полноценного отдыха и проживания. В наших номерах есть все для организации досуга (в том числе wi-fi), вы сможете самостоятельно настроить температурный режим в помещении, принимать душ или ванну с высоким комфортом ипрочее.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box mb-4" style="height: 390px;" data-aos="fade-up" data-aos-delay="100">
              <span>02</span>
              <h4>Современный дизайнерский интерьер.</h4>
              <p>То, что мы видим и что нас окружает, напрямую влияет на наше настроение. Мы окружили своих клиентов красотой и гармонией, как подобает отелю высокого уровня, поэтому отличный настрой вам гарантирован.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0 "  style="height: 500px:" data-aos="fade-up" data-aos-delay="200">
            <div class="box mb-4"  style="height: 390px;">
              <span>03</span>
              <h4>Приемлемые цены</h4>
              <p>Хотя это гостиница, цены в ней формирует не только бизнес, но и любовь к клиентам. Наш мини-отель предоставляет множество качественных услуг за разумные деньги, воспользовавшись ими, вы согласитесь, что они аргументированы.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box mb-4" style="height: 390px;">
              <span>04</span>
              <h4> Улучшенный сервис и много внимания.</h4>
              <p>Это одна из приятных особенностей небольших отелей. Так как номеров у нас не много (а значит и постояльцев), наш персонал может каждому клиенту уделить столько времени, сколько будет необходимо. К каждому индивидуальный подход!</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box mb-4" style="height: 390px;">
              <span>05</span>
              <h4>Тишина.</h4>
              <p>Это еще один плюс маленьких отелей. Небольшое число постояльцев даст вам возможность отдыхать в тишине и покое. В то же время, при желании, вы можете в таком маленьком «коллективе» обзавестись и новыми друзьями.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box mb-4" style="height: 390px;">
              <span>06</span>
              <h4>Тихое, но красочное расположение гостиницы.</h4>
              <p>Большинство интересных для посещения мест старого города находятся близко к нашему отелю, поэтому можно совместить пешую прогулку и погружение в историю и искусство. Даже если вас привела в наш город деловая поездка, удобное расположение отеля подарит вам время и приятные впечатления.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box mb-4" style="height: 390px;">
              <span>07</span>
              <h4>Достопримечательности.</h4>
              <p>Мы расположены в уникальном месте - в центре города, который лишен шума. Развитая инфраструктура и близость к природе – отличное сочетание.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box mb-4" style="height: 390px;">
              <span>08</span>
              <h4>Мы любим свою работу и своих клиентов!</h4>
              <p>Мы понимаем, что нужно для полноценного отдыха и стараемся максимально приблизиться к идеалу! У нас уникальная атмосфера – сочетание европейского качества и славянской души! Наш мини-отель «Винтаж» приглашает вас погрузиться в нее, чтобы потом вернуться снова. Поверьте, гостиница может стать вашим вторым домом!</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box mb-4" style="height: 390px;">
              <span>09</span>
              <h4>Завтрак в удобное для постояльцев время.</h4>
              <p>Вас порадует меню завтраков, которые мы предлагаем, а также то, что они подаются в соответствии с вашим режимом и вашими вкусами. Завтрак входит в стоимость номера.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Бронирование номера</h3>
          <p> Что вы получаете, когда заранее делаете бронь номера?</p>
          <p>Теперь не обязательно обрывать телефон и обзванивать лично все гостиницы, уточняя, есть ли на нужную дату нужный номер. Предусмотрительные путешественники пользуются современными онлайн-ресурсами по бронированию, где можно проверить всю информацию о  конкретном номере самостоятельно, не прибегая к помощи администрации гостиницы. </p>
          <a class="cta-btn" href="#Booking">Забронировать</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Сервис</h2>
          <h3>Наши <span>Услуги</span></h3>
          <p>Так что мы можем быть в состоянии достичь удовольствий и удовольствий жизни.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="#room2">Уютные номера</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="#car">Встреча на импортном авто</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="#tur">Различные туры</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="#cafe">Сотрудничаем с кафе "London"</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="#car">Аренда машин</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="#dress">Скидки в магазине одежды</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2 id="Booking">Бронирование номера и авто</h2>
          <h3>Забронировать <span> Номер или Авто</span></h3>
          
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Бронирование</li>
              <li data-filter=".filter-app" id="room2">2-местный</li>
              <li data-filter=".filter-web">3-местный</li>
              <li data-filter=".filter-card">Аренда машин</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="storage/images/первый двухместный номер.webp" style="object-fit: cover; width:100%; height:312px;object-position:0%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <a href="/portfolio_coment">
              <p>3500 р</p>
            </a>
              <a href="storage/images/первый двухместный номер.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="двухместный номер"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="двухместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="storage/images/второй двухместный номер.jpg" style="width:100%; height:312px;object-position:0%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>3500 р</p>
              <a href="storage/images/второй двухместный номер.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="двухместный номер"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="двухместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="storage/images/r3.jpg" style="object-fit: cover; width:100%; height:312px;object-position:0%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>3500 р</p>
              <a href="storage/images/r3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="двухместный номер"><i class="bx bx-plus"></i></a>
              <a href="storage/portfolio-details.html" class="details-link" title="двухместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="storage/images/4 двухместный номер.jpg" style="object-fit: cover; width:100%; height:312px;object-position:0%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>3500 р</p>
              <a href="storage/images/4 двухместный номер.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="двухместный номер"><i class="bx bx-plus"></i></a>
              <a href="storage/portfolio-details.html" class="details-link" title="двухместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="storage/images/10 трехместный.jpg" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>4500 р</p>
              <a href="storage/images/10 трехместный.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="трехместный номер"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="трехместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="storage/images/2 трехкомнатный номер.jpg" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>4500 р</p>
              <a href="storage/images/2 трехкомнатный номер.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="трехместный номер3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="трехместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="storage/images/4 двухместный номер.jpg" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>4500 р</p>
              <a href="storage/images/4 двухместный номер.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="двухместный номер"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="двухместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="storage/images/4 трехместный номер.jpg" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>4500 р</p>
              <a href="storage/images/4 трехместный номер.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="трехместный номер"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="трехместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="storage/images/8 трехместный.jpg" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Бронирование</h4>
              <p>4500 р</p>
              <a href="storage/images/8 трехместный.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="трехместный номер"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="трехместный номер"><i class="bx bx-link"></i></a>
            </div>
          </div>

          


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="storage/images/Cadillac_escalade_450648_1920x1080.jpeg" id="car" style="object-fit: cover; width:100%; height:312px;object-position:-30%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Cadillac escalade</h4>
              <p>10.000 Rub</p>
              <a href="storage/images/Cadillac_escalade_450648_1920x1080.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Cadillac escalade"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="storage/images/5700.jpg" style="object-fit: cover; width:100%; height:312px;object-position:20%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lexus LX 570</h4>
              <p>10.000 Rub</p>
              <a href="storage/images/5700.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lexus LX 570"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="storage/images/Toyota_Alphard_2018_price_Rus_2.jpg" style="object-fit: cover; width:100%; height:312px;object-position:95%;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Toyota Alphard</h4>
              <p>10.000 Rub</p>
              <a href="storage/images/Toyota_Alphard_2018_price_Rus_2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Toyota Alphar"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Советуем посетить</h2>
          <h3>Для вашего удобства мы советуем вам посетить эти <span>Места</span></h3>
          <p>Вы можете посетить туристические места или получать скидку в магазине одежды, а так же для вас вы получите 20% скидку в кафе "London".</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="storage/images/Лондон.jpg" id="cafe" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>"London"</h4>
                <span>Кафе</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="storage/images/dag-tur.png" id="tur" style="object-fit: cover; width:100%; height:312px;object-position:30%;" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>"Даг-тур"</h4>
                <span>Туристическое агенство</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="storage/images/Intermod.jpg" id="dress" style="object-fit: cover; width:100%; height:312px;object-position:50%;" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>"Intermod"</h4>
                <span>Магазин одежды</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="storage/images/Хаял.jpg" style="object-fit: cover; width:100%; height:312px;object-position:50%;" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>"Хаял"</h4>
                <span>Кинотеатр</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            

           

            

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Тарланов Шамиль Тарланович</h3>
                <h4>Администратор</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Мы рады каждому клиенту!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h2>
          <h3>Выберите удобный пакет и получи <span>Скидку</span></h3>
          <p>Вы можете выбрать удобный для вас пакет предложений.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Базовый</h3>
              <h4><sup><del>4000p</del></sup> 3000<span>p / день</span></h4>
              <ul>
                <li>Гостиничный номер</li>
                <li class="na">Завтрак</li>
                <li class="na">Тур по городу</li>
                <li class="na">Транспорт с аэропорта</li>
                <li class="na">Транспорт в аэропорт</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Оформить покупку</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
              <span class="recommended-badge">Рекомендуемый</span>
              <h3>Расширенный</h3>
              <h4><sup><del>8000p</del></sup>7000<span>p / день</span></h4>
              <ul>
                <li>Гостиничный номер</li>
                <li>Завтрак</li>
                <li>Тур по городу</li>
                <li class="na">Транспорт с аэропорта</li>
                <li class="na">Транспорт в аэропорт</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Оформить покупку</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Максимальный</h3>
              <h4><sup><del>28.000p</del></sup>26.000<span>p / день</span></h4>
              <ul>
                <li>Транспорт с аэропорта</li>
                <li>Гостиничный номер</li>
                <li>Завтрак</li>
                <li>Тур по городу</li>
                <li>Транспорт в аэропорт</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Оформить покупку</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>F.A.Q</h2>
          <h3>Часто задаваемые <span>Вопросы</span></h3>
          <p>Тут вы можете просмотреть часто задаваемые вопросы у нас.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">В какое время в отеле осуществляется регистрация заезда и отъезда? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Заезд: 14:00 Отъезд: 12:00
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Цены указаны за одного человека или за номер? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Цены указаны за номер.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Есть ли в номере телевизор? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Да, во всех номерах установлен телевизор.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Включены ли завтраки в стоимость номера? и Какого типа завтрак предоставлен? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Завтрак входит в тариф. Наши завтраки шведского типа.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Возможно подключится к Интернету из номера? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Всем гостям предоставляется бесплатный доступ к высокоскоростному wi-fi не только в номерах, но и по всей территории гостиницы. Помимо того, в Лобби находится компьютер, позволяющий свободное пользование Интернетом.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Как далеко от гостиницы находится железнодорожный вокзал? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Железнодорожный вокзал находится примерно в 700-х метрах от отеля.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Есть сервис «Шаттл» от и до аэропорта? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Мы предоставляем шаттл-сервис, но можем помочь организовать трансфер на такси.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Разрешены ли в отеле домашние животные? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                 Нет.
                </p>
              </div>
            </li>


            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Предоставляете ли Вы прачечные услуги и химчистку?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Да, за исключением выходных и праздничных дней. Доставка происходит в тот же самый день, если заказ осуществлён до 09:00 утра вместе с заполненным модулем.
                </p>
              </div>
            </li>


            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Где можно взять на прокат машину?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Вы можете взять машину напрокат в близжайших от отеля агенствах и наш персонал поможет Вам в выборе.
                </p>
              </div>
            </li>



            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Есть ли в номера кондиционер?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Да, во всех номерах установлены кондиционеры, которые могут быть регулированы индивидуально. Если же у Вас возникают трудности в эксплуатации, позовите кого-нибудь с ресепшена, Вам всегда помогут.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        {{-- Карта --}}
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0d7d05c6fae4cf50f159083443174c344489d8f4271600b757f6c47b7628cf06&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script><br>
        {{-- Карта end  --}}
        
        <div class="section-title" data-aos="zoom-in">
          <h2>Контакты</h2>
          <h3>Связь с нами <span>Hotel</span> Loft</h3>
          <p>Заполните таблицу, в ближайшее время мы свяжемся с вами.</p>
        </div>

        
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Локация:</h4>
                <p>г. Дербент, Ленина 43</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>hotel_loft_derbent@icloud.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Телефон:</h4>
                <p>+7 928 049 37 97</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Откуда вы" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Сообщение" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Отправка</div>
                <div class="error-message"></div>
                <div class="sent-message">Сообщение отправлено! Спасибо вам в скором времени мы ответим вам!</div>
              </div>
              <div class="text-center"><button type="submit">Отправить</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  
@endsection