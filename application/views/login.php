<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Angular Material style sheet -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.css">
	<style type="text/css">
		body, html {
		    width:100%; 
			overflow: hidden;
		}
		/*.page        {
		    bottom:0; 
		    padding-top:200px;
		    position:absolute; 
		    text-align:center;
		    top:0;  
		    width:100%; 
		}*/
		/* ANIMATIONS
		============================================================================= */

		/* leaving animations ----------------------------------------- */
		/* rotate and fall */
		@keyframes rotateFall {
		    0%      { transform: rotateZ(0deg); }
		    20%     { transform: rotateZ(10deg); animation-timing-function: ease-out; }
		    40%     { transform: rotateZ(17deg); }
		    60%     { transform: rotateZ(16deg); }
		    100%    { transform: translateY(100%) rotateZ(17deg); }
		}

		/* slide in from the bottom */
		@keyframes slideOutLeft {
		    to      { transform: translateX(-100%); }
		}

		/* rotate out newspaper */
		@keyframes rotateOutNewspaper {
		    to      { transform: translateZ(-3000px) rotateZ(360deg); opacity: 0; }
		}

		/* entering animations --------------------------------------- */
		/* scale up */
		@keyframes scaleUp {
		    from    { opacity: 0.3; -webkit-transform: scale(0.8); }
		}

		/* slide in from the right */
		@keyframes slideInRight {
		    from    { transform:translateX(100%); }
		    to      { transform: translateX(0); }
		}

		/* slide in from the bottom */
		@keyframes slideInUp {
		    from    { transform:translateY(100%); }
		    to      { transform: translateY(0); }
		}

		.ng-enter           { animation: scaleUp 0.5s both ease-in; z-index: 8888; }
    	.ng-leave           { animation: slideOutLeft 0.5s both ease-in; z-index: 9999; }

    	.ng-enter       { z-index: 8888; }
    	.ng-leave       { z-index: 9999; }

	    /* page specific animations ------------------------ */

	    .page.ng-enter         { animation: scaleUp 0.75s both ease-in; }
	    .page.ng-leave         { transform-origin: 0% 0%; animation: rotateFall 0.5s both ease-in; }
	</style>
</head>
<body ng-app="loginApp" ng-cloak style="background: #bbdefb;">
	<div class="page {{ pageClass }}" ng-view>
	</div>

	<!-- Angular Material requires Angular.js Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-animate.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-aria.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-messages.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-route.js"></script>

	<!-- Angular Material Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.js"></script>

	<!-- Your application bootstrap  -->
	<script type="text/javascript">
		var loginApp = angular.module('loginApp', ['ngRoute', 'ngAnimate','ngMaterial', 'ngMessages']);
     	loginApp.config(['$mdIconProvider', function($mdIconProvider) {
	    	$mdIconProvider.icon('md-toggle-arrow', 'img/icons/toggle-arrow.svg', 48);
	    }]);

		loginApp.config(function($routeProvider) {

		    $routeProvider
		        .when('/', {
		            templateUrl: 'auth/login',
		            controller: 'loginController'
		        })
		        .when('/password', {
		            templateUrl: 'auth/forgot_password',
		            controller: 'changeController'
		        })

		});
		loginApp.controller('changeController', function($scope) {
	     	$scope.imagePath = 'img/washedout.png';
	     	$scope.loginUrl = "#!";
	     	$scope.auth = {};
	     	$scope.auth.login = function(){
	     		console.log($scope.auth);
	     	}
	    });
		loginApp.controller('loginController', function($scope) {
	     	$scope.imagePath = 'img/washedout.png';
	     	$scope.passUrl = "#!password";
	     	$scope.auth = {};
	     	$scope.auth.login = function(){
	     		console.log($scope.auth);
	     	}
	    });
	</script>

</body>
</html>