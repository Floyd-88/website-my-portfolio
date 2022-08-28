<div class="modal" id="resume">
    <div class="modal__dialog">
        <button class="modal-close" type="button">
            <img src="images/close.png" alt="close">
        </button>
        <div id="invoice">
            <div class="modal__content">
            <h3 class="modal__title" style="text-align: center;">Резюме</h3>
            <div class="text__center">
                <a class="btn btn--thin" href="#" onclick="generatePDF()">Скачать PDF</a>
                <a class="btn btn--thin" href="#" onClick="javascript:CallPrint('print-content');" title="Распечатать проект" ">Распечатать</a>
            </div>

            <div class="timeline" id="print-content">
                <div class="timeline__col timeline__col--left">
                    <h4 class="timeline__title">
                        опыт работы
                    </h4>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">07.2011 - 11.2011</div>
                        <div class="timeline__sublime">ООО "Эверест"</div>
                        <div class="timeline__position">Программист</div>
                        <div class="timeline__text">

                        </div>
                    </div>
<!--                    <div class="timeline__item">-->
<!--                        <div class="timeline__date" datetime="04-04-2022">12.2011 - 2013</div>-->
<!--                        <div class="timeline__sublime">Газпром Трансгаз Ставрополь</div>-->
<!--                        <div class="timeline__position">Техник ЛЭС</div>-->
<!--                        <div class="timeline__text">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2013 - 2018</div>
                        <div class="timeline__sublime">АО «ГК «ЭнергоГазИнжиниринг»</div>
                        <div class="timeline__position">Помощник Главного инженера проекта</div>
                        <div class="timeline__text">

                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2019 - 2022</div>
                        <div class="timeline__sublime">РТК СК</div>
                        <div class="timeline__position">Главный специалист</div>
                        <div class="timeline__text">

                        </div>
                    </div>
                </div>
                <div class="timeline__col timeline__col--right">
                    <h4 class="timeline__title">
                        образование
                    </h4>
                    <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2005 - 2010</b>
                        </div>
                        <div class="timeline__sublime">Геология нефти и газа</div>
                        <div class="timeline__position">Северо-Кавказский Государственный Технический Университет</div>
                        <div class="timeline__text">Специальность горный инженер</div>
                    </div>
                    <!-- <div class="timeline__item">
                        <div class="timeline__date" datetime="04-04-2022">2005 - 2010</b>
                        </div>
                        <div class="timeline__sublime">Геология нефти и газа</div>
                        <div class="timelime__position">СевКавГТУ</div>
                        <div class="timeline__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ex iste, dolorum pariatur fuga accusamus ad. Reiciendis atque dolore, cumque dolorem iste ad mollitia libero, iusto officia corrupti voluptatibus animi.</div>
                    </div> -->
                    <h4 class="timeline__title">Навыки</h4>
                    <div class="progress-bar">
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    HTML
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 80%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    CSS
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 50%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    Адаптивная верстка под мобильные устройства
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 80%;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    JavaScript
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 70%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    PHP
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 70%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">
                                    Работа с базами данных SQL
                                </div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar_progres" style="width: 70%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="timeline__title">Курсы</h4>
                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime">Stepik - JavaScript для начинающих</div>
                        <div class="timeline__position">Завершил с отличием</div>
                        <div class="timeline__text">Сертификат можно посмотреть
                            <a href="https://stepik.org/cert/1383215">по ссылке</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime">Stepik - Веб-разработка для начинающих: HTML и CSS</div>
                        <div class="timeline__position">Завершил с отличием</div>
                        <div class="timeline__text">Сертификат можно посмотреть
                            <a href="https://stepik.org/cert/1404917">по ссылке</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> FreeCodeCamp - JavaScript Algorithms and Data Structures</div>
                        <div class="timeline__position">Basic JavaScript, ES6, Debugging, Basic Data Structures, Basic
                            Algorithm Scripting, Object Oriented Programming, Functional Programming, Intermediate
                            Algorithm Scripting
                        </div>
                        <div class="timeline__text"><a target="_blank" href="https://www.freecodecamp.org/Floyd_88">Ссылка
                                на профиль</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> FreeCodeCamp - Responsive Web Design
                        </div>
                        <div class="timeline__position">Basic HTML and HTML5, Basic CSS, Applied Visual Design, Applied
                            Accessibility
                        </div>
                        <div class="timeline__text"><a target="_blank" href="https://www.freecodecamp.org/Floyd_88">Ссылка
                                на профиль</a></div>
                    </div>

                    <div class="timeline__item">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> FreeCodeCamp - Responsive Web Design
                        </div>
                        <div class="timeline__position">Basic HTML and HTML5, Basic CSS, Applied Visual Design, Applied
                            Accessibility
                        </div>
                        <div class="timeline__text"><a target="_blank" href="https://www.freecodecamp.org/Floyd_88">Ссылка
                                на профиль</a></div>
                    </div>

                    <div class="timeline__sublime">
                        <!-- <div class="timeline__date" datetime="04-04-2022">2019</div> -->
                        <div class="timeline__sublime"> Codewars
                        </div>
                        <div class="timeline__position">Алгоритмические задачи по JS</div>
                        <div class="timeline__text"><a target="_blank" href="https://www.codewars.com/users/Floyd_88">Ссылка
                                на профиль</a></div>
                    </div>
                </div>

            </div>
            <div class="text__center">
                <button class="btn" data-btn="contact" onclick="showModal(this)">Мои контакты</button>
            </div>
        </div>
        </div>
    </div>
</div>