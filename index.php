<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4px</title>
  <script src="/_source/module/jquery-3.5.1.min.js"></script>
  <script src="/_source/js/classes.js"></script>
  <script src="/_source/js/home.js"></script>
  <script src="/_source/module/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="/_source/css/module/owl.carousel.min.css">
  <link rel="stylesheet" href="/_source/css/module/owl.theme.default.min.css">
  <link rel="stylesheet" href="/_assets/style.css">
</head>
<body>
  <main class="home">
    <div class="container">
      <h1 class="title home__title">Модельный ряд</h1>
      <ul class="js-carbody-list">
        <li class="js-carbody-list__name js-carbody-list__name_active" data-type="crossover">Внедорожники / кроссоверы</li>
        <li class="js-carbody-list__name" data-type="sedan">Седаны</li>
        <li class="js-carbody-list__name" data-type="crosscountry">Cross Country</li>
      </ul>
      <div class="home__model-list-wrapper">
        <ul class="js-model-list js-model-list_active owl-carousel owl-theme" data-type="crossover">
          <li class="js-model-list__unit js-model-list__unit_active" data-model="XC90">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">XC90</p>
          </li>
          <li class="js-model-list__unit" data-model="XC60">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">XC60</p>
          </li>
          <li class="js-model-list__unit" data-model="XC40">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">XC40</p>
          </li>
        </ul>
        <ul class="js-model-list owl-carousel owl-theme" data-type="sedan">
          <li class="js-model-list__unit" data-model="S60">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">Новый S60</p>
          </li>
          <li class="js-model-list__unit" data-model="S90">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">S90</p>
          </li>
        </ul>
        <ul class="js-model-list owl-carousel owl-theme" data-type="crosscountry">
          <li class="js-model-list__unit" data-model="V90">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">V90 cross country</p>
          </li>
          <li class="js-model-list__unit" data-model="V60">
            <div class="js-model-list__img"></div>
            <p class="js-model-list__name">V60 cross country</p>
          </li>
        </ul>
      </div>
      <div class="home__car-info-wrapper">
        <div class="car-info car-info_active" data-model="XC90">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/XC90.png" alt="XC90">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">XC90</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
        <div class="car-info" data-model="XC60">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/XC60.png" alt="XC60">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">XC60</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
        <div class="car-info" data-model="XC40">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/XC40.png" alt="XC40">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">XC40</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
        <div class="car-info" data-model="S60">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/S60.png" alt="Новый S60">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">Новый S60</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
        <div class="car-info" data-model="S90">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/S90.png" alt="S90">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">S90</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
        <div class="car-info" data-model="V90">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/V90.png" alt="V90 cross country">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">V90 cross country</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
        <div class="car-info" data-model="V60">
          <div class="car-info__view">
            <img class="car-info__img" src="/_source/img/models-big/V60.png" alt="V60 cross country">
            <div class="car-info__label">
              <span class="car-info__label-text">15 Автомобилей</span>
              <span class="car-info__label-undertext">по специальным ценам</span>
            </div>
          </div>
          <div class="car-info__credit">
            <h2 class="car-info__model">V60 cross country</h2>
            <ul class="car-info__data-list">
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Выгода до</p>
                  <p class="car-info__data-value">250&nbsp;000&nbsp;&#8381;</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Кредитная ставка</p>
                  <p class="car-info__data-value">5,9%<sup>1</sup></p>
                </li>
              </div>
              <div class="car-info__data-col">
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Бонус</p>
                  <p class="car-info__data-value">Trade-in</p>
                </li>
                <li class="car-info__data-unit">
                  <p class="car-info__data-name">Ежемесячный платеж</p>
                  <p class="car-info__data-value">20&nbsp;358&nbsp;&#8381;<sup>2</sup></p>
                </li>
              </div>
            </ul>
            <div class="credit-type car-info__credit-type">
              <span class="credit-type__credit-name">Кредит</span>
              <span class="credit-type__credit-switch">
                <svg viewBox="0 0 11 11" class="credit-type__switcher credit-type__switcher_position_right">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#switcher"></use>
                </svg>
              </span>
              <span class="credit-type__credit-name credit-type__credit-name_active">Лизинг</span>
            </div>
            <div class="car-info__feedback">
              <button class="proposal js-car-info__proposal">
                Получить предложение
                <span>
                  <svg viewBox="0 0 6 9" class="proposal__arrow">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
                  </svg>
                </span>
              </button>
              <a class="car-info__test-drive" href="#">Тест-драйв</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal home__modal">
        <form class="modal__get-proposal">
          <h3 class="modal__title">ПОлучить предложение</h3>
          <p class="modal__text">Оставьте заявку и наши менеджеры свяжутся с Вами в ближайшее время</p>
          <input class="modal__phone-input" type="tel" name="tel" placeholder="+7 (___) ___-__-__" required>
          <button class="proposal modal__proposal" type="submit">
            Получить предложение
            <span>
              <svg viewBox="0 0 6 9" class="proposal__arrow">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#right-arrow"></use>
              </svg>
            </span>
          </button>
          <div class="modal__privacy">
            <input class="modal__checkbox" type="checkbox" name="checkbox" required>
            <p class="modal__text modal__text_align_left">
              Я даю согласие на <a class="modal__personal-data" href="#" target="_blank">обработку персональных данных</a>
            </p>
          </div>
        </form>
        <div class="modal__answer">
          <h3 class="modal__title">Спасибо!</h3>
          <p class="modal__undertitle">Ваша заявка успешно отправлена</p>
          <p class="modal__text">Наши менеджеры свяжутся с Вами в ближайшее время</p>
        </div>
      </div>
    </div>
  </main>
<?php
  echo file_get_contents('./_source/svg/home.svg');
?>
<link rel="stylesheet" href="/_source/css/module/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script src="/_source/module/jquery.fancybox.pack.js?v=2.1.7"></script>
<script src="/_source/module/jquery.maskedinput.js"></script>
<script src="/_source/js/functions.js"></script>
</body>
</html>