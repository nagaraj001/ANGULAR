angular.module('app.login').config(function ($routeProvider) {
    $routeProvider
            .when("/", {
                templateUrl: "../js/modules/login/login.html",
                controller: 'LoginController',
                controllerAs: 'loginCtrl'
            });
});