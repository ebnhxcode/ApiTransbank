<form id="form1" name="form1" method="post" action="{{$urlRedirection}}" autocomplete="off"  onSubmit="">
  {{--<p>Tu clave ha sido enviada exit&oacute;samente</p>--}}
  <input type="hidden" name="token_ws" value="{{$token}}">
  <script type="text/javascript"> document.form1.submit(); </script>
</form>