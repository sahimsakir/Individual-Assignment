<!DOCTYPE html>
<html>
<head>
  <title>Sign up Here</title>
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  <form method="post">
  	
  	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="radio" name="utype" value="admin" > Admin  
      <input type="radio" name="utype" value="customer" > Customer
	
	<div class="input-group">
	<label>Name</label>
  	  <input type="text" name="name" value=""><br>
  	  <label>Username</label>
  	  <input type="text" name="uname" value="">
  	</div>
	
	<div class="input-group">
  	  <label>Cell No</label>
  	  <input type="text" name="phone" value="">
  	</div>
	
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
	
	
  	  <label>Gender</label> <br>
  	  <input type="radio" name="gender" value="male" > Male
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="other"> Other
  	<br>
	<label>Date of Birth</label><br>
  <select name="day">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
	<option value="9">9</option>
    <option value="10">10</option>
	<option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
	<option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
	<option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	
  </select>
  <select name="month">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
	<option value="October">October</option>
    <option value="November">November</option>
	<option value="December">December</option>
  </select>
  <select name="year">
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
	<option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
	<option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
	<option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
  </select>
	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	
	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="con_password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="/login">Sign in</a>
  	</p>
	
  </form>
    
 
	
  
</body>
</html>