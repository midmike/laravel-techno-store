angular.module('myApp')
.controller('SliderController',function($scope,SliderService,$http,$location,$stateParams,$ionicScrollDelegate){
	var page = 1;
	if($stateParams.pageNum) {
		page = $stateParams.pageNum;
	}
	$scope.refresh = function() {
		$scope.serviceQuery(page);
		$scope.$broadcast('scroll.refreshComplete');
	};
	$scope.serviceQuery = function(pageNum) {
		SliderService.queryfilter({action:'page='+pageNum}).$promise.then(function(data){
			$scope.pageSlider = data;
			//angular.copy(data.data,$scope.sliders);
			$scope.sliders = data.data;
			$ionicScrollDelegate.scrollTop();
		});
	};	
	$scope.serviceQuery(page);
	$scope.next = function () {
		page++;
		$scope.refresh();
	};
	
	$scope.previous = function() {
		page--;
		$scope.refresh();
	};
})
.controller('SliderDetailController',function($scope) {
	console.log("sdfsdf");
});