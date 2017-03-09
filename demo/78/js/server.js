var m = angular.module('app', ['ui.router']);
m.factory('zymBlog', ['$http', '$stateParams', function($http, $stateParams){
		return {
			webdata : function(){
				return $http({
					url : './data.php',
					method : 'post'
				}).then(function(result){
					return result.data;
				});
			},
			pam : function(){
				return $stateParams;
		}
	}
}]);