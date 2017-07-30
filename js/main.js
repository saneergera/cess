var cess = angular.module("cess",['ngRoute']);
cess.controller("home",function($scope){


	console.log("Wajjo");

$scope.scroll = function(e){

          console.log("click");

            e.preventDefault();
            var loaction = $("#contain");
            $("iframe").attr("src","https://www.youtube.com/embed/9fxeg98PyUY?autoplay=1")
            $("html, body").animate({ scrollTop: $("#contain").offset().top-50 }, 3000);
      }







})



cess.controller('mainController', function($scope) {
	$scope.restaurants = [ {
		name: 'Technical Team',
		address: '38/39, Level 10, Block F , Inner Circle, Corol bagh',
		location: 'Connaught Place',
		category: 'Bakery',
		vote: '4.4',
		cuisines: 'Saurabh Daalia , Saneer Gera',
		cost: 'We organize technical workshops and events to develop students intrest in technologies',
		hours: '12 Noon to 10 PM (Mon-Sun)',
		image: 'http://www.athens.edu/images/coas/programs/computer-science.jpg?x75869',
		id: 2
	}, {
		name: 'Pirates',
		address: '38/39, Level 10, Block F , Inner Circle, Corol bagh',
		location: 'Connaught Place',
		category: 'Bakery',
		vote: '4.4',
		cuisines: 'Desert',
		cost: '200',
		hours: '12 Noon to 10 PM (Mon-Sun)',
		image: 'https://tobuz.com/wp-content/uploads/2016/12/sweet-tooth-fairy-bakery-5.jpg',
		id: 2
	},{
		name: 'Pirates',
		address: '38/39, Level 10, Block F , Inner Circle, Corol bagh',
		location: 'Connaught Place',
		category: 'Bakery',
		vote: '4.4',
		cuisines: 'Desert',
		cost: '200',
		hours: '12 Noon to 10 PM (Mon-Sun)',
		image: 'https://tobuz.com/wp-content/uploads/2016/12/sweet-tooth-fairy-bakery-5.jpg',
		id: 2
	}];












})

cess.config(function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl: 'pages/home.php',
		controller: 'home'
	}).when('/home', {
		templateUrl: 'pages/main.html',
		controller: 'mainController'
}).when('/galary/:id', {
	templateUrl:  function(params){ return 'pages/galary.php?page='+ params.id; },
	controller: 'mainController'})
})
