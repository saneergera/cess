







    <div class="container-fluid" ng-controller="eachteam">
<div class="row">
    <div class="col-md-6 thumbnail " style='    position: relative;
    background: background: #DBE6F6;
    background: -webkit-linear-gradient(to right, #C5796D, #DBE6F6);
    /* background: linear-gradient(to right, #C5796D, #DBE6F6); */
    '>
      <p style="text-align:center;font-size:20px;font-family: font-family: 'Acme', sans-serif;
font-family: 'Luckiest Guy', cursive;
font-family: 'Crete Round', serif;color:#e55f5f;font-size:23px;margin-bottom:4px;" >Technical Team</p>
      <img src="img/test.jpg" class="ui " alt="">
      <div class="row" >
        <p style="text-align:center;font-size:20px;font-family: font-family: 'Acme', sans-serif;
  font-family: 'Luckiest Guy', cursive;
  font-family: 'Crete Round', serif;color:#e55f5f;font-size:23px;margin-bottom:4px;">Heads</p>
        <div class="col-md-6 side">
          <img  ng-src="{{restaurant.head1}}"   class="img-circle" alt="">
          <p class="heading head" >Namarta</p>

        </div>

        <div class="col-md-6 side"><img src="{{restaurant.head2}}"  class="img-circle" alt="">
        <p class="heading head" >Prikshit</p>
        </div>
      </div>

    </div>

    <div class="col-md-6 animated fadeInRight" style="position:relative;top:70px">

<h1 style="
    text-align: center;font-family: font-family: 'Acme', sans-serif;
font-family: 'Luckiest Guy', cursive;
font-family: 'Crete Round', serif;color:#e55f5f;font-size:23px;margin-bottom:4px;
">About Team</h1>

<div class="" style="
    font-size: 20px;
    text-align: justify;
    line-height: 1.7;font-family: 'Open Sans', sans-serif;
">
  {{	restaurant.about }}
</div>

    </div>

</div>

    </div>





<style media="screen">
  .ui{
height: 450px;
width: 100%;




  }
  .img-circle{

height: 110px;

    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);




  }

  .heading{

    font-size: 20px;

  }
  .side{

text-align: center;

  }
  .head{

    text-align:center;font-size:20px;
    font-family: 'Acme', sans-serif;
    font-family: 'Luckiest Guy', cursive;
    font-family: 'Crete Round', serif;
    color:#e55f5f;
    font-size:23px;
    margin-bottom:4px;



  }
</style>
