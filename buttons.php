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
              <p>Name of the applicant: Aanya B</p>
               <p>Gender : Male </p>
			   <p>Card : Debit </p>
               <p>Account type : Savings </p>
			   <p>Did you like our services: Yes </p>
			   <p>Will you recommend us: Yes </p>
            </div>
          </div>
            <div class="col-xs-6">
              <div class="box">
                <form method="post">
                  <div class="form-group">
                    <label for="applicant">Name of the applicant</label>
                    <input type="text" class="form-control" placeholder="Applicant name">
                  </div>
				              <div class="form-group">
                    <label for="Gender">Gender</label>
                    <form action=""><br>
                      <input type="radio" id="gender" name="gender" value="1"> Male<br>
                      <input type="radio" id="gender" name="gender" value="0"> Female<br>
                      <input type="radio" id="gender" name="gender" value="-1"> Other<br>
                      
                    </form>
                  <div class="form-group">
                    <label for="Card">Type of card</label>
                    <form action="">
                      <input type="radio" name="card" value="Credit"> Credit<br>
                      <input type="radio" name="card" value="Debit"> Debit<br>

                    </form>
                  </div>
                  <div class="form-group">
                    <label for="Account">Account type</label>
                    <form action="">
                      <input type="radio" name="gender" value="savings">Savings<br>
                      <input type="radio" name="gender" value="current">Current<br>

                    </form>
                  </div>
                 <div class="form-group">
                    <label for="Services">Did you like our services?</label>
                    <form action="myfunc">
                      <input type="radio" name="type" value="Yes">Yes<br>
                      <input type="radio" name="type" value="No">No<br>
                    </form>
                  <div class="form-group">
                    <label for="Gender">Recommend us</label>
                    <form action=""><br>
                      <input type="radio" name="gender" value="Yes">Yes<br>
                      <input type="radio" name="gender" value="No">No<br>
                    </form>
                  </div>

                  <button type="button" name="button" onclick="myfunc">Submit</button>
                </form>
            </div>
          </div>
         </div>
        </div>
    </body>
</html>
