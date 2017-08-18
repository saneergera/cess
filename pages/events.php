
<style media="screen">
  .hero{

    background-image: url(http://localhost:8888/cess/img/event.jpg);
        background-size: cover;
        min-height: 470px;
        border-radius: 4px;
        color: white;
        font-size: 36px;
        display: flex;
        position: relative;
        top: -8px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    /* Some left and right padding inside the container */
    .container {
        padding: 0 16px;
    }

    /* Clear floats */
    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }
  }
</style>


<div class="main  " ng-controller="eventsController" ng-cloak >

  <div class="hero">

  </div>
    <div class="ui container">


        <div class="search-bar">
                      <form>
                      <div class="input-wrapper">
                        <input type="text" class="form-control" placeholder="Search..." ng-model="query">
                      </div>

                    </form>
                  </div>
        <div ng-repeat="dat in data | filter:query" >

<div class="col-md-4">
<div class="card" style="margin-top:20px">
  <img ng-src="../staff/pages/{{dat.Poster}}" alt="Jane" style="width:100%;width: 100%;
    height: 250px;">
  <div>
    <h2 style="text-align:center">{{dat.Name}}</h2>
    <p style="text-align:center"class="title">{{dat.Team}}</p>
    <p style="margin-left:10px">{{dat.Short}}</p>
    <p style="margin-left:10px">{{dat.Date}}</p>
    <p style="margin-left:10px">{{dat.Time}}</p>
    <button class="button"><a ng-href="#!/details/{{$index}}" >Know More & Register</a></button>
  </div>
</div>
</div>



</div>
