<?php session_start();



?>
<div  style="height:100%;position:relative;top: -15px;" class="back">

<div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">


  <div class="row ">
      <div class="col-md-6">
  <form name="form">
        <div class="form-group">

          <input type="email"  id="email" placeholder="Name" value='<?php echo $_SESSION['name'] ?>' disabled>
        </div>
        <div class="form-group">

          <input type="text"  id="password" placeholder="Email" value='<?php echo $_SESSION['email'] ?>' disabled>
        </div>
        <div class="form-group">

          <input type="text"  id="University" placeholder="University" value='<?php echo $_SESSION['university'] ?>' disabled>
        </div>
        <div class="form-group">

          <input type="text"  id="number" placeholder="Contact Details" value='<?php echo $_SESSION['department'] ?>' disabled>
        </div>
        <div class="form-group">

          <input type="text"  id="number" placeholder="Contact Details" value='<?php echo $_SESSION['year'] ?>' disabled>
        </div>
        <div class="form-group">

          <input type="text"  id="number" placeholder="Contact Details" value='<?php echo $_SESSION['mobile'] ?>' disabled>
        </div>

        <div class="form-group">

          <input type="number"  id="number" ng-model="model"name="number" placeholder="Txn. Id" ng-minlength="10" >

        </div>


        <button type="submit" class="btn btn-default">Submit</button>
      </form>

      </div>

      <div class="col-md-6" style="text-align:center">


        <img src="bar.png" class="bar-code">

        <div class="form-group">

          <input type="text" value="9023864848" disabled>

        </div>
      </div>


  </div>





</div>




</div>
<style media="screen">

.container{

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      background: white;
  position: relative;
  top: 101px;
  padding-top: 20px;
  padding-bottom: 20px;

}

.back{

background: url('http://cdn.wallpapersafari.com/51/46/8XYHoN.jpg');

}

#email{

border-bottom: 1px solid black;


}
.form-group{

border-bottom: 1px solid black;

}

input {
  border: none!important;
  outline: none!important;
  background: none!important;
  font-family: 'Open Sans', Helvetica, Arial, sans-serif!important;
  font-size: 20px;
  width: 100%;
  text-align: center;
}
button {
  border: none!important;
  outline: none!important;
  background: none!important;
  font-family: 'Open Sans', Helvetica, Arial, sans-serif!important;
  font-size: 20px;

}
textarea:focus, input:focus{
  border: none!important;
  outline: none!important;
  box-shadow: none;
}
.bar-code{

  vertical-align: middle;
  height: 200px;


}
.col-md-6
{

  text-align: center;



}
</style>
