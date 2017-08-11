<!-- resources/views/common/errors.blade.php -->

@if (session('status'))
  <!-- Список ошибок формы -->
  <p style="color:blue; font-size:16px;">{{session('status')}}</p>
@endif