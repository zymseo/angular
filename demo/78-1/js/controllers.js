define(['app'], function(app){
	return {
		ctr1 : function(){
			return app.controller('ctr1', ['$scope', function($scope){
				$scope.url = 'zym';
			}]);
		}
	}
});