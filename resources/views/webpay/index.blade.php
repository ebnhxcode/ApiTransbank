<form id="form1" name="form1" method="post" action="{{$result->url}}" autocomplete="off"  onSubmit="">
  <input type="hidden" name="token_ws" value="{{$result->token}}">
  <script type="text/javascript"> document.form1.submit(); </script>
</form>