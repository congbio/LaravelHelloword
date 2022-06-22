$imgLink = public_path('images\\') . $car->image;

        if (File::exists($imgLink)) {
            File::delete($imgLink);
        }
.........................
<script>
const changeImage = (e) => {
console.log('change')
var imgEle = document.getElementById('newImage')
imgEle.src = URL.createObjectURL(e.target.files[0])
imgEle.onload = () => {
 URL.revokeObjectURL(output.src)
}
}
</script>
--------------------------
<button type="submit" onclick="return myConfirm();"><i class="fa fa-trash" aria-hidden="true"></i></button>
 </form>
 </td>
 <script>
  function myConfirm() {
  var result = confirm("Want to delete?");
  if (result==true) {
  return true;
  } else {
  return false;
  }
 }
<div class="container">
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{
                Session::get('success')
            }}
          </div>   
          @endif
