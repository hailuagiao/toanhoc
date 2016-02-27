<script type="text/javascript" language="JavaScript">
function check() {
  var ext = document.f.pic.value;
  ext = ext.substring(ext.length-3,ext.length);
  ext = ext.toLowerCase();
  if(ext != 'jpg') {
    alert('You selected a .'+ext+
          ' file; please select a .jpg file instead!');
    return false; }
  else
    return true; }
</script>

<form method="post" name=f
enctype="multipart/form-data"
onsubmit="return check();"
action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi">
<p>
Please select a JPEG (.jpg) file to be sent:
<br>
<input type="file" name="pic" size="40"
accept="image/jpeg">
<p>
Please include a short explanation:<br>
<textarea name="expl" rows="3" cols="40"
onfocus="check();">
</textarea>
<p>
<input type="submit" value="Send">
</form>