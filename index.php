<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 

<header class="header">
    <div class="container">
        <div class="header-top">
            <div class="date">
                <span class="date-day">Среда , 8 Февраля 2017</span>
            </div>
            <div class="tel">
                <a href="tel:+74957232832">+7 (495) 723 28 32</a>
                <a href="tel:+79255327714">+7 (925) 532 77 14</a>
            </div>
            <div class="email">
                <a href="mailto:info@bazagf.ru"></a> 
            </div>
            <div class="social">
                <a href="#" class="social-facebook" title="Facebook"></a>
                <a href="#" class="social-vk" title="VK"></a>
                <a href="#" class="social-ok" title="Ok"></a>
                <a href="#" class="social-linkedin" title="LinkedIn"></a>
                <a href="#" class="social-youtube" title="Youtube"></a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-logo">
                <a href="/"><img src="img/logo.xxx" alt="Логотип" title="База ГФ"></a>
            </div>
            <div class="header-banner-one">
                <a href="#"><img src="img/banner1" alt="Баннер1" title=""></a>
            </div>
            <div class="header-banner-two">
                <a href="#"><img src="img/banner1" alt="Баннер2" title=""></a>
            </div>
        </div>
    </div>
</header>

<section class="menu">
    <div class="container">
        <ul class="menu-list">
            <li><a href="#" class="menu-item">о нас</a></li>
            <li><a href="#" class="menu-item">купить</a></li>
            <li><a href="#" class="menu-item">продать</a></li>
            <li><a href="#" class="menu-item">новости</a></li>
            <li><a href="#" class="menu-item">контакты</a></li>
        </ul>
    </div>
</section>

<section class="slider">
    <ul>
        <li><img src="img/slider/1.png" alt=""></li>
        <li><img src="img/slider/2.png" alt=""></li>
    </ul>
</section>

<section class="search">
        <div class="container">
            <div class="search-panel">
                <form action="" method="">
                    <input type="text" name="name" class="search-panel-input" placeholder="Введите поисковой запрос. Например: Дальневосточное Морское Проектирование">
                    <button type="submit" class="search-panel-button"></button>
                </form>
            </div>
        </div>
</section>

<section class="filters">
    <div class="container">
        <div class="filters-select">
            <span class="filters-select-title">Год создания</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Стоимость компании</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Вид деятельности</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Организационно-правовая форма</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">ИФНС</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Лицензия</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Обороты</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Расчетный счет</span>
            <span class="filters-select-button"></span>
        </div>
        <div class="filters-select">
            <span class="filters-select-title">Система налогооблажения</span>
            <span class="filters-select-button"></span>
        </div>
        <a class="filters-button">Показать</a>
    </div>
</section>

<section class="table">
<!--   Как это будет работать.
       Стандартная таблица для десктопа будет исспользовать свойство css3 columns, благодаря которому будет создано 12коллонок, ширина которых
       будет автоматически определятся браузером
       А в адаптивной версии будут использоваться свойство flex-box c параметром justify-content:space-between тогда будет виден присок с описанием в span и значением в виде обычного текста-->
    <div class="container">
        <div id="table-header">
            <div>Название</div>
            <div>ОПФ</div>
            <div>Год создания</div>
            <div>ОГРН</div>
            <div>ИФНС</div>
            <div>С/Н</div>
            <div>Основной вид деятельности</div>
            <div>Расчетный счет</div>
            <div>Обороты</div>
            <div>Лицензия</div>
            <div>Стоймость компании</div>
            <div>Дополнительно</div>
        </div>
        <div id="table-content">
            <div id="table-item">
                <div><span>Название</span><a href="#">Дэни</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>28.10.2009</div>
                <div><span>ОГРН</span>1167746472420</div>
                <div><span>ИФНС</span>5</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>47.1 Розничная торговля в неспециализированных ...</div>
                <div><span>Расчетный счет</span>Абсолют банк</div>
                <div><span>Обороты</span>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>60 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Вечность</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>17.05.2016</div>
                <div><span>ОГРН</span>1167746472420</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>41.20 Строительство жилых и нежилыж ...</div>
                <div><span>Расчетный счет</span>ВТБ 24</div>
                <div><span>Обороты</span>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>110 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Континиуум</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>11.10.2013</div>
                <div><span>ОГРН</span>1137746937646</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>64.91 Деятельность по финансовой аренде ...</div>
                <div><span>Расчетный счет</span>ООО “Экспонат” и Московском Парижском     банке</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>40 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Этлос.ком</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>02.02.2015</div>
                <div><span>ОГРН</span>1157746067214</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>74.50 Найм рабочей силы и подбор персонала</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>100 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">М фреш</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>19.02.2013</div>
                <div><span>ОГРН</span>1137746139080</div>
                <div><span>ИФНС</span>02</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>93.04 Физкультурно-оздоровительная деятельность</div>
                <div><span>Расчетный счет</span>Межрегиональный почтовый банк</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>50 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Арт</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>28.11.2014</div>
                <div><span>ОГРН</span>5147746413392</div>
                <div><span>ИФНС</span>20</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>46.71 Торговля оптовая твердым, жидкими ...</div>
                <div><span>Расчетный счет</span>Сбербанк</div>
                <div><span>Обороты</span>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>45 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Европейский энергетический союз</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>18.06.2015</div>
                <div><span>ОГРН</span>1157746551368</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>32.11 Производство электроэнергии</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>95 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Вечность</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>17.05.2016</div>
                <div><span>ОГРН</span>1167746472420</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>41.20 Строительство жилых и нежилыж ...</div>
                <div><span>Расчетный счет</span>ВТБ 24</div>
                <div><span>Обороты</span>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>110 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Континиуум</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>11.10.2013</div>
                <div><span>ОГРН</span>1137746937646</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>64.91 Деятельность по финансовой аренде ...</div>
                <div><span>Расчетный счет</span>ООО “Экспонат” и Московском Парижском     банке</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>40 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Этлос.ком</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>02.02.2015</div>
                <div><span>ОГРН</span>1157746067214</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>74.50 Найм рабочей силы и подбор персонала</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>100 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">М фреш</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>19.02.2013</div>
                <div><span>ОГРН</span>1137746139080</div>
                <div><span>ИФНС</span>02</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>93.04 Физкультурно-оздоровительная деятельность</div>
                <div><span>Расчетный счет</span>Межрегиональный почтовый банк</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>50 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Арт</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>28.11.2014</div>
                <div><span>ОГРН</span>5147746413392</div>
                <div><span>ИФНС</span>20</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>46.71 Торговля оптовая твердым, жидкими ...</div>
                <div><span>Расчетный счет</span>Сбербанк</div>
                <div><span>Обороты</span>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>45 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Европейский энергетический союз</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>18.06.2015</div>
                <div><span>ОГРН</span>1157746551368</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>32.11 Производство электроэнергии</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>95 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
        </div>
    </div>
</section>

<section class="aboutus">
    <div class="container">
        <h2 class="aboutus-title"></div>
        <div class="content">
            <div class="aboutus-content-preview"><img src="" alt=""></div>
            <div class="aboutus-content-text">
                <p>БАЗА ГФ предлагает более 600 компаний ежедневно на протяжение 5 лет. 
                Мы поможем купить или продать готовый бизнес в максимально короткие сроки и отреагируем на вашу заявку в тот же день.</p><p>У нас вы можете самостоятельно выбрать компанию по любым существующим критериям, указав их либо в общих чертах, либо максимально подробно. Также вы можете позвонить или направить заявку онлайн менеджерам БАЗА ГФ. Мы предоставляем клиентам возможность подбора нескольких компаний на выбор. Нашими клиентами являются юридические фирмы, специалисты по регистрации, владельцы малого и среднего бизнеса. Мы ежедневно обновляем базу компаний и предлагаем к покупке и продаже только реально существующие фирмы. Поскольку все мы - юристы, каждый со своей специализацией и немалым опытом, мы официально сопровождаем ваши сделки от начала и до их завершения, независимо от сложности или бюджета. Мы работаем быстро и на выгодных для клиентов условиях.</p><p>Приходите, у нас все готово для успеха вашего бизнеса!</p>
            </div>
        </div>
        <div class="aboutus-advantages">
            <div class="aboutus-advantages-block">
                <img src="" alt="">
                <div class="advantages-block-title">Компании с оборотами</div>
            </div>
            <div class="aboutus-advantages-block">
                <img src="" alt="">
                <div class="advantages-block-title">по всем регионам россии</div>
            </div>
            <div class="aboutus-advantages-block">
                <img src="" alt="">
                <div class="aboutus-advantages-block-title">Компании с лицензиями</div>
            </div>
        </div>
    </div>
</section>

<section class="feedback">
    <div class="container">
        <p class="feedback-text">Мы всегда рады услышать вас</p>
        <a href="#" class="feedback-button"></a>
    </div>
</section>
    
<section class="services">
    <h2 class="services-title">предоставляемые услуги</h2>
    <div class="services-block">
        <div class="block-title">купить и продать</div>
        <div class="blok-content">
            <p>Москва, ул. Гиляровского, дом 57, стр. 1<br>+7 (495) 723 28 32<br>+7 (925) 532 77 14 <br>E-mail: info@bazagf.ru</p><br> 
            <p>Отдел контроля качества<br>+7 (903) 105 55 77</p>
            <a href="#" class="callme">Заказать звонок</a>
        </div>
    </div>
    <div class="services-block">
        <div class="block-title">юридическое сопровождение</div>
        <div class="blok-content">
            <p>- Регистрация коммерческих и некоммерческих организаций;<br>
               - Представительство в суде;<br>
               - Регистрация товарных знаков;<br>
               - Сделки с недвижимостью;<br>
               - Лицензирование;<br>
               - Налоговые споры;<br>
               - Ликвидация и банкротство.<br>
               E-mail: ftgroup7@yandex.ru</p>
            <a href="#" class="callme">Заказать звонок</a>
        </div>
    </div>
    <div class="services-block">
        <div class="block-title">купить и продать</div>
        <p>- Бухгалтерское обслуживание фирм;<br>
           - Бухгалтерское обслуживание ВЭД;<br>
           - Восстановление бухгалтерского учета;<br>
           - Налоговые консультации;<br>
           - Обязательный и инициативный аудит;<br>
           - Налоговые риски;<br>
           - Due diligence.<br>
           E-mail: ftgroup7@yandex.ru</p>
        <a href="#" class="callme">Заказать звонок</a>
    </div>
</section>

<section class="news">
    <div class="news-title">последние новости</div>
    <div class="news-block">
        <div class="block-preview">
            <img src="" alt="">
        </div>
        <h3 class="block-title">зачем нужна оценка облигаций</h3>
        <p class="block-text">Для определения объективной рыночной стоимости многих ценных бумаг (например, облигаций) существует стандартная финансовая процедура, называемая оценкой. Оценка позволяет определить цену облигации, учитывая весь массив влияющих на нее факторов ...</p>
        <a href="#" class="block-readmore">Читать далее > </a>
    </div>
    <div class="news-block">
        <div class="block-preview">
            <img src="" alt="">
        </div>
        <h3 class="block-title">10 шагов к собственному магазину</h3>
        <p class="block-text">Итак, вы решили стать владельцем магазина! Поздравляем! Теперь важно грамотно оформить все бумаги, чтобы быть уверенным, что у государства не будет к вам никаких претензий ...</p>
        <a href="#" class="block-readmore">Читать далее > </a>
    </div>
    <div class="news-block">
        <div class="block-preview">
            <img src="" alt="">
        </div>
        <h3 class="block-title">как малому бизнесу справиться  с налогами?</h3>
        <p class="block-text">Вы открыли собственную компанию. Пока это совсем маленькая компания, в ней и работников-то всего вы, жена-бухгалтер и пара приятелей, но налоги с вас государство спрашивает так же строго, как и с большого автомобильного завода. Что же делать? ...</p>
        <a href="#" class="block-readmore">Читать далее > </a>
    </div>
    <a href="#" class="news-allnews"></a>
</section>




<footer>
    <?php include "blocks/footer.php"; ?>             
</footer>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
