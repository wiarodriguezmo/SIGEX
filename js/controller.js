angular.module('app', ['ui.bootstrap']).controller("formulario", function($scope){
	$scope.mensaje = "Formulario Inscripción proyecto de extensión";
	//añadimos facultades de cada sede
	$scope.open = function($event) {
	console.log("asdf",$scope.dt);
	 $event.preventDefault();
	 $event.stopPropagation();

	 $scope.opened = true;
}
});

angular.module('app2', ["angucomplete",'ui.bootstrap']).controller("formulario2",	function($scope,$http){
	$scope.mensaje = "Encuesta a Participantes en Servicios de Extensión";
	$scope.mensaje2 = "Encuesta a Usuarios en Servicios de Extensión";
	$scope.mensaje3 = "Formato de Sistematización de Proyectos en Servicios de Extensión"
	// Evalúa si un usuario existe, si no habilita campos de registro
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

});
