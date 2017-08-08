<div class="wrapper application_bg" id="application">
  <div class="frame application">
    <form class="application_form wow rotateInUpLeft" action="{{secure_url('/sent_request')}}" method="post">
      {{csrf_field()}}
      <h3>ОСТАВИТЬ ЗАЯВКУ</h3>
      <p>Мы обязательно Вам перезвоним!</p>
      <div class="block_form">
        <input type="text" name="name" placeholder="Как вас зовут?">
        <input type="text" name="phone" placeholder="Ваш номер">
        <input type="submit" value="отправить">
      </div>
    </form>
  </div>
</div>