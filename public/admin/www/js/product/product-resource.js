

angular.module('myApp')
.factory('ProductService', ['$resource',
	 function($resource){
	     return $resource('/productService?:action/:id', {id:'@id'}, {
	    	 queryfilter:{method:'GET'}
     });
}]);