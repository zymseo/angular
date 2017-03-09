m.controller('ctr', ['$scope', '$stateParams', 'zymBlog', function($scope, $stateParams, zymBlog){
	//$scope.params = zymBlog.pam();
	$scope.params = $stateParams;
}]);

m.controller('ctr1', ['$scope', function($scope){
	$scope.url = 'index';
}]);

m.controller('ctr2', ['$scope', 'zymBlog', function($scope, zymBlog){
	$scope.url = 'list';
	zymBlog.webdata().then(function(result){
		$scope.webdata = result;
	});
}]);

m.controller('ctr3', ['$scope', function($scope){
	$scope.url = 'article';
}]);