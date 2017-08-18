<div  style="position:relative;top: -15px;" class="back">

<div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">


  <div class="row ">
      <div class="col-md-6">
  <form name="form">
    <img src="img/cess.png" alt="" height="50px">
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

      <div class="col-md-6">
        <h1>The Event Is Free Of Cost</h1>
      </div>




  </div>





</div>




</div>
<style media="screen">

.container{

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  position: relative;
  top: 101px;
  padding-top: 20px;
  padding-bottom: 20px;
  height: auto;

}

.back{

background: url('http://cdn.wallpapersafari.com/51/46/8XYHoN.jpg');
height: 100%;

}

#email{

border-bottom: 1px solid black;


}
.form-group{

border-bottom: 1px solid #e55f5f;
color: #e55f5f;

}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #e55f5f;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #e55f5f;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #e55f5f;
}
:-moz-placeholder { /* Firefox 18- */
  color: #e55f5f;
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
.btn-default {
    color: #e55f5f;
    background-color: #fff;
    border: 1px solid #e55f5f!important;

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


@media only screen and (max-width: 500px) {
  .container{

    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    position: relative;
    top: 101px;
    padding-top: 20px;
    padding-bottom: 20px;
    height: auto;

  }

  .back{

  background: url('http://cdn.wallpapersafari.com/51/46/8XYHoN.jpg');
  height: 700px;

  }

}
</style>
