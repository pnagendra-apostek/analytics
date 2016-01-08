
angular.module('analyticsApp.analytics',['ngRoute'])

.config(['$routeProvider', function($routeProvider){
  $routeProvider.
    when('/home', {
      templateUrl: 'views/main.html',
      controller: 'AnalyticsMainCtrl'
    })
}])
.controller('AnalyticsMainCtrl', ['$scope', '$http', function($scope, $http){ 
   $scope.title = "This is main html";

}]);
