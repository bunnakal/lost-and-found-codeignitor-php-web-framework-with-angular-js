var reportApp = angular.module('reportApp', []);

reportApp.controller('reportCtrl', function($scope, $http, $location) {
	//report form
	$scope.reportStep = 0;

	$scope.categories = '';
	$scope.subcategories = '';
	$scope.itemname = '';
	$scope.modelnum = '';
	$scope.serialNum = '';
	$scope.itemcolor = '';
	$scope.streetname = '';
	$scope.housenumber = '';
	$scope.city = '';

	$scope.method = 'GET';
	$scope.url = '';
	$scope.status = null;
	$scope.datas = null;
	$scope.subcats = [];

	$scope.getSubcategories = function() {
		var categoryId = $scope.categories;
		$scope.url = $location.path() + '/LostAndFound2/lost_found/subCategory/' + categoryId;

		$http({
			method : $scope.method,
			url : $scope.url
		}).success(function(data, status) {
			//$scope.status = status;
			//$scope.datas = data;
			
			var subcat = null;
			$scope.subcats = [];
			for (var index = 0; index < data.length; index++) {
				subcat = {id:data[index]['idSubCategory'], name:data[index]['subCategoryName']};
				$scope.subcats.push(subcat);
		    }
			
			//alert(data[0]['idSubCategory']);
			//alert(data[0]['subCategoryName']);
		}).error(function(data, status) {
			
		});
	};
});