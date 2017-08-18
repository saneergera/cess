var cess = angular.module("cess",['ngRoute']);
var eventInfo="" ;
var eventName = '';
cess.controller("home",function($scope){


(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));


$scope.scroll = function(e){



            e.preventDefault();
            var loaction = $("#contain");
            $("iframe").attr("src","https://www.youtube.com/embed/9fxeg98PyUY?autoplay=1")
            $("html, body").animate({ scrollTop: $("#contain").offset().top-50 }, 3000);
      }







})



cess.controller('mainController', function($scope) {
	$scope.restaurants = [ {
		name: 'Technical Team',

		cuisines: 'Saurabh Daalia , Saneer Gera',
		cost: 'To Make students good in technologies',

		image: 'http://www.athens.edu/images/coas/programs/computer-science.jpg?x75869',
		id: 1,
    about:''
	}, {
    name: 'Placement Team',

		cuisines: 'Guriqbal Singh, Surabhi Arora',
		cost: 'To indulge in effective company calling ,make best efforts to improve the placement scenario.',

		image: 'http://rootshm.in/admin/docs/1058421589-placement1.gif',
		id: 2,
    about:' We the part  placement team of cess, make best of our efforts to call companies for better placement opportunities of our senior .We work as a team and collect databases of various recruiters and do timely calling to companies and invite them to visit the campus from time to time. Our goal is to indulge in effective company calling, and make best of our efforts to improve the placement scenario. We also publish our yearly magazine (from inside the room) to keep the students aware regarding what type of questions are being asked and what the recruitment process is all about. We also inform the students regarding various govt. exams and make best of our efforts to let the students be placed in place of their choice.'

	},{
    name: 'Promotion Team',

		cuisines: 'Pragya , Manik',
		cost: 'To promote and create hype of events to have mass participation ',

		image: './img/promote.jpeg',
		id: 3
	},{
    name: 'Public Relation Team',

		cuisines: 'Shivanshu',
		cost: 'To earn our sponsors who belive in our work and talent',

		image: './img/Sponsor.png',
		id: 4
	},{
    name: 'Fine Arts Team',

		cuisines: 'Ridhima Aggarwal , Jaskirat Singh',
		cost: 'Providing exposure to world beyond academics,we are here to boost an artist in you',

		image: './img/art.png',
		id: 5
	},{
    name: 'Design Team',

		cuisines: 'Puneet Saini , Karamvir Singh ',
		cost: 'To encourage designing amongst students which can be used for things like event posters',

		image: './img/design.jpg',
		id: 6
	},{
    name: 'Literary Team',

		cuisines: 'Namarta  , Prikshit Vaid',
		cost: 'We organize technical workshops and events to develop students intrest in technologies',
    about:"",

		image: './img/book.jpg',
		id: 7
	}];












})


cess.controller('eventsController',function($scope,$http){
$scope.info = [];
	$http({
		method:'POST',
		url:'./pages/get.php',
		headers: {
			'Content-Type': undefined,
			'Process-Data': false
		},




	}).then(function success(response){
eventInfo = response.data.records;
$scope.data = response.data.records;


	})




})
cess.controller('eachevent',function($scope,$routeParams,$http){


  $http({
    method:'POST',
    url:'./pages/get.php',
    headers: {
      'Content-Type': undefined,
      'Process-Data': false
    },




  }).then(function success(response){
var   eventInfo = response.data.records;

$scope.details = eventInfo[$routeParams.i];

 eventName = $scope.details.Name;

 console.log(eventName);





  })






})

cess.controller('registerController',function($scope,$http,$location,$route){


	$("#registration").hide();
	 $("#two").css("color","#FF8C00");
	 $("#two").css("border-bottom","2px solid #fff");
	//1. when user click on register #registration display block & login hide (default:login)
	$("#one").click(function(){
	  $("#one").css("color","#FF8C00");
	   $("#one").css("border-bottom","2px solid #fff");
	  $("#two").css("color","#FFF");
	  $("#two").css("border-bottom","none");
	  $("#login").hide(1000);
	  $("#registration").show(1000);
	});
	$("#two").click(function(){
	  $("#one").css("color","#FFF");
	  $("#one").css("border-bottom","none");
	  $("#two").css("color","#FF8C00");
	   $("#two").css("border-bottom","2px solid #fff");
	  $("#registration").hide(1000);
	  $("#login").show(1000);
	});
  $scope.submit = function(){


    var username = $("#username").val();
    var email = $("#con_email").val();
    var password = $("#password").val();
    var confirm_password = $("#con_password").val();
    var data = new FormData();
    var mobile = $("#mobile").val();
    var University = $("#university").val();
    var department = $("#department").val();
    var year= $("#year").val();
    data.append('username', username);
    data.append('email', email);
    data.append('password', password);
    data.append('confirm_password', confirm_password);
    data.append('mobile', mobile);
    data.append('University', University);
    data.append('department', department);
    data.append('year', year);
  $http({

  method:'POST',
  url:'./pages/input.php',
  headers: {
    'Content-Type': undefined,
    'Process-Data': false
  },
  data:data




  }).then(function success(response){


  $('.msg').hide();
  $("#registration").hide(1000);

  $(".msg").html(response.data);
  $(".msg").show(2000);






})

}


$scope.login = function(){


  var username = $("#username1").val();


  var password = $("#password1").val();

var data = new FormData();
  data.append('email', username);
  data.append('password', password);


$http({

method:'POST',
url:'./pages/login.php',
headers: {
  'Content-Type': undefined,
  'Process-Data': false
},
data:data




}).then(function success(response){

if(response.data=="done")
    {


      window.location.href="http://localhost:8888/cess/";



    }






})

}


})


cess.controller('paymentController',function($location,$scope){


  if($("#email").val()=='')
  {

$location.url('/register')

  }


	$("#number").on("input",function(){

var id = $(this).val();

if(id[0]!=1) {


        }

	})




})

cess.controller('eachteam',function($scope,$routeParams){
$scope.Id = $routeParams.id;
  var details= [ {
    name: 'Technical Team',

    cuisines: 'Saurabh Daalia , Saneer Gera',
    cost: 'To Make students good in technologies',

    image: 'http://www.athens.edu/images/coas/programs/computer-science.jpg?x75869',
    teamimage:'./img/teams/tech.jpg',
    id: 1,
    about:''
  }, {
    name: 'Placement Team',

    cuisines: 'Guriqbal Singh, Surabhi Arora',
    cost: 'To indulge in effective company calling ,and make best of our efforts to improve the placement scenario.',

    image: 'http://rootshm.in/admin/docs/1058421589-placement1.gif',
      teamimage:'./img/teams/placement.jpg',
        head1:'./img/teams/namarta.jpg',
          head2:'./img/teams/prikshit.jpg',
    id: 2,
    about:' We the part  placement team of cess, make best of our efforts to call companies for better placement opportunities of our senior .We work as a team and collect databases of various recruiters and do timely calling to companies and invite them to visit the campus from time to time. Our goal is to indulge in effective company calling, and make best of our efforts to improve the placement scenario. We also publish our yearly magazine (from inside the room) to keep the students aware regarding what type of questions are being asked and what the recruitment process is all about. We also inform the students regarding various govt. exams and make best of our efforts to let the students be placed in place of their choice.'

  },{
    name: 'Promotion Team',

    cuisines: 'Pragya , Manik',
    cost: 'To promote and create hype of events to have mass participation ',

    image: './img/promote.jpeg',
      teamimage:'./img/teams/prom.jpg',
    id: 3
  },{
    name: 'Public Relation Team',

    cuisines: 'Shivanshu',
    cost: 'To earn our sponsors who belive in our work and talent',

    image: './img/Sponsor.png',
    teamimage:'./img/teams/pr.jpg',
    id: 4
  },{
    name: 'Fine Arts Team',

    cuisines: 'Ridhima Aggarwal , Jaskirat Singh',
    cost: 'Providing exposure to world beyond academics,we are here to boost an artist in you',

    image: './img/art.png',
      teamimage:'./img/teams/design.jpg',

    id: 5
  },{
    name: 'Design Team',

    cuisines: 'Puneet Saini , Karamvir Singh ',
    cost: 'To encourage designing amongst students which can be used for things like event posters',

    image: './img/design.jpg',
      teamimage:'./img/teams/design.jpg',
    id: 6
  },{
    name: 'Literary Team',

    cuisines: 'Namarta  , Prikshit Vaid',
    cost: 'We organize technical workshops and events to develop students intrest in technologies',
    about:"",

    image: './img/book.jpg',
        teamimage:'./img/teams/lit.jpg',
    id: 7
  }];
	$scope.restaurant = details[$routeParams.id - 1];


})



cess.controller('logoutController',function(){

window.location.href="http://localhost:8888/cess/";

})

cess.config(function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl: 'pages/home.php',
		controller: 'home'
	}).when('/home', {
		templateUrl: 'pages/main.html',
		controller: 'mainController'
}).when('/events', {
	templateUrl:   'pages/events.php',
	controller: 'eventsController'
}).when('/galary/:id', {
	templateUrl:  function(params){ return 'pages/galary.php?page='+ params.id; },
	controller: 'mainController'
}).when('/register', {
	templateUrl: 'pages/register.php'
}).when('/payment', {
	templateUrl: 'pages/payment.php',
	controller: 'paymentController'
}).when('/nopayment', {
	templateUrl: 'pages/npayment.php',
	controller: 'paymentController'
}).when('/team/:id',{

  templateUrl: 'pages/team.php',
  controller: 'eachteam'
}).when('/details/:i',{

  templateUrl: 'pages/cess.html',
  controller: 'eachevent'
}).when('/logout', {
	templateUrl: 'pages/logout.php',
	controller: 'logoutController'
})


})
