<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AMOGH</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css">
        <script type="text/javascript">
        function myfunc(){
          alert("awesome");
        }
        </script>

    </head>
    <body>
        <h1></h1>
        <div class="container">
          <div class="jumbotron">
            <div class="center">
              <p>Practice some new thing?</p><br>
                <h3>Here are check boxes for you</h3>
            </div>
         </div>
         <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <p>Bank proofs:
			  <br><b>PAN ✓</b>
			  <br><b>Aadhar ✓</b>
			  <br> Driving license

			  </p>
               <p>Hobbies:
               <br><b>Dancing ✓</b>
			   <br> Singing
			   <br><b>Drawing ✓</b>
			   </p>
			   <p>Favourite book:
			   <br> Famous Five
			   <br><b>Secret Seven ✓</b>
			   </p>
			   <p>Tests taken:
			   <br> MRI Scan</b>
			   <br> Thyroid test
			   <br><b>Blood test ✓</b>



            </div>
          </div>
            <div class="col-xs-6">
              <div class="box">
                <form method="post">
				<div class="form-group">
                    <label for="Proof">Bank Proof</label><br>
                    <form action="">
                      <input type="checkbox" name="proof" value="0">Pan Card<br>
                      <input type="checkbox" name="proof" value="1">Adhar card<br>
                      <input type="checkbox" name="proof" value="2">Passport<br>
                    </form>
                  </div>
				  <div class="form-group">
                   <label for="Hobbies">Hobbies</label>
                    <form action="">
                      <input type="checkbox" name="Hobbies" value="0">Singing<br>
                      <input type="checkbox" name="Hobbies" value="1">Dancing<br>
                      <input type="checkbox" name="Hobbies" value="2">Drawing<br>
                    </form>
					  </div>
					  <div class="form-group">
                   <label for="Books">Favourite Books</label>
                   <form action="">
                     <input type="checkbox" name="Books" value="0">Daniel brown.<br>
                     <input type="checkbox" name="Books" value="1">secret 7<br>
                     <input type="checkbox" name="Books" value="2">secret 5<br>
                   </form>
					  </div>

					 <div class="form-group">
             <label for="Books">Tests</label>
             <form action="">
               <input type="checkbox" name="tests" value="0">MRI<br>
               <input type="checkbox" name="tests" value="1">Blood test<br>
               <input type="checkbox" name="tests" value="2">secret 5<br>
             </form><br>
          </form>




                  <button type="button" name="button" onclick="myfunc()">Submit</button>
                </form>
            </div>
          </div>
         </div>
        </div>

    </body>
</html>
