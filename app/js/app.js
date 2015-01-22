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
    }).when('/portfolio_bw', {
      templateUrl: 'partials/portfolio_bw.html'
    }).when('/portfolio_game', {
      templateUrl: 'partials/portfolio_game.html'
    }).when('/portfolio_nadger', {
      templateUrl: 'partials/portfolio_nadger.html'
    }).when('/portfolio_other', {
      templateUrl: 'partials/portfolio_other.html'
    }).when('/portfolio_q2', {
      templateUrl: 'partials/portfolio_q2.html'
    }).when('/portfolio_unused', {
      templateUrl: 'partials/portfolio_unused.html'
    });
  }]);
