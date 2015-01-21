var mainApp = angular.module('mainApp', [
  'ngRoute',
  'mainControllers'
]);


mainApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.when('/', {
      templateUrl: 'partials/home.html',
      controller: 'homeCtrl'
    }).when('/contact', {
      templateUrl: 'partials/contact.html'
    }).when('/cv', {
      templateUrl: 'partials/cv.html'
    }).when('/portfolio', {
      templateUrl: 'partials/portfolio.html'
    });
  }]);
