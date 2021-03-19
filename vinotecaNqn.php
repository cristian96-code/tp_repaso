<?php

$vinosViniedos = [
    "malbec" => [
        ["variedad" => "Seco" , "cantidad" => 50 , "anioProduccion" => 1995 , "precioUnidad" => 799,],
        ["variedad" => "Dulce" , "cantidad" => 100 , "anioProduccion" => 1889 , "precioUnidad" => 859 ],
        ["variedad" => "Semidulce" , "cantidad" => 215 , "anioProduccion" => 1200 , "precioUnidad" => 1989 ]
        ]
     ,
    "cabernetSauvignon" => [
        ["variedad" => "Seco", "cantidad" => 80, "aniProduccion" => 2004, "precioUnidad" => 1609],
        ["variedad" => "Dulce" , "cantidad" => 230 , "anioProduccion" => 1970 , "precioUnidad" => 321 ],
        ["variedad" => "Semidulce" , "cantidad" => 45 , "anioProduccion" => 2019 , "precioUnidad" => 180 ]
    ],
    "merlot" =>[
        ["variedad" => "Seco", "cantidad" => 12, "anioProduccion" => 1955, "precioUnidad" => 434],
        ["variedad" => "Dulce" , "cantidad" => 62 , "anioProduccion" => 1992 , "precioUnidad" => 1345],
        ["variedad" => "Semidulce" , "cantidad" => 101 , "anioProduccion" => 1995 , "precioUnidad" => 299] 
    ]];

function totalVinos($vinos){
    $cantidaBotellas = 0;
    $precioTotal = 0;
    for ($i=0; $i < 1; $i++) { 
        for ($j = 0; $j < 3 ; $j++) { 
            $cantidaBotellas = $cantidaBotellas + $vinos["malbec"][$j]["cantidad"];
            $precioTotal = $precioTotal + $vinos["malbec"][$j]["precioUnidad"];
        };
        $vinoSanto["malbec"] = ["cantidad" => $cantidaBotellas , "precioPromedio" => round($precioTotal/3)];
        $cantidaBotellas = 0;
        $precioTotal = 0;
        for ($j = 0; $j < 3 ; $j++) { 
            $cantidaBotellas = $cantidaBotellas + $vinos["cabernetSauvignon"][$j]["cantidad"];
            $precioTotal = $precioTotal + $vinos["cabernetSauvignon"][$j]["precioUnidad"];
        };
        $vinoSanto["cabernerSauvignon"] = ["cantidad" => $cantidaBotellas , "precioPromedio" => round($precioTotal/3)];
        $cantidaBotellas = 0;
        $precioTotal = 0;   
        for ($j = 0; $j < 3 ; $j++) { 
            $cantidaBotellas = $cantidaBotellas + $vinos["merlot"][$j]["cantidad"];
            $precioTotal = $precioTotal + $vinos["merlot"][$j]["precioUnidad"];
        };
        $vinoSanto["merlot"] = ["cantidad" => $cantidaBotellas , "precioPromedio" => round($precioTotal/3)];
    };
    print_r($vinoSanto);
    return $vinoSanto;
};

$datosVinos = totalVinos($vinosViniedos);
