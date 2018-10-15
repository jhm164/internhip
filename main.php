<!DOCTYPE html>
<html>
<head>
	<title>Exam preperation online</title>
	<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 
  <style type="text/css">
  	body{
  		background-color: #67696b;
  	}
  	p{
  		float: left;
  	}
  	
.table tbody tr td {
  background-color: white;
}
  </style>
  <script>
  	var v;
$(document).ready(function(){
$("#ARW").click(function(){

});
});


</script>
<script>

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    $http.get("sqlfile.php?organisation=ARW")
    .then(function(response) {
        $scope.myWelcomes = response.data;
    });
});
var app = angular.module('myApp', []);
app.controller('myCtrl', ['$scope', '$http', function($scope, $http) {
  $scope.clickButton = function(msg) {
    $http.get("sqlfile.php?organisation="+msg) .then(function(response) {
        $scope.myWelcomes = response.data;
    });
  }
   $scope.clickappmode = function(msg) {
    $http.get("sqlfile.php?appmode="+msg) .then(function(response) {
        $scope.myWelcomes = response.data;
    });
  }

}]);

</script>
</head>
<body class="container-fluid" ng-app="myApp" ng-controller="myCtrl" >
<div ng-click="clickButton('ARW')"> ARW</div>
<div ng-click="clickappmode('on campus')"> cdw</div>
<div style=" margin-top: 100px;  box-shadow: 7px 7px 7px 7px black;">
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#a1a7ad;">
  	<center>
  		<h1 style="font-family: 'Times New Romen'; ">Exam preperation online</h1>
  	</center>
</div>
  <div class="panel-body">
  	<div class="col-lg-3 col-md-3" style="background-color: #edeeef;padding-left:  15px;padding-right: 15px;padding-bottom:  15px;">

  <p style="float: right;padding-top:  15px;"><a href="">apply_filter</a>
  </h5>
<div style="float: left;padding-top:  15px;"><h4>Organisation:</h4></div>
	<select class="form-control form-control-sm">
<option>--select--</option>
  <option  ng-click="clickButton('ARW')"><div ng-click="clickButton('ARW')"> ARW</div></option>
  <option ng-click="clickButton('dsdadsa')" ><div ng-click="clickButton('dsdadsa')"> cdw</div></option>
</select>	
<div style="float: left;padding-top:  15px;"><h4>Engineering Stream:</h4></div>
	<select class="form-control form-control-sm">
<option>--select--</option>
  <option>computer</option>
  <option>civil</option>
  <option>mechanical</option>
</select>	
<div style="float: left;padding-top:  15px;"><h4>Application Mode:</h4></div>
	<select class="form-control form-control-sm">
<option>--select--</option>
  <option>on campus</option>
  <option>off campus</option>
  
</select>	

  	</div>
  	<div class="col-lg-1 col-md-1"></div>
  	<div  class="col-lg-8 col-md-8" style="overflow: scroll;">
  		<h1>Interview Experiances:ARW</h1>

<div ng-Repeat="myWelcome in myWelcomes" style="border: 1px solid black;margin: 2px;padding: 12px;float: left; width: 100%; padding-left:15px; ">
	<h5>Job Location : <b> {{myWelcome.location}}</b></h5>
	<h5>Oganisation : <b> {{myWelcome.organisation}}</b></h5>
	<h5>Application Mode : <b> {{myWelcome.applimode}}</b></h5>
	<h5>Job Location : <b> {{myWelcome.location}}</b></h5>
	<h5>Selection Procedure: <b> {{myWelcome.selectionpro}}</b></h5>
	<h5>Technical Interview: <b> {{myWelcome.technical}}</b></h5>
	<h5>Analytical Question: <b> {{myWelcome.analyticalq}}</b></h5>
	<h5>HR Question: <b> {{myWelcome.hrq}}</b></h5>
	<h5>Suggesions: <b> {{myWelcome.suggession}}</b></h5>
	<h5>Shared By: <b> {{myWelcome.name}}</b></h5>
</div>
  </div>
</div>
</div>

</body>
</html>