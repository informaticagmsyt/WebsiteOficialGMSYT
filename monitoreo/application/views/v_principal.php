<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>
<br>
<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary"> Listado de Registros de Planes por Estado</h4></p>
    </div>
    </section>
    <hr style="   border-width: 3px; dorder:solid;" class="bg-danger">
    <section>
      <div class="container-fluid">
          <div class="row">
  <?php
  $act           = count($i_amazonas);
  $b_amazonas    = count($b_amazonas); 
  $a_amazonas    = count($a_amazonas);
  $agro_amazonas = count($agro_amazonas);
  $amazonas_emprende = count($amazonas_emprende);

/*****************************************/
  $b_anzoategui    = count($b_anzoategui); 
  $i_anzoategui    = count($i_anzoategui);
  $a_anzoategui    = count($a_anzoategui);
  $agro_anzoategui = count($agro_anzoategui);
  $anzoategui_emprende = count($anzoategui_emprende);
/*****************************************/
  $b_apure    = count($b_apure); 
  $i_apure    = count($i_apure);
  $a_apure    = count($a_apure);
  $agro_apure = count($agro_apure);
  $apure_emprende = count($apure_emprende);
/*****************************************/
  $b_aragua    = count($b_aragua); 
  $i_aragua    = count($i_aragua);
  $a_aragua    = count($a_aragua);
  $agro_aragua = count($agro_aragua);
  $aragua_emprende = count($aragua_emprende);
  /*****************************************/
  $b_barinas    = count($b_barinas); 
  $i_barinas    = count($i_barinas);
  $a_barinas    = count($a_barinas);
  $agro_barinas = count($agro_barinas);
  $barinas_emprende = count($barinas_emprende);
  /*****************************************/
  $b_bolivar    = count($b_bolivar); 
  $i_bolivar    = count($i_bolivar);
  $a_bolivar    = count($a_bolivar);
  $agro_bolivar = count($agro_bolivar);
  $bolivar_emprende = count($bolivar_emprende);
  /*****************************************/
  $b_carabobo    = count($b_carabobo); 
  $i_carabobo    = count($i_carabobo);
  $a_carabobo    = count($a_carabobo);
  $agro_carabobo = count($agro_carabobo);
  $carabobo_emprende = count($carabobo_emprende);
  /*****************************************/
  $b_cojedes    = count($b_cojedes); 
  $i_cojedes    = count($i_cojedes);
  $a_cojedes    = count($a_cojedes);
  $agro_cojedes = count($agro_cojedes);
  $cojedes_emprede = count($cojedes_emprede);
  /*****************************************/
  $b_delta    = count($b_delta); 
  $i_delta    = count($i_delta);
  $a_delta    = count($a_delta);
  $agro_delta = count($agro_delta);
  $delta_emprende = count($delta_emprende);
  /*****************************************/
  $b_falcon    = count($b_falcon); 
  $i_falcon    = count($i_falcon);
  $a_falcon    = count($a_falcon);
  $agro_falcon = count($agro_falcon);
  $falcon_emprende = count($falcon_emprende);
   /*****************************************/
  $b_guarico    = count($b_guarico); 
  $i_guarico    = count($i_guarico);
  $a_guarico    = count($a_guarico);
  $agro_guarico = count($agro_guarico);
  $guarico_emprende = count($guarico_emprende);
  
  /*****************************************/
  $b_lara    = count($b_lara); 
  $i_lara    = count($i_lara);
  $a_lara    = count($a_lara);
  $agro_lara = count($agro_lara);
  $lara_emprende = count($lara_emprende);
  /*****************************************/
  $b_merida    = count($b_merida); 
  $i_merida    = count($i_merida);
  $a_merida    = count($a_merida);
  $agro_merida = count($agro_merida);
  $merida_emprende = count($merida_emprende);
  /*****************************************/
  $b_miranda    = count($b_miranda); 
  $i_miranda    = count($i_miranda);
  $a_miranda    = count($a_miranda);
  $agro_miranda = count($agro_miranda);
  $miranda_emprende = count($miranda_emprende);
  /*****************************************/
  $b_monagas    = count($b_monagas); 
  $i_monagas    = count($i_monagas);
  $a_monagas    = count($a_monagas);
  $agro_monagas = count($agro_monagas);
  $monagas_emprende = count($monagas_emprende);
  /*****************************************/
  $b_esparta    = count($b_esparta); 
  $i_esparta    = count($i_esparta);
  $a_esparta    = count($a_esparta);
  $agro_esparta = count($agro_esparta);
  $esparta_emprende = count($esparta_emprende);
  /*****************************************/
  $b_portuguesa   = count($b_portuguesa); 
  $i_portuguesa    = count($i_portuguesa);
  $a_portuguesa    = count($a_portuguesa);
  $agro_portuguesa = count($agro_portuguesa);
  $portuguesa_emprende = count($portuguesa_emprende);
    /*****************************************/
  $b_sucre   = count($b_sucre); 
  $i_sucre   = count($i_sucre);
  $a_sucre    = count($a_sucre);
  $agro_sucre = count($agro_sucre);
  $sucre_emprende = count($sucre_emprende);
  /*****************************************/
  $b_tachira   = count($b_tachira); 
  $i_tachira   = count($i_tachira);
  $a_tachira    = count($a_tachira);
  $agro_tachira = count($agro_tachira);
  $tachira_emprende = count($tachira_emprende);
  /*****************************************/
  $b_trujillo   = count($b_trujillo); 
  $i_trujillo   = count($i_trujillo);
  $a_trujillo    = count($a_trujillo);
  $agro_trujillo = count($agro_trujillo);
  $trujillo_emprende = count($trujillo_emprende);
  /*****************************************/
  $b_vargas   = count($b_vargas); 
  $i_vargas   = count($i_vargas);
  $a_vargas    = count($a_vargas);
  $agro_vargas = count($agro_vargas);
  $vargas_emprende = count($vargas_emprende);
 /*****************************************/
  $b_yaracuy  = count($b_yaracuy); 
  $i_yaracuy   = count($i_yaracuy);
  $a_yaracuy   = count($a_yaracuy);
  $agro_yaracuy = count($agro_yaracuy);
  $yaracuy_emprende = count($yaracuy_emprende);
  /*****************************************/
  $b_zulia = count($b_zulia); 
  $i_zulia   = count($i_zulia);
  $a_zulia   = count($a_zulia);
  $agro_zulia = count($agro_zulia);
  $zulia_emprende = count($zulia_emprende);
  /*****************************************/
  $b_distrito = count($b_distrito); 
  $i_distrito   = count($i_distrito);
  $a_distrito   = count($a_distrito);
  $agro_distrito = count($agro_distrito);
  $distrito_emprende = count($distrito_emprende);
  ?>
<!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Amazonas: <B> <?php echo $ama= $b_amazonas+$act+$a_amazonas+$agro_amazonas+$amazonas_emprende;?> </B></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_amazonas ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo $act ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_amazonas ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_amazonas ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $amazonas_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
         <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Anzoategui: <b><?php echo $anzo=$b_anzoategui+$i_anzoategui+$a_amazonas+$agro_amazonas+$anzoategui_emprende;?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_anzoategui ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_anzoategui ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_amazonas ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_amazonas ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $anzoategui_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
<!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Apure: <b><?php echo $apu=$b_apure+$i_apure+$a_apure+$agro_apure+$apure_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_apure ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_apure ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_apure ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_apure ?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $apure_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
       <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Aragua: <b><?php echo $arag=$b_aragua+$i_aragua+$a_aragua+$agro_aragua+$aragua_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_aragua ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_aragua ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_aragua ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_aragua ?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $aragua_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
       <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Barinas: <b><?php echo $bar=$b_barinas+$i_barinas+$a_barinas+$agro_barinas+$barinas_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_barinas ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_barinas ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_barinas ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_barinas ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $barinas_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
     <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Bolivar: <b><?php echo $bol=$b_bolivar+$i_bolivar+$a_bolivar+$agro_bolivar+$bolivar_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_bolivar ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_bolivar ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_bolivar ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_bolivar ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $bolivar_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>

   <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Carabobo: <b><?php echo $car=$b_carabobo+$i_carabobo+$a_carabobo+$agro_carabobo+$carabobo_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_carabobo ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_carabobo ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_carabobo ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_carabobo ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $carabobo_emprende ?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
   <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Cojedes: <b><?php echo $coj=$b_cojedes+$i_cojedes+$a_cojedes+$agro_cojedes+$cojedes_emprede; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_cojedes ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_cojedes ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_cojedes ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_cojedes ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $cojedes_emprede?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>

<!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Delta Amacuro: <b><?php echo $del=$b_delta+$i_delta+$a_delta+$agro_delta+$delta_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_delta ?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_delta ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_delta ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_delta ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $delta_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
<!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Falcon: <b><?php echo  $fal=$b_falcon+$i_falcon+$a_falcon+$agro_falcon+$falcon_emprende;?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_falcon?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_falcon ?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_falcon?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_falcon ?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $falcon_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
 <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Guarico: <b><?php echo $gua=$b_guarico+$i_guarico+$a_guarico+$agro_guarico+$guarico_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_guarico?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_guarico?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_guarico?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_guarico?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $guarico_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>  
           <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Lara: <b><?php echo $lar=$b_lara+$i_lara+$a_lara+$agro_lara+$lara_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_lara?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_lara?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_lara?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_lara?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $lara_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>           
           <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Merida: <b><?php echo $mer=$b_merida+$i_merida+$a_merida+$agro_merida+$merida_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_merida?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_merida?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_merida?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_merida?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $merida_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
                         <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Miranda: <b><?php echo $mir=$b_miranda+$i_miranda+$a_miranda+$agro_miranda+$miranda_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_miranda?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_miranda?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_miranda?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_miranda?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $miranda_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
              <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Monagas: <b><?php echo $mon=$b_monagas+$i_monagas+$a_monagas+$agro_monagas+$monagas_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_monagas?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_monagas?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_monagas?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_monagas?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $monagas_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
              <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Nueva Esparta: <b><?php echo $nuv=$b_esparta+$i_esparta+$a_esparta+$agro_esparta+$esparta_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_esparta?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_esparta?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_esparta?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_esparta?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $esparta_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
                            <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Portuguesa: <b><?php echo $por=$b_portuguesa+$i_portuguesa+$a_portuguesa+$agro_portuguesa+$portuguesa_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_portuguesa?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_portuguesa?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_portuguesa?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_portuguesa?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $portuguesa_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
<!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Sucre: <b><?php echo $suc=$b_sucre+$i_sucre+ $a_sucre+$agro_sucre+$sucre_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_sucre?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_sucre?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_sucre?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_sucre?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $sucre_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
              <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Tachira: <b><?php echo $tah=$b_tachira+$i_tachira+$a_tachira+$agro_tachira+$tachira_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_tachira?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_tachira?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_tachira?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_tachira?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $tachira_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
<!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Trujillo: <b><?php echo $tru=$b_trujillo+$i_trujillo+$a_trujillo+$agro_trujillo+$trujillo_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_trujillo?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_trujillo?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_trujillo?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_trujillo?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $trujillo_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
         <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Vargas: <b><?php echo $var=$b_vargas+$i_vargas+$a_vargas+$agro_vargas+$vargas_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_vargas?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_vargas?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_vargas?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_vargas?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $vargas_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
                      <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Yaracuy: <b><?php echo $yar=$b_yaracuy+$i_yaracuy+$a_yaracuy+$agro_yaracuy+$yaracuy_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_yaracuy?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_yaracuy?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_yaracuy?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_yaracuy?></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $yaracuy_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
                                   <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Zulia: <b><?php echo $zul= $b_zulia+$i_zulia+$a_zulia+$agro_zulia+$zulia_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_zulia?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_zulia?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_zulia?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_zulia?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $zulia_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
                                                <!------------------------------------------------->
              <div class="col-md-3">
                  <div class="card mb-3 shadow-sm shadow p-3 mb-5 bg-white rounded ">
                  <div class="card-header badge-primary ">
                       <h4 class="my-0 font-weight-normal  ">Distrito Capital: <b ><?php echo $dto=$b_distrito+$i_distrito+$a_distrito+$agro_distrito+$distrito_emprende; ?></b></h4>
                  </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> </h1>
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              Brigadas Tecnicas
                              <span class="badge badge-warning badge-pill "><?php echo $b_distrito?></span>
                            </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                Proyecto Ingenio
                                <span class="badge badge-primary badge-pill"><?php echo  $i_distrito?></span>
                           </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Asesorate
                              <span class="badge badge-info badge-pill"><?php echo $a_distrito?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Agro Productivo
                              <span class="badge badge-danger badge-pill"><?php echo $agro_distrito?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Proyecto Emprende
                              <span class="badge badge-success badge-pill"><?php echo $distrito_emprende?></span>
                            </li>
                        </ul>
                    </div>
              </div>
              </div>
             
  </div></div>
    </section>
</body>