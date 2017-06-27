<?php
// autoload.php
// [created] 10 Mayo del 2017
// [rebuilded] 01 Junio del 2017
// esta funcion elimina el hecho de estar agregando los modelos manualmente
// by Sacerte
function __autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}
?>