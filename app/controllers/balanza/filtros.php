
<?php

class filtros extends Controller{

    public function importar($module){

        $this->model('endpoints','filteraccountimport');
        $filterImport = new FilterAccountImport($module);
        $filterImport=null;

    }

    public function exportar($module){

        $request=$_POST['req'];

        echo($request);

    }

}


?>