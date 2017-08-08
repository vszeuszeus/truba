<!-- resources/views/common/errors.blade.php -->

@if (session('status'))
  <!-- Список ошибок формы -->
  <div id="status_notification" style="z-index:9; position: absolute;right: 1%;max-width: 550px;width: 100%;top: 64px;" class="ui {{session('status')[2]}} message">
    <i class="close icon close_status_notification"></i>
    <div class="header">{{session('status')[0]}}</div>
    <p>{{session('status')[1]}}</p>
  </div>
@endif