var loginApp = angular.module('loginApp', []);

/*app.config([ '$routeProvider', function($routeProvider) {
	$routeProvider.when('/home', {
		templateUrl : 'partials/home.php',
		controller : 'lostFoundCtrl'
	}).when('/contact', {
		templateUrl : 'partials/contact.php',
		controller : 'lostFoundCtrl'
	}).when('/about', {
		templateUrl : 'partials/about.php',
		controller : 'lostFoundCtrl'
	}).otherwise({
		redirectTo : '/home'
	});
} ]);*/

loginApp.controller('loginCtrl', function($scope, $http, $location) {

	$scope.username = '';
	$scope.password = '';
	$scope.email = '';


	
	/*$scope.url = "http://www.w3schools.com/angular/customers.php";

	$http.get($scope.url).success(function(response) {
		$scope.names = response.records;
	});*/

});