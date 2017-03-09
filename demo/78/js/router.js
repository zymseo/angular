m.config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider){
	$urlRouterProvider.otherwise('/index');
	$stateProvider.state('index', {
		url : '/index/{id}',
		templateUrl : './index.html',
		controller : 'ctr1'
	})
	.state('list', {
		url : '/list/{id}',
		templateUrl : './list.html',
		controller : 'ctr2'
	})
	.state('article', {
		url : '/article/{id}',
		templateUrl : './article.html',
		controller : 'ctr3'
	})
}]);