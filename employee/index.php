
	

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Let's Have a Small Quiz before proceeding!!</h4>
            </div>
            <div class="card-body">
			<form method="post" action="process.php">
                <div class="form-group">
                  <label for="experience">Experience</label>
                  <input type="number" class="form-control" id="experience" value="exp" placeholder="Enter the number of years"required>
                </div>
				<div class="form-group">
                  <label for="marks">Marks in Your current Degree</label>
                  <input type="number" class="form-control" id="marks" value="marks" placeholder="Your marks out of 10(CGPA)"required>
                </div>
				<div><p>Which of the followings is/are automatically added to every class, if we do not write our own.</p>
        <input type="radio" name="q1" value="Copy Constructor" required>Copy Constructor<br>
        <input type="radio" name="q1" value="Assignment Operator">Assignment Operator<br>
        <input type="radio" name="q1" value="Constuctor Without Parameter">Constuctor Without Parameter<br>
		<input type="radio" name="q1" value="All of the Above">All of the Above<br><br> </div>
		<div><p>Which of these is not a core data type?</p>
        <input type="radio" name="q2" value="List"required>List<br>
        <input type="radio" name="q2" value="Dictonary">Dictonary<br>
        <input type="radio" name="q2" value="Tuple">Tuple<br>
		<input type="radio" name="q2" value="Class">Class<br><br> </div>
		<div><p>Who created the first DBMS?</p>
        <input type="radio" name="q3" value="Edgar Frank Codd"required> Edgar Frank Codd<br>
        <input type="radio" name="q3" value="Charles Bachman">Charles Bachman<br>
        <input type="radio" name="q3" value="Charles Babbage">Charles Babbage<br><br> </div>
		<div><p>Which command is used to remove a relation from an SQL?</p>
        <input type="radio" name="q4" value="Drop table"required>Drop table<br>
        <input type="radio" name="q4" value="Delete">Delete<br>
        <input type="radio" name="q4" value="Purge">Purge<br><br> </div>
		<div><p>If a process fails, most operating system write the error information to a </p>
        <input type="radio" name="q5" value="new file"required>new file<br>
        <input type="radio" name="q5" value="another running process">another running process<br>
        <input type="radio" name="q5" value="log file"required>log file<br><br> </div>
		<div><p>The minimum number of states required to recognize an octal number divisible by 3 are/is</p>
        <input type="radio" name="q6" value="one"required>1<br>
        <input type="radio" name="q6" value="three">3<br>
        <input type="radio" name="q6" value="five">5<br><br> </div>
		<div><p>CASE stands for</p>
        <input type="radio" name="q7" value="Computer-Aided Software Engineering"required>Computer-Aided Software Engineering<br>
        <input type="radio" name="q7" value=" Control Aided Science and Engineering"> Control Aided Science and Engineering<br>
        <input type="radio" name="q7" value="Cost Aided System Experiments">Cost Aided System Experiments<br><br> </div>
		<div><p>How many coding Languages do you know</p>
        <input type="radio" name="q8" value="two"required>2<br>
        <input type="radio" name="q8" value="four">4<br>
        <input type="radio" name="q8" value="none">None<br><br> </div>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>


<!--  
    <div><p>Experience.</p>
        <input type="radio" name="p1" value="fresher" required>Fresher<br>
        <input type="radio" name="p1" value="1-2">1-2 years<br>
        <input type="radio" name="p1" value="2-4">2-4 Years<br>
		<input type="radio" name="p1" value="4+">4+<br><br> </div>
		<div><p>Coding Languages.</p>
        <input type="radio" name="p2" value="one" required>One<br>
        <input type="radio" name="p2" value="two">Two<br>
        <input type="radio" name="p2" value="three">Three<br>
		<input type="radio" name="p2" value="4+">4 & Above<br><br> </div> -->