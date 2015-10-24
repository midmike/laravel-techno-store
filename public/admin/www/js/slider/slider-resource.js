

angular.module('myApp')
.factory('SliderService', ['$resource',
	 function($resource){
	     return $resource('/sliderService?:action/:id', {id:'@id'}, {
	    	 queryfilter:{method:'GET'}
     });
}]);