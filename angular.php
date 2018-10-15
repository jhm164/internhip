<!DOCTYPE html>
<html>
<head>
	<title></title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body>
<script>
	var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.htm"
    })
    .when("/red", {
        templateUrl : "red.htm"
    })
    .when("/green", {
        templateUrl : "green.htm"
    })
    .when("/blue", {
        templateUrl : "blue.htm"
    });
});
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    $http.get("sqlfile.php?organisation=ARW")
    .then(function(response) {
        $scope.myWelcomes = response.data;
    });
});
</script>
<div ng-app="myApp" ng-controller="myCtrl"  > 
<div ng-repeat="myWelcome in myWelcomes" style="border: 1px solid black;margin: 2px;">
	{{myWelcome.name}}
</div>
</div>
</body>
</html>