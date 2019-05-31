<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_principal extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            $this->load->Model('m_lista_ingenio');
  
        }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
       
        $b_amazonas = $this->m_lista_ingenio->amazonas_brigadas();
        $i_amazonas = $this->m_lista_ingenio->amazonas_ingenio();
        $a_amazonas = $this->m_lista_ingenio->amazonas_asesorate();
        $agro_amazonas = $this->m_lista_ingenio->amazonas_agro();
        $amazonas_emprende = $this->m_lista_ingenio->amazonas_emprende();
/*********************************************************/
        $b_anzoategui = $this->m_lista_ingenio->anzoategui_brigadas();
        $i_anzoategui = $this->m_lista_ingenio->anzoategui_ingenio();
        $a_anzoategui = $this->m_lista_ingenio->anzoategui_asesorate();
        $agro_anzoategui = $this->m_lista_ingenio->anzoategui_agro();
        $anzoategui_emprende = $this->m_lista_ingenio->anzoategui_emprende();
/*********************************************************/
        $b_apure = $this->m_lista_ingenio->apure_brigadas();
        $i_apure = $this->m_lista_ingenio->apure_ingenio();
        $a_apure = $this->m_lista_ingenio->apure_asesorate();
        $agro_apure = $this->m_lista_ingenio->apure_agro();
         $apure_emprende = $this->m_lista_ingenio->apure_emprende();
/*********************************************************/
        $b_aragua = $this->m_lista_ingenio->aragua_brigadas();
        $i_aragua = $this->m_lista_ingenio->aragua_ingenio();
        $a_aragua = $this->m_lista_ingenio->aragua_asesorate();
        $agro_aragua = $this->m_lista_ingenio->aragua_agro();
        $aragua_emprende = $this->m_lista_ingenio->aragua_emprende();
/*********************************************************/
        $b_barinas = $this->m_lista_ingenio->barinas_brigadas();
        $i_barinas = $this->m_lista_ingenio->barinas_ingenio();
        $a_barinas = $this->m_lista_ingenio->barinas_asesorate();
        $agro_barinas = $this->m_lista_ingenio->barinas_agro();
        $barinas_emprende = $this->m_lista_ingenio->barinas_emprende();
/*********************************************************/
        $b_bolivar = $this->m_lista_ingenio->bolivar_brigadas();
        $i_bolivar = $this->m_lista_ingenio->bolivar_ingenio();
        $a_bolivar = $this->m_lista_ingenio->bolivar_asesorate();
        $agro_bolivar = $this->m_lista_ingenio->bolivar_agro();
        $bolivar_emprende = $this->m_lista_ingenio->bolivar_emprende();
/*********************************************************/
        $b_carabobo = $this->m_lista_ingenio->carabobo_brigadas();
        $i_carabobo = $this->m_lista_ingenio->carabobo_ingenio();
        $a_carabobo = $this->m_lista_ingenio->carabobo_asesorate();
        $agro_carabobo = $this->m_lista_ingenio->carabobo_agro();
        $carabobo_emprende = $this->m_lista_ingenio->carabobo_emprende();
/*********************************************************/
        $b_cojedes = $this->m_lista_ingenio->cojedes_brigadas();
        $i_cojedes = $this->m_lista_ingenio->cojedes_ingenio();
        $a_cojedes = $this->m_lista_ingenio->cojedes_asesorate();
        $agro_cojedes = $this->m_lista_ingenio->cojedes_agro();
        $cojedes_emprede = $this->m_lista_ingenio->cojedes_emprede();
/*********************************************************/
        $b_delta = $this->m_lista_ingenio->delta_brigadas();
        $i_delta = $this->m_lista_ingenio->delta_ingenio();
        $a_delta = $this->m_lista_ingenio->delta_asesorate();
        $agro_delta = $this->m_lista_ingenio->delta_agro();
        $delta_emprende = $this->m_lista_ingenio->delta_emprende();
/*********************************************************/
        $b_falcon = $this->m_lista_ingenio->falcon_brigadas();
        $i_falcon = $this->m_lista_ingenio->falcon_ingenio();
        $a_falcon = $this->m_lista_ingenio->falcon_asesorate();
        $agro_falcon = $this->m_lista_ingenio->falcon_agro();
        $falcon_emprende = $this->m_lista_ingenio->falcon_emprende();
/*********************************************************/
        $b_guarico = $this->m_lista_ingenio->guarico_brigadas();
        $i_guarico = $this->m_lista_ingenio->guarico_ingenio();
        $a_guarico = $this->m_lista_ingenio->guarico_asesorate();
        $agro_guarico = $this->m_lista_ingenio->guarico_agro();
        $guarico_emprende = $this->m_lista_ingenio->guarico_emprende();
/*********************************************************/
        $b_lara = $this->m_lista_ingenio->lara_brigadas();
        $i_lara = $this->m_lista_ingenio->lara_ingenio();
        $a_lara = $this->m_lista_ingenio->lara_asesorate();
        $agro_lara = $this->m_lista_ingenio->lara_agro();
        $lara_emprende = $this->m_lista_ingenio->lara_emprende();
/*********************************************************/
        $b_merida = $this->m_lista_ingenio->merida_brigadas();
        $i_merida = $this->m_lista_ingenio->merida_ingenio();
        $a_merida = $this->m_lista_ingenio->merida_asesorate();
        $agro_merida = $this->m_lista_ingenio->merida_agro();
        $merida_emprende = $this->m_lista_ingenio->merida_emprende();
/*********************************************************/
        $b_miranda = $this->m_lista_ingenio->miranda_brigadas();
        $i_miranda = $this->m_lista_ingenio->miranda_ingenio();
        $a_miranda = $this->m_lista_ingenio->miranda_asesorate();
        $agro_miranda = $this->m_lista_ingenio->miranda_agro();
        $miranda_emprende = $this->m_lista_ingenio->miranda_emprende();
/*********************************************************/
        $b_monagas = $this->m_lista_ingenio->monagas_brigadas();
        $i_monagas = $this->m_lista_ingenio->monagas_ingenio();
        $a_monagas = $this->m_lista_ingenio->monagas_asesorate();
        $agro_monagas = $this->m_lista_ingenio->monagas_agro();
        $monagas_emprende = $this->m_lista_ingenio->monagas_emprende();
/*********************************************************/
        $b_esparta = $this->m_lista_ingenio->esparta_brigadas();
        $i_esparta = $this->m_lista_ingenio->esparta_ingenio();
        $a_esparta = $this->m_lista_ingenio->esparta_asesorate();
        $agro_esparta = $this->m_lista_ingenio->esparta_agro();
         $esparta_emprende = $this->m_lista_ingenio->esparta_emprende();
/*********************************************************/
        $b_portuguesa = $this->m_lista_ingenio->portuguesa_brigadas();
        $i_portuguesa = $this->m_lista_ingenio->portuguesa_ingenio();
        $a_portuguesa = $this->m_lista_ingenio->portuguesa_asesorate();
        $agro_portuguesa = $this->m_lista_ingenio->portuguesa_agro(); 
        $portuguesa_emprende = $this->m_lista_ingenio->portuguesa_emprende(); 
/*********************************************************/
        $b_sucre = $this->m_lista_ingenio->sucre_brigadas();
        $i_sucre = $this->m_lista_ingenio->sucre_ingenio();
        $a_sucre = $this->m_lista_ingenio->sucre_asesorate();
        $agro_sucre = $this->m_lista_ingenio->sucre_agro();
        $sucre_emprende = $this->m_lista_ingenio->sucre_emprende();
/*********************************************************/
        $b_tachira = $this->m_lista_ingenio->tachira_brigadas();
        $i_tachira = $this->m_lista_ingenio->tachira_ingenio();
        $a_tachira = $this->m_lista_ingenio->tachira_asesorate();
        $agro_tachira = $this->m_lista_ingenio->tachira_agro(); 
        $tachira_emprende = $this->m_lista_ingenio->tachira_emprende(); 
/*********************************************************/
        $b_trujillo = $this->m_lista_ingenio->trujillo_brigadas();
        $i_trujillo = $this->m_lista_ingenio->trujillo_ingenio();
        $a_trujillo = $this->m_lista_ingenio->trujillo_asesorate();
        $agro_trujillo = $this->m_lista_ingenio->trujillo_agro();
        $trujillo_emprende = $this->m_lista_ingenio->trujillo_emprende();
/*********************************************************/
        $b_vargas = $this->m_lista_ingenio->vargas_brigadas();
        $i_vargas = $this->m_lista_ingenio->vargas_ingenio();
        $a_vargas = $this->m_lista_ingenio->vargas_asesorate();
        $agro_vargas = $this->m_lista_ingenio->vargas_agro();
        $vargas_emprende = $this->m_lista_ingenio->vargas_emprende(); 
/*********************************************************/
        $b_yaracuy = $this->m_lista_ingenio->yaracuy_brigadas();
        $i_yaracuy = $this->m_lista_ingenio->yaracuy_ingenio();
        $a_yaracuy = $this->m_lista_ingenio->yaracuy_asesorate();
        $agro_yaracuy = $this->m_lista_ingenio->yaracuy_agro();
        $yaracuy_emprende = $this->m_lista_ingenio->yaracuy_emprende(); 
/*********************************************************/
        $b_zulia = $this->m_lista_ingenio->zulia_brigadas();
        $i_zulia = $this->m_lista_ingenio->zulia_ingenio();
        $a_zulia = $this->m_lista_ingenio->zulia_asesorate();
        $agro_zulia = $this->m_lista_ingenio->zulia_agro(); 
        $zulia_emprende = $this->m_lista_ingenio->zulia_emprende();
/*********************************************************/
        $b_distrito = $this->m_lista_ingenio->distrito_brigadas();
        $i_distrito = $this->m_lista_ingenio->distrito_ingenio();
        $a_distrito = $this->m_lista_ingenio->distrito_asesorate();
        $agro_distrito = $this->m_lista_ingenio->distrito_agro(); 
        $distrito_emprende = $this->m_lista_ingenio->distrito_emprende();

        $this->load->view('v_principal', compact('i_amazonas','b_amazonas','a_amazonas','agro_amazonas','total_amazonas','b_anzoategui','i_anzoategui','a_anzoategui','agro_anzoategui','b_apure','i_apure','a_apure','agro_apure','b_aragua','i_aragua','a_aragua','agro_aragua','agro_barinas','b_barinas','i_barinas','a_barinas','b_bolivar','i_bolivar','a_bolivar','agro_bolivar','b_carabobo','i_carabobo','a_carabobo','agro_carabobo','b_cojedes','i_cojedes','a_cojedes','agro_cojedes',
            'a_delta','agro_delta','b_delta','i_delta','a_delta','agro_delta','b_falcon','i_falcon','a_falcon','agro_falcon','b_guarico','i_guarico','a_guarico','agro_guarico','b_lara','i_lara','a_lara','agro_lara','b_merida','i_merida','a_merida','agro_merida','b_miranda','i_miranda','a_miranda','agro_miranda','b_monagas','i_monagas','a_monagas','agro_monagas','b_esparta','i_esparta','a_esparta','agro_esparta','b_portuguesa','i_portuguesa','a_portuguesa','agro_portuguesa','b_sucre','i_sucre','a_sucre','agro_sucre','b_tachira','i_tachira','a_tachira','agro_tachira','b_trujillo','i_trujillo','a_trujillo','agro_trujillo','b_vargas','i_vargas','a_vargas','agro_vargas','b_yaracuy','i_yaracuy','a_yaracuy','agro_yaracuy','b_zulia','i_zulia','a_zulia','agro_zulia','b_distrito','i_distrito','a_distrito','agro_distrito','amazonas_emprende','anzoategui_emprende','apure_emprende','aragua_emprende','barinas_emprende','bolivar_emprende','carabobo_emprende','cojedes_emprede','delta_emprende','falcon_emprende','guarico_emprende','lara_emprende','merida_emprende','miranda_emprende','monagas_emprende','esparta_emprende','portuguesa_emprende','sucre_emprende','tachira_emprende','trujillo_emprende','vargas_emprende','yaracuy_emprende','zulia_emprende','distrito_emprende'));
    } 

    
}
?>