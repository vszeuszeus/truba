@extends('main_page')
@section('sections')
    <div class="wrapper bgded overlay" style="background-image:url('build/img/bg/01.png');">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article class="introtxt">
                <h2 class="heading">Заголовок</h2>
                <p>Подзаголовок о компании в этом месте будет очень круто</p>
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn" href="#">Скачать прайс товаров</a></li>
                        <li><a class="btn inverse" href="#">Услуги</a></li>
                    </ul>
                </footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <section class="wrapper style2">
        <div class="hoc">
            <div class="center btmspace-50">
                <h2 class="heading font-x3">О Нашей Компании</h2>
                <p>Подзаголовок подзаголовок подзаголовок подзаголовок подзаголовок.</p>
            </div>
            <div class="group">

                <div class="two_third first">

                    <p>Etiam posuere hendrerit arcu, ac blandit nulla. Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex.</p>
                    <p>Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex. </p>
                </div>
                <div class="one_third">
                    <div class="image round fit">
                        <a class="link"><img  class="krug" src="{{asset('build/img/mainpage/pic02.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h2 class="heading font-x3">Наши Преимущества</h2>
                <p>Подзаголовок подзаголовок подзаголовок подзаголовок подзаголовок.</p>
            </div>
            <div class="group center">
                <article class="one_quarter first"><i class="icon fa fa-lastfm"></i>
                    <h4 class="font-x1 uppercase"><a href="#">Преимущество</a></h4>
                    <p>Dictum lorem ac mi nulla non libero ipsum non consectetur lectus nulla rhoncus dui id dapibus.</p>
                </article>
                <article class="one_quarter"><i class="icon fa fa-leaf"></i>
                    <h4 class="font-x1 uppercase"><a href="#">Преимущество</a></h4>
                    <p>Dictum lorem ac mi nulla non libero ipsum non consectetur lectus nulla rhoncus dui id dapibus.</p>
                </article>
                <article class="one_quarter"><i class="icon fa fa-apple"></i>
                    <h4 class="font-x1 uppercase"><a href="#">Преимущество</a></h4>
                    <p>Dictum lorem ac mi nulla non libero ipsum non consectetur lectus nulla rhoncus dui id dapibus.</p>
                </article>
                <article class="one_quarter"><i class="icon fa fa-map-signs"></i>
                    <h4 class="font-x1 uppercase"><a href="#">Преимущество</a></h4>
                    <p>Dictum lorem ac mi nulla non libero ipsum non consectetur lectus nulla rhoncus dui id dapibus.</p>
                </article>
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <section class="wrapper style2">
        <div class="hoc">
            <div class="center btmspace-50">
                <h2 class="heading font-x3">Наша Команда</h2>
                <p>Подзаголовок подзаголовок подзаголовок подзаголовок подзаголовок.</p>
            </div>
            <div class="group">
                <div class="center one_third first">
                    <div>
                        <img class="krug" style="width:90%;" src="{{asset('build/img/mainpage/pic02.jpg')}}" alt="" />
                    </div>
                    <p style="color:black; font-size:1.2em; font-weight: 800;">Алена Михайлова</p>
                    <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                </div>
                <div class="center one_third">
                    <div>
                        <img class="krug" style="width:90%;" src="{{asset('build/img/mainpage/pic02.jpg')}}" alt="" />
                    </div>
                    <p style="color:black; font-size:1.2em; font-weight: 800;">Алена Михайлова</p>
                    <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                </div>
                <div class="center one_third">
                    <div>
                        <img class="krug" style="width:90%;" src="{{asset('build/img/mainpage/pic02.jpg')}}" alt="" />
                    </div>
                    <p style="color:black; font-size:1.2em; font-weight: 800;">Алена Михайлова</p>
                    <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                </div>
            </div>
        </div>
    </section>
@endsection