'use strict';

angular.module('analyticsApp', [
  'ngRoute',
  'analyticsApp.analytics'
]).
config(['$routeProvider', function($routeProvider) {
	/* route redirectTo /home */
  $routeProvider.otherwise({redirectTo: '/home'});
}]);