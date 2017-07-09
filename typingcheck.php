<!DOCTYPE html>
<html lang="en">
<head>
  <title>Capslock check</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
    function ranWord() {
var text = "";
var length=Math.floor(Math.random() * 20);
var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
for(var i = 0; i < length; i++) {
text += possible. charAt(Math. floor(Math. random() * possible. length));
}
return text;

}

var string1=ranWord();
var string2=ranWord();
var string3=ranWord();
var string4=ranWord();
console.log(string1);

</script>


</head>
<body background="letters.jpg" onload="ranWord()">

<div class="container">
    <h2 align="center"><font color="red">Typing test</font></h2>
  <form class="form-horizontal" action="/action_page.php" id="myform">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><script type="text/javascript">
          document.write(string1);
        </script></label>
      <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" onKeyPress="checkCapsLock(event)">


      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><script type="text/javascript">
          document.write(string2);
        </script></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="caps" name="pwd" onKeyPress="checkCapsLock(event)">

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><script type="text/javascript">
          document.write(string3);
        </script></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="small" name="pwd" onKeyPress="checkCapsLock(event)">

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><script type="text/javascript">
          document.write(string4);
        </script></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mix" name="pwd" onKeyPress="checkCapsLock(event)">

      </div>
    </div>
      <div id="divWarningCapsLock" style="visibility:hidden" align="center"><h2><font color="red">Caps Lock is on.</font></h2></div>
  </form>

</div>

     <div>
      <button class="button" onclick="check()" color="red">
            CHECK RESULTS
      </button>
    </div>

    <style type="text/css">
        .button {
    position: absolute;
    bottom: 80px;
    left: 55%;
    margin-left: -104.5px; /*104.5px is half of the button's width*/
}
.test{
  height:1000px;

}
    </style>
     <script language="JavaScript" type="text/javascript">
   //Check the keyboard in order to know wich key has been pressed by the user
   function checkCapsLock( e ) {
      var capsLockON;
      keyCode = e.keyCode?e.keyCode:e.which;
      shiftKey = e.shiftKey?e.shiftKey:((keyCode == 16)?true:false);
      if(((keyCode >= 65 && keyCode <= 90) && !shiftKey)||((keyCode >= 97 && keyCode <= 122) && shiftKey)) {
          capsLockON = true;
      } else {
         capsLockON = false;
      }
      if (capsLockON)
         document.getElementById('divWarningCapsLock').style.visibility = 'visible';
      else
         document.getElementById('divWarningCapsLock').style.visibility = 'hidden';

   }

        function check(){
            var email=document.getElementById("email").value;
            var caps=document.getElementById("caps").value;
            var small=document.getElementById("small").value;
            var mix=document.getElementById("mix").value;
            var count=0;
            if(email==string1){
                count+=1;
            }
            if(caps==string2){
                count+=1;
            }
             if(small==string3){
                count+=1;
            }
             if(mix==string4){
                count+=1;
            }
           if(count<4){
               alert("Your score : "+count+".. Try again!");
           }
            else{
                alert("YAY! YOU GOT ALL RIGHT!!");
            }
          location.reload();
        }


</script>


</body>


</html>
