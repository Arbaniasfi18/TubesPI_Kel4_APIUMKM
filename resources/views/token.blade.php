<div class="wrapper">
    <div class="title">
       Your Token
    </div>
    <div class="field text-center">
      <input  type="text" value="{{ $token }}" disabled id="myInput">
      <button class="btn btn-primary" onclick="myFunction()">Copy</button>
   </div>
 </div>

 <script>
   function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
 </script>