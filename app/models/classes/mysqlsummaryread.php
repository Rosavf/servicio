<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    protected $status=["PAGADO"];
    protected $superconcepts=["FACTOR HUMANO","GASTOS GENERALES"];
    protected $modules=["OPERADORA","BANCO","CASA","GRUPO","SAVELLA","SERVICIOS"];

    public function readModules($table,$month){

        $response=[];

        foreach ($this->status as $state) {

            $results=[];
            $results["Estado"]=$state;
            $results["Super_Conceptos"]=[];
    
            foreach ($this->superconcepts as $superconcept) {
    
                $results1=[];
                $results1["Super_Concepto"] = $superconcept;
                $results1["Cuentas"]=[];
                
                $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Super_Concepto = '".$superconcept."'","Id_Cuenta");
    
                foreach ($accountArray as $account) {
    
                    $results2=[];
                    $results2["Id_Cuenta"]=$account;
                    $results2["Cuenta"] = $this->mySql->select($table,["Cuenta"],"Id_Cuenta = '".$account."'"." AND "."Mes = '".$month."'","Mes","assoc")[0]["Cuenta"];
                    $results2["Concepto"] = $this->mySql->select($table,["Concepto"],"Id_Cuenta = '".$account."'"." AND "."Mes = '".$month."'","Mes","assoc")[0]["Concepto"];
                    $results2["Llave"]=$superconcept.'-'.$account;
                    $results2["Modulos"]=[];

    
                    foreach ($this->modules as $module) {
    
                        $results3=[];
                        $results3["Modulo"]=$module;
                        $conditions="Modulo = '".$module."'"." AND "."Id_Cuenta = '".$account."'"." AND "."Mes = '".$month."'";
                        $mensualidades = $this->mySql->select($table,["Subtotal"],$conditions,"Mes","assoc");
                        $results3["Subtotal"]=$mensualidades[0]["Subtotal"];
                        $results3["Llave"]=$account."-".$module;
                        $results2["Modulos"][]=$results3;
    
                    }

                    $total=[];

                    $total["Modulo"]="TOTAL";
                    $total["Subtotal"]="10.00";
                    $total["Llave"]=$account."-TOTAL";

                    $results2["Modulos"][]=$total;
                    $results1["Cuentas"][]=$results2;
    
                }
    
                $results["Super_Conceptos"][]=$results1;
        
            }

            $response[]=$results;

        }

        echo(json_encode($response));

    }

}

?>