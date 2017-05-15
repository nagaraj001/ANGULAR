angular.module('app.login').controller('LoginController', LoginController);


LoginController.$inject=['$scope','$http'];

function LoginController($scope,$http){
    init=function(){
        console.log("here");
    }
    
    this.doLogin=function(){
        console.log("login");
    }
    
    //init();
}