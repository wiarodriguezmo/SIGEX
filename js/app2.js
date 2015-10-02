var app2 = angular.module("app2", ["angucomplete","ui.bootstrap"]);
//function myController($scope){
	//$scope.mensaje = "Formulario Inscripción proyecto de extensión";
    //$scope.saludo = function(){
      // alert("hola");
   // }
//}


app2.controller("formulario2", ["$scope", "$http",
	function formulario2($scope, $http){
	$scope.mensaje = "Encuesta a Participantes en Servicios de Extensión";
	$scope.existente = function(){
		$http.get("php/existente.php?variable1=" + $scope.user)
			.success(function (response) {$scope.exist = response.records;});

    }
	$scope.open = function($event) {
		console.log("asdf",$scope.dt);
	 	$event.preventDefault();
	 	$event.stopPropagation();

	 	$scope.opened = true;
	}
}]);
