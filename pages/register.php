
<div class="a" ng-controller='registerController' >

  <div class="form button group">
    <button type="button" id="one">Register</button>
    <button type="button" id="two">Login</button>
  </div>
  <!--registration-->

  <div class="msg">

  </div>

  <form  id="registration" ng-submit="submit()">
    <p>
      <input type="text" name="username" id="username" placeholder="Enter your username" required>
    </p>
    <p>
      <input type="email" name="email" id="con_email" placeholder="Enter Your email" required>
    </p>
    <p>
      <input type="text" name="University" id="university" placeholder="Enter Your University/College Name" required>
    </p>
    <p>
      <input type="tel" name="mobile" id="mobile" placeholder="Enter Your mobile_number" ng-minlength="12" required >
    </p>
    <p>
      <input type="text" name="department" id="department" placeholder="Enter Your department"  required >
    </p>
    <p>
      <input type="text" name="year" id="year" placeholder="Enter Your Year" min="1" max="5" required >
    </p>
    <p>
      <input type="password" name="password" id="password" placeholder="Enter your password" required>
    </p>
    <p>
      <input type="password" name="confirm_password" id="con_password" placeholder="Confirm your password" required>
    </p>
    <input type="submit" name="submit" id="submit">
  </form>
  <!--login-->
  <form id="login" ng-submit="login()" >
    <p>
      <input type="email" name="username" id="username1" placeholder="Enter your email" required>
    </p>
    <p>
      <input type="password" name="password" id="password1" placeholder="Enter your password" required>
    </p>
    <input type="submit" name="log_in" id="log_in" value="Login">
  </form>



</div>

<style media="screen">
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);
@import url(https://fonts.googleapis.com/css?family=Raleway);
@import url(https://fonts.googleapis.com/css?family=Exo);
@import url(https://fonts.googleapis.com/css?family=Play);
.a{
  height: 100%;
  background: #ec008c;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #fc6767, #ec008c);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #fc6767, #ec008c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
margin-top: -10px;



}
form{
background-color: rgba(0, 0,0, 0.5);
padding: 4em 4em 2em;
max-width: 400px;
margin: 50px auto ;
box-shadow: 0 0 1em #222;
border-radius: 5px;
}
input {
display: block;
box-sizing: border-box;
width: 100%;
outline: none
}
input[type="password"],
input[type="text"],input[type="email"],input[type="tel"]{
padding:20px;
margin:2%;
border-radius:10px;
background:rgba(0,0,0,0.7)
}
input[type="password"],
input[type="text"],input[type="email"],input[type="tel"]{
outline:none;
}
input[type="text"]:focus,
input[type="password"]:focus,input[type="email"]:focus,input[type="tel"]:focus{
background:rgba(255,255,255,1);
}
input::-webkit-input-placeholder{
font-family: 'Play', sans-serif;
letter-spacing:3px;
text-align:center;
font-weight:bolder;
}

.form{
width:50%;
margin:auto;
font-weight:bolder;
}
.form button{
float:right;
margin-right:10px;
background:none;
color:#fff;
border:none;
cursor:pointer;
font-family: 'Exo', sans-serif;
margin-top:2%;
font-size:1.75em;
outline:none;
}

form button:hover{
color:#FF8C00;
}
input[type="submit"] {
width:150px;
padding:.8em;
background:none;
border:none;
border-radius:5px;
font-size:1em;
color:#fff;
margin-left:30%;
border:1px solid #fff;
cursor:pointer;
}
input[type="submit"]:hover{
background:rgba(255,255,255,0.7);
color:#222;
}

.group:after{
display:table;
content:" ";
clear:both;
}

</style>
