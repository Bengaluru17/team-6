<!DOCTYPE html>
<html lang="en">
<head>
  <title>Capslock check</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   
</head>
<body background="letters.jpg">

<div class="container">
    <h2 align="center"><font color="red">Typing test</font></h2>
  <form class="form-horizontal" action="/action_page.php" id="myform">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">xyz@gmail.com</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" onKeyPress="checkCapsLock(event)">
          <div>Press shift and 2 to get '@'.</div>
          
        
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">TYPE THIS</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="caps" name="pwd" onKeyPress="checkCapsLock(event)">
          
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">type this</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="small" name="pwd" onKeyPress="checkCapsLock(event)">
 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Type This</label>
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
            var e="xyz@gmail.com";
            var c="TYPE THIS";
            var s="type this";
            var m="Type This";
            if(email==e){
                count+=1;
            }
            if(caps==c){
                count+=1;
            }
             if(small==s){
                count+=1;
            }
             if(mix==m){
                count+=1;
            }
           if(count<4){
               alert("Your score : "+count);
           }
            else{
                alert("Everthing is correct");
            }
            document.getElementById("myform").reset();
        }
    
   
</script>
    
</body>

    
</html>
