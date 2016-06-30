var registerApp = angular.module('registerApp', ['720kb.datepicker']);

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

registerApp.controller('registerCtrl', function($scope, $http, $location) {

	$scope.registrationStep = 0;
	
	//registration form inputs
	$scope.firstname = '';
	$scope.lastname = '';
	$scope.birthdate = '';
	$scope.gender = '';
	$scope.username = '';
	$scope.password = '';
	$scope.passconf = '';
	$scope.phoneNumber = '';
	$scope.email = '';
	$scope.disableConBtn = true;
	$scope.disableSubmitBtn = true;
	$scope.validEmail = false;
	
	$scope.enableConBtn = function(){
		//alert("called");
		if($scope.firstname === '' || $scope.lastname === '' || $scope.birthdate === '' || 
				$scope.username === '' || $scope.password === '' || $scope.password !== $scope.passconf){
			$scope.disableConBtn = true;
		}else{
			$scope.disableConBtn = false;
		}
	};
	
	$scope.enableSubmitBtn = function(){
		$scope.validateEmail();
		if($scope.phoneNumber === '' || $scope.email === '' || !($scope.validEmail)){
			$scope.disableSubmitBtn = true;
		}else{
			$scope.disableSubmitBtn = false;
		}
	};
	
	$scope.validateEmail = function() {
	    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	    $scope.validEmail = re.test($scope.email);
	};
	
	/*$scope.url = "http://www.w3schools.com/angular/customers.php";

	$http.get($scope.url).success(function(response) {
		$scope.names = response.records;
	});*/

});