<?php

class Checklist{
	private $pdo;
	private $id;
	private $turno;
	private $data;
	private $operador_mp;
	private $operador_sp;
	private $operador_tr;
	private $entrada_mp;
	private $saida_mp;
	private $entrada_sp;
	private $saida_sp;
	private $entrada_tr;
	private $saida_tr;
	private $racks_mp;
	private $racks_sp;
	private $racks_tr;
	private $org_mp;
	private $org_sp;
	private $org_tr;
	private $lumin_mp;
	private $lumin_sp;
	private $lumin_tr;
	private $infra_mp;
	private $infra_sp;
	private $infra_tr;
	private $acesso_mp;
	private $acesso_sp;
	private $acesso_tr;
	private $portacf_mp;
	private $portacf_sp;
	private $arc_mp;
	private $arc_sp;
	private $arc_tr;
	private $sist_extint_mp;
	private $sist_extint_sp;
	private $sist_extint_tr;
	private $ledsaude_mp;
	private $temp01_mp;
	private $humid01_mp;
	private $temp01_sp;
	private $humid01_sp;
	private $temp02_mp;
	private $humid02_mp;
	private $temp02_sp;
	private $humid02_sp;
	private $temp03_mp;
	private $humid03_mp;
	private $temp03_sp;
	private $humid03_sp;
	private $cap_ups_tr;
	private $lumin_sc_mp;
	private $portacf_sc_mp;
	private $acesso_sc_mp;
	private $geradores_mp;
	private $geradores_sp;
	private $org_ext_mp;
	private $org_ext_sp;
	private $org_ext_tr;
	private $zabbix;
	private $obs_mp;
	private $obs_sp;
	private $obs_tr;
	private $chk_carro;
	private $chk_sala;
	private $chk_not;
	private $chk_cel;
	private $chk_batcel;
    private $obs_npo;
    
    /** Inc DR **/

    private $operador_dr;
    private $entrada_dr;
    private $saida_dr;
    private $racks_dr;
    private $org_dr;
    private $lumin_dr;
    private $infra_dr;
    private $acesso_dr;
    private $portacf_dr;
    private $arc_dr;
    private $sist_extint_dr;
    private $ledsaude_dr;
    private $temp_dr;
    private $humid_dr;
    private $org_ext_dr;
    private $obs_dr;


	public function __construct($pdo){

		$this->pdo = $pdo;

	}
	
	public function getId(){
		return $this->id;
	}

    /**
     * @return mixed
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @return mixed
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param mixed $turno
     *
     * @return self
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperadorMp()
    {
        return $this->operador_mp;
    }

    /**
     * @param mixed $operador_mp
     *
     * @return self
     */
    public function setOperadorMp($operador_mp)
    {
        $this->operador_mp = $operador_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperadorSp()
    {
        return $this->operador_sp;
    }

    /**
     * @param mixed $operador_sp
     *
     * @return self
     */
    public function setOperadorSp($operador_sp)
    {
        $this->operador_sp = $operador_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperadorTr()
    {
        return $this->operador_tr;
    }

    /**
     * @param mixed $operador_tr
     *
     * @return self
     */
    public function setOperadorTr($operador_tr)
    {
        $this->operador_tr = $operador_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntradaMp()
    {
        return $this->entrada_mp;
    }

    /**
     * @param mixed $entrada_mp
     *
     * @return self
     */
    public function setEntradaMp($entrada_mp)
    {
        $this->entrada_mp = $entrada_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaidaMp()
    {
        return $this->saida_mp;
    }

    /**
     * @param mixed $saida_mp
     *
     * @return self
     */
    public function setSaidaMp($saida_mp)
    {
        $this->saida_mp = $saida_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntradaSp()
    {
        return $this->entrada_sp;
    }

    /**
     * @param mixed $entrada_sp
     *
     * @return self
     */
    public function setEntradaSp($entrada_sp)
    {
        $this->entrada_sp = $entrada_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaidaSp()
    {
        return $this->saida_sp;
    }

    /**
     * @param mixed $saida_sp
     *
     * @return self
     */
    public function setSaidaSp($saida_sp)
    {
        $this->saida_sp = $saida_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntradaTr()
    {
        return $this->entrada_tr;
    }

    /**
     * @param mixed $entrada_tr
     *
     * @return self
     */
    public function setEntradaTr($entrada_tr)
    {
        $this->entrada_tr = $entrada_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaidaTr()
    {
        return $this->saida_tr;
    }

    /**
     * @param mixed $saida_tr
     *
     * @return self
     */
    public function setSaidaTr($saida_tr)
    {
        $this->saida_tr = $saida_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRacksMp()
    {
        return $this->racks_mp;
    }

    /**
     * @param mixed $racks_mp
     *
     * @return self
     */
    public function setRacksMp($racks_mp)
    {
        $this->racks_mp = $racks_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRacksSp()
    {
        return $this->racks_sp;
    }

    /**
     * @param mixed $racks_sp
     *
     * @return self
     */
    public function setRacksSp($racks_sp)
    {
        $this->racks_sp = $racks_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRacksTr()
    {
        return $this->racks_tr;
    }

    /**
     * @param mixed $racks_tr
     *
     * @return self
     */
    public function setRacksTr($racks_tr)
    {
        $this->racks_tr = $racks_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgMp()
    {
        return $this->org_mp;
    }

    /**
     * @param mixed $org_mp
     *
     * @return self
     */
    public function setOrgMp($org_mp)
    {
        $this->org_mp = $org_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgSp()
    {
        return $this->org_sp;
    }

    /**
     * @param mixed $org_sp
     *
     * @return self
     */
    public function setOrgSp($org_sp)
    {
        $this->org_sp = $org_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgTr()
    {
        return $this->org_tr;
    }

    /**
     * @param mixed $org_tr
     *
     * @return self
     */
    public function setOrgTr($org_tr)
    {
        $this->org_tr = $org_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLuminMp()
    {
        return $this->lumin_mp;
    }

    /**
     * @param mixed $lumin_mp
     *
     * @return self
     */
    public function setLuminMp($lumin_mp)
    {
        $this->lumin_mp = $lumin_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLuminSp()
    {
        return $this->lumin_sp;
    }

    /**
     * @param mixed $lumin_sp
     *
     * @return self
     */
    public function setLuminSp($lumin_sp)
    {
        $this->lumin_sp = $lumin_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLuminTr()
    {
        return $this->lumin_tr;
    }

    /**
     * @param mixed $lumin_tr
     *
     * @return self
     */
    public function setLuminTr($lumin_tr)
    {
        $this->lumin_tr = $lumin_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfraMp()
    {
        return $this->infra_mp;
    }

    /**
     * @param mixed $infra_mp
     *
     * @return self
     */
    public function setInfraMp($infra_mp)
    {
        $this->infra_mp = $infra_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfraSp()
    {
        return $this->infra_sp;
    }

    /**
     * @param mixed $infra_sp
     *
     * @return self
     */
    public function setInfraSp($infra_sp)
    {
        $this->infra_sp = $infra_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfraTr()
    {
        return $this->infra_tr;
    }

    /**
     * @param mixed $infra_tr
     *
     * @return self
     */
    public function setInfraTr($infra_tr)
    {
        $this->infra_tr = $infra_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcessoMp()
    {
        return $this->acesso_mp;
    }

    /**
     * @param mixed $acesso_mp
     *
     * @return self
     */
    public function setAcessoMp($acesso_mp)
    {
        $this->acesso_mp = $acesso_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcessoSp()
    {
        return $this->acesso_sp;
    }

    /**
     * @param mixed $acesso_sp
     *
     * @return self
     */
    public function setAcessoSp($acesso_sp)
    {
        $this->acesso_sp = $acesso_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcessoTr()
    {
        return $this->acesso_tr;
    }

    /**
     * @param mixed $acesso_tr
     *
     * @return self
     */
    public function setAcessoTr($acesso_tr)
    {
        $this->acesso_tr = $acesso_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortacfMp()
    {
        return $this->portacf_mp;
    }

    /**
     * @param mixed $portacf_mp
     *
     * @return self
     */
    public function setPortacfMp($portacf_mp)
    {
        $this->portacf_mp = $portacf_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortacfSp()
    {
        return $this->portacf_sp;
    }

    /**
     * @param mixed $portacf_sp
     *
     * @return self
     */
    public function setPortacfSp($portacf_sp)
    {
        $this->portacf_sp = $portacf_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArcMp()
    {
        return $this->arc_mp;
    }

    /**
     * @param mixed $arc_mp
     *
     * @return self
     */
    public function setArcMp($arc_mp)
    {
        $this->arc_mp = $arc_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArcSp()
    {
        return $this->arc_sp;
    }

    /**
     * @param mixed $arc_sp
     *
     * @return self
     */
    public function setArcSp($arc_sp)
    {
        $this->arc_sp = $arc_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArcTr()
    {
        return $this->arc_tr;
    }

    /**
     * @param mixed $arc_tr
     *
     * @return self
     */
    public function setArcTr($arc_tr)
    {
        $this->arc_tr = $arc_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSistExtintMp()
    {
        return $this->sist_extint_mp;
    }

    /**
     * @param mixed $sist_extint_mp
     *
     * @return self
     */
    public function setSistExtintMp($sist_extint_mp)
    {
        $this->sist_extint_mp = $sist_extint_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSistExtintSp()
    {
        return $this->sist_extint_sp;
    }

    /**
     * @param mixed $sist_extint_sp
     *
     * @return self
     */
    public function setSistExtintSp($sist_extint_sp)
    {
        $this->sist_extint_sp = $sist_extint_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSistExtintTr()
    {
        return $this->sist_extint_tr;
    }

    /**
     * @param mixed $sist_extint_tr
     *
     * @return self
     */
    public function setSistExtintTr($sist_extint_tr)
    {
        $this->sist_extint_tr = $sist_extint_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLedsaudeMp()
    {
        return $this->ledsaude_mp;
    }

    /**
     * @param mixed $ledsaude_mp
     *
     * @return self
     */
    public function setLedsaudeMp($ledsaude_mp)
    {
        $this->ledsaude_mp = $ledsaude_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp01Mp()
    {
        return $this->temp01_mp;
    }

    /**
     * @param mixed $temp01_mp
     *
     * @return self
     */
    public function setTemp01Mp($temp01_mp)
    {
        $this->temp01_mp = $temp01_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumid01Mp()
    {
        return $this->humid01_mp;
    }

    /**
     * @param mixed $humid01_mp
     *
     * @return self
     */
    public function setHumid01Mp($humid01_mp)
    {
        $this->humid01_mp = $humid01_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp01Sp()
    {
        return $this->temp01_sp;
    }

    /**
     * @param mixed $temp01_sp
     *
     * @return self
     */
    public function setTemp01Sp($temp01_sp)
    {
        $this->temp01_sp = $temp01_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumid01Sp()
    {
        return $this->humid01_sp;
    }

    /**
     * @param mixed $humid01_sp
     *
     * @return self
     */
    public function setHumid01Sp($humid01_sp)
    {
        $this->humid01_sp = $humid01_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp02Mp()
    {
        return $this->temp02_mp;
    }

    /**
     * @param mixed $temp02_mp
     *
     * @return self
     */
    public function setTemp02Mp($temp02_mp)
    {
        $this->temp02_mp = $temp02_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumid02Mp()
    {
        return $this->humid02_mp;
    }

    /**
     * @param mixed $humid02_mp
     *
     * @return self
     */
    public function setHumid02Mp($humid02_mp)
    {
        $this->humid02_mp = $humid02_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp02Sp()
    {
        return $this->temp02_sp;
    }

    /**
     * @param mixed $temp02_sp
     *
     * @return self
     */
    public function setTemp02Sp($temp02_sp)
    {
        $this->temp02_sp = $temp02_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumid02Sp()
    {
        return $this->humid02_sp;
    }

    /**
     * @param mixed $humid02_sp
     *
     * @return self
     */
    public function setHumid02Sp($humid02_sp)
    {
        $this->humid02_sp = $humid02_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp03Mp()
    {
        return $this->temp03_mp;
    }

    /**
     * @param mixed $temp03_mp
     *
     * @return self
     */
    public function setTemp03Mp($temp03_mp)
    {
        $this->temp03_mp = $temp03_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumid03Mp()
    {
        return $this->humid03_mp;
    }

    /**
     * @param mixed $humid03_mp
     *
     * @return self
     */
    public function setHumid03Mp($humid03_mp)
    {
        $this->humid03_mp = $humid03_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp03Sp()
    {
        return $this->temp03_sp;
    }

    /**
     * @param mixed $temp03_sp
     *
     * @return self
     */
    public function setTemp03Sp($temp03_sp)
    {
        $this->temp03_sp = $temp03_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumid03Sp()
    {
        return $this->humid03_sp;
    }

    /**
     * @param mixed $humid03_sp
     *
     * @return self
     */
    public function setHumid03Sp($humid03_sp)
    {
        $this->humid03_sp = $humid03_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCapUpsTr()
    {
        return $this->cap_ups_tr;
    }

    /**
     * @param mixed $cap_ups_tr
     *
     * @return self
     */
    public function setCapUpsTr($cap_ups_tr)
    {
        $this->cap_ups_tr = $cap_ups_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLuminScMp()
    {
        return $this->lumin_sc_mp;
    }

    /**
     * @param mixed $lumin_sc_mp
     *
     * @return self
     */
    public function setLuminScMp($lumin_sc_mp)
    {
        $this->lumin_sc_mp = $lumin_sc_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortacfScMp()
    {
        return $this->portacf_sc_mp;
    }

    /**
     * @param mixed $portacf_sc_mp
     *
     * @return self
     */
    public function setPortacfScMp($portacf_sc_mp)
    {
        $this->portacf_sc_mp = $portacf_sc_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcessoScMp()
    {
        return $this->acesso_sc_mp;
    }

    /**
     * @param mixed $acesso_sc_mp
     *
     * @return self
     */
    public function setAcessoScMp($acesso_sc_mp)
    {
        $this->acesso_sc_mp = $acesso_sc_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeradoresMp()
    {
        return $this->geradores_mp;
    }

    /**
     * @param mixed $geradores_mp
     *
     * @return self
     */
    public function setGeradoresMp($geradores_mp)
    {
        $this->geradores_mp = $geradores_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeradoresSp()
    {
        return $this->geradores_sp;
    }

    /**
     * @param mixed $geradores_sp
     *
     * @return self
     */
    public function setGeradoresSp($geradores_sp)
    {
        $this->geradores_sp = $geradores_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgExtMp()
    {
        return $this->org_ext_mp;
    }

    /**
     * @param mixed $org_ext_mp
     *
     * @return self
     */
    public function setOrgExtMp($org_ext_mp)
    {
        $this->org_ext_mp = $org_ext_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgExtSp()
    {
        return $this->org_ext_sp;
    }

    /**
     * @param mixed $org_ext_sp
     *
     * @return self
     */
    public function setOrgExtSp($org_ext_sp)
    {
        $this->org_ext_sp = $org_ext_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgExtTr()
    {
        return $this->org_ext_tr;
    }

    /**
     * @param mixed $org_ext_tr
     *
     * @return self
     */
    public function setOrgExtTr($org_ext_tr)
    {
        $this->org_ext_tr = $org_ext_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZabbix()
    {
        return $this->zabbix;
    }

    /**
     * @param mixed $zabbix
     *
     * @return self
     */
    public function setZabbix($zabbix)
    {
        $this->zabbix = $zabbix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getObsMp()
    {
        return $this->obs_mp;
    }

    /**
     * @param mixed $obs_mp
     *
     * @return self
     */
    public function setObsMp($obs_mp)
    {
        $this->obs_mp = $obs_mp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getObsSp()
    {
        return $this->obs_sp;
    }

    /**
     * @param mixed $obs_sp
     *
     * @return self
     */
    public function setObsSp($obs_sp)
    {
        $this->obs_sp = $obs_sp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getObsTr()
    {
        return $this->obs_tr;
    }

    /**
     * @param mixed $obs_tr
     *
     * @return self
     */
    public function setObsTr($obs_tr)
    {
        $this->obs_tr = $obs_tr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChkCarro()
    {
        return $this->chk_carro;
    }

    /**
     * @param mixed $chk_carro
     *
     * @return self
     */
    public function setChkCarro($chk_carro)
    {
        $this->chk_carro = $chk_carro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChkSala()
    {
        return $this->chk_sala;
    }

    /**
     * @param mixed $chk_sala
     *
     * @return self
     */
    public function setChkSala($chk_sala)
    {
        $this->chk_sala = $chk_sala;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChkNot()
    {
        return $this->chk_not;
    }

    /**
     * @param mixed $chk_not
     *
     * @return self
     */
    public function setChkNot($chk_not)
    {
        $this->chk_not = $chk_not;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChkCel()
    {
        return $this->chk_cel;
    }

    /**
     * @param mixed $chk_cel
     *
     * @return self
     */
    public function setChkCel($chk_cel)
    {
        $this->chk_cel = $chk_cel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChkBatcel()
    {
        return $this->chk_batcel;
    }

    /**
     * @param mixed $chk_batcel
     *
     * @return self
     */
    public function setChkBatcel($chk_batcel)
    {
        $this->chk_batcel = $chk_batcel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getObsNpo()
    {
        return $this->obs_npo;
    }

    /**
     * @param mixed $obs_npo
     *
     * @return self
     */
    public function setObsNpo($obs_npo)
    {
        $this->obs_npo = $obs_npo;

        return $this;
    }

    public function getChecks($ini, $max){

        $inicio = $ini;
		$maximo = $max;
        $sql = "SELECT * FROM `checklists` ORDER BY `data` DESC, `turno` DESC LIMIT $inicio, $maximo"; //consulta no BD
		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		$array = array();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			return $array;
		}

		return $array;
    }
    
    public function getPesquisa($ini, $max, $pesquisa){

		$inicio = $ini;
		$maximo = $max;
		$param = $pesquisa;
		//$sql="SELECT * FROM acessos ORDER BY id DESC LIMIT $inicio, $maximo"; //consulta no BD
		$sql = "SELECT * FROM checklists WHERE id LIKE '%$param%' OR data LIKE '%$param%' OR turno LIKE '%$param%' OR obs_fca LIKE '%$param%' OR obs_sp LIKE '%$param%' OR obs_dr LIKE '%$param%' OR obs_tr LIKE '%$param%' OR obs_npo LIKE '%$param%' ORDER BY id DESC LIMIT $inicio, $maximo";
		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		$array = array();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			return $array;
		}

		return $array;

	}

	public function insertCheck($turno, $data, $operador_mp, $operador_sp, $operador_tr, $entrada_mp,
                                $saida_mp, $entrada_sp, $saida_sp, $entrada_tr, $saida_tr, $racks_mp,
                                $racks_sp, $racks_tr, $org_mp, $org_sp, $org_tr, $lumin_mp, $lumin_sp,
                                $lumin_tr, $infra_mp, $infra_sp, $infra_tr, $acesso_mp, $acesso_sp,
                                $acesso_tr, $portacf_mp, $portacf_sp, $arc_mp, $arc_sp, $arc_tr,
                                $sist_extint_mp, $sist_extint_sp, $sist_extint_tr, $ledsaude_mp,
                                $temp01_mp, $humid01_mp, $temp01_sp, $humid01_sp, $temp02_mp,
                                $humid02_mp, $temp02_sp, $humid02_sp, $temp03_mp, $humid03_mp,
                                $temp03_sp, $humid03_sp, $cap_ups_tr, $lumin_sc_mp, $portacf_sc_mp,
                                $acesso_sc_mp, $geradores_mp, $geradores_sp, $org_ext_mp, $org_ext_sp,
                                $org_ext_tr, $zabbix, $obs_mp, $obs_sp, $obs_tr, $chk_carro, $chk_sala,
                                $chk_not, $chk_cel, $chk_batcel, $obs_npo, 
                                $operador_dr, $entrada_dr, $saida_dr, $racks_dr, $org_dr, $lumin_dr, $infra_dr,
                                $acesso_dr, $portacf_dr, $arc_dr, $sist_extint_dr, $ledsaude_dr, $temp_dr,
                                $humid_dr, $org_ext_dr, $obs_dr){

                                    //echo $infra_dr."<br>";
                                    //echo $obs_dr."<br>";
                                    //echo $saida_dr."<br>";
                                    //echo $ledsaude_dr."<br>"; exit();
     $this->turno = $turno;
     $this->data = $data;
     $this->operador_mp = $operador_mp;
     $this->operador_sp = $operador_sp;
     $this->operador_tr = $operador_tr;
     $this->entrada_mp = $entrada_mp;
     $this->saida_mp = $saida_mp;
     $this->entrada_sp = $entrada_sp;
     $this->saida_sp = $saida_sp;
     $this->entrada_tr = $entrada_tr;
     $this->saida_tr = $saida_tr;
     $this->racks_mp = $racks_mp;
     $this->racks_sp = $racks_sp;
     $this->racks_tr = $racks_tr;
     $this->org_mp = $org_mp;
     $this->org_sp = $org_sp;
     $this->org_tr = $org_tr;
     $this->lumin_mp = $lumin_mp;
     $this->lumin_sp = $lumin_sp;
     $this->lumin_tr = $lumin_tr;
     $this->infra_mp = $infra_mp;
     $this->infra_sp = $infra_sp;
     $this->infra_tr = $infra_tr;
     $this->acesso_mp = $acesso_mp;
     $this->acesso_sp = $acesso_sp;
     $this->acesso_tr = $acesso_tr;
     $this->portacf_mp = $portacf_mp;
     $this->portacf_sp = $portacf_sp;
     $this->arc_mp = $arc_mp;
     $this->arc_sp = $arc_sp;
     $this->arc_tr = $arc_tr;
     $this->sist_extint_mp = $sist_extint_mp;
     $this->sist_extint_sp = $sist_extint_sp;
     $this->sist_extint_tr = $sist_extint_tr;
     $this->ledsaude_mp = $ledsaude_mp;
     $this->temp01_mp = $temp01_mp;
     $this->humid01_mp = $humid01_mp;
     $this->temp01_sp = $temp01_sp;
     $this->humid01_sp = $humid01_sp;
     $this->temp02_mp = $temp02_mp;
     $this->humid02_mp = $humid02_mp;
     $this->temp02_sp = $temp02_sp;
     $this->humid02_sp = $humid02_sp;
     $this->temp03_mp = $temp03_mp;
     $this->humid03_mp = $humid03_mp;
     $this->temp03_sp = $temp03_sp;
     $this->humid03_sp = $humid03_sp;
     $this->cap_ups_tr = $cap_ups_tr;
     $this->lumin_sc_mp = $lumin_sc_mp;
     $this->portacf_sc_mp = $portacf_sc_mp;
     $this->acesso_sc_mp = $acesso_sc_mp;
     $this->geradores_mp = $geradores_mp;
     $this->geradores_sp = $geradores_sp;
     $this->org_ext_mp = $org_ext_mp;
     $this->org_ext_sp = $org_ext_sp;
     $this->org_ext_tr = $org_ext_tr;
     $this->zabbix = $zabbix;
     $this->obs_mp = $obs_mp;
     $this->obs_sp = $obs_sp;
     $this->obs_tr =$obs_tr;
     $this->chk_carro = $chk_carro;
     $this->chk_sala = $chk_sala;
     $this->chk_not = $chk_not;
     $this->chk_cel = $chk_cel;
     $this->chk_batcel = $chk_batcel;
     $this->obs_npo = $obs_npo;
     $this->operador_dr = $operador_dr; /**Início DR */
     $this->entrada_dr = $entrada_dr;
     $this->saida_dr = $saida_dr;
     $this->racks_dr = $racks_dr;
     $this->org_dr = $org_dr;
     $this->lumin_dr = $lumin_dr;
     $this->infra_dr = $infra_dr;
     $this->acesso_dr = $acesso_dr;
     $this->portacf_dr = $portacf_dr;
     $this->arc_dr = $arc_dr;
     $this->sist_extint_dr = $sist_extint_dr;
     $this->ledsaude_dr = $ledsaude_dr;
     $this->temp_dr = $temp_dr;
     $this->humid_dr = $humid_dr;
     $this->org_ext_dr = $org_ext_dr;
     $this->obs_dr = $obs_dr;

     /*
	$sql = "INSERT INTO `checklists` (`turno`, `data`, `operador_mp`, `operador_sp`, `operador_tr`, `entrada_mp`, `saida_mp`, `entrada_sp`, `saida_sp`, `entrada_tr`, `saida_tr`, `racks_mp`, `racks_sp`, `racks_tr`, `org_mp`, `org_sp`, `org_tr`, `lumin_mp`, `lumin_sp`, `lumin_tr`, `infra_mp`, `infra_sp`, `infra_tr`, `acesso_mp`, `acesso_sp`, `acesso_tr`, `portacf_mp`, `portacf_sp`, `arc_mp`, `arc_sp`, `arc_tr`, `sist_extint_mp`, `sist_extint_sp`, `sist_extint_tr`, `ledsaude_mp`, `temp01_mp`, `humid01_mp`, `temp02_mp`, `humid02_mp`, `temp03_mp`, `humid03_mp`, `temp01_sp`, `humid01_sp`, `temp02_sp`, `humid02_sp`, `temp03_sp`, `humid03_sp`, `cap_ups_tr`, `lumin_sc_mp`, `portacf_sc_mp`, `acesso_sc_mp`, `geradores_mp`, `geradores_sp`, `org_ext_mp`, `org_ext_sp`, `org_ext_tr`, `zabbix`, `obs_mp`, `obs_sp`, `obs_tr`, `chk_carro`, `chk_sala`, `chk_not`, `chk_cel`, `chk_batcel`, `obs_npo`,
    `operador_dr`, `entrada_dr`, `saida_dr`, `racks_dr`, `org_dr`, `lumin_dr`, `infra_dr`, `acesso_dr`, `portacf_dr`, `arc_dr`,
    `sist_extint_dr`, `ledsaude_dr`, `temp_dr`, `humid_dr`, `org_ext_dr`, `obs_dr`) VALUES (
        '$this->turno',
        '$this->data',
        '$this->operador_mp',
        '$this->operador_sp',
        '$this->operador_tr',
        '$this->entrada_mp',
        '$this->saida_mp',
        '$this->entrada_sp',
        '$this->saida_sp',
        '$this->entrada_tr',
        '$this->saida_tr',
        '$this->racks_mp',
        '$this->racks_sp',
        '$this->racks_tr',
        '$this->org_mp',
        '$this->org_sp',
        '$this->org_tr',
        '$this->lumin_mp',
        '$this->lumin_sp',
        '$this->lumin_tr',
        '$this->infra_mp',
        '$this->infra_sp',
        '$this->infra_tr',
        '$this->acesso_mp',
        '$this->acesso_sp',
        '$this->acesso_tr',
        '$this->portacf_mp',
        '$this->portacf_sp',
        '$this->arc_mp',
        '$this->arc_sp',
        '$this->arc_tr',
        '$this->sist_extint_mp',
        '$this->sist_extint_sp',
        '$this->sist_extint_tr',
        '$this->ledsaude_mp',
        '$this->temp01_mp',
        '$this->humid01_mp',
        '$this->temp01_sp',
        '$this->humid01_sp',
        '$this->temp02_mp',
        '$this->humid02_mp',
        '$this->temp02_sp',
        '$this->humid02_sp',
        '$this->temp03_mp',
        '$this->humid03_mp',
        '$this->temp03_sp',
        '$this->humid03_sp',
        '$this->cap_ups_tr',
        '$this->lumin_sc_mp',
        '$this->portacf_sc_mp',
        '$this->acesso_sc_mp',
        '$this->geradores_mp',
        '$this->geradores_sp',
        '$this->org_ext_mp',
        '$this->org_ext_sp',
        '$this->org_ext_tr',
        '$this->zabbix',
        '$this->obs_mp',
        '$this->obs_sp',
        '$this->obs_tr',
        '$this->chk_carro',
        '$this->chk_sala',
        '$this->chk_not',
        '$this->chk_cel',
        '$this->chk_batcel',
        '$this->obs_npo',
        '$this->operador_dr',
        '$this->entrada_dr',
        '$this->saida_dr',
        '$this->racks_dr',
        '$this->org_dr',
        '$this->lumin_dr',
        '$this->infra_dr',
        '$this->acesso_dr',
        '$this->portacf_dr',
        '$this->arc_dr',
        '$this->sist_extint_dr',
        '$this->ledsaude_dr',
        '$this->temp_dr',
        '$this->humid_dr',
        '$this->org_ext_dr',
        '$this->obs_dr')";
        */

                                   /*
                                    echo $this->operador_dr."<br>";
                                    echo $this->entrada_dr."<br>";
                                    echo $this->saida_dr."<br>";
                                    echo $this->racks_dr."<br>";
                                    echo $this->org_dr."<br>";
                                    echo $this->lumin_dr."<br>";
                                    echo $this->infra_dr."<br>";
                                    echo $this->acesso_dr."<br>";
                                    echo $this->portacf_dr."<br>";
                                    echo $this->arc_dr."<br>";
                                    echo $this->sist_extint_dr."<br>";
                                    echo $this->ledsaude_dr."<br>";
                                    echo $this->temp_dr."<br>";
                                    echo $this->humid_dr."<br>";
                                    echo $this->org_ext_dr."<br>";
                                    echo $this->obs_dr."<br>"; exit();
                                    */
        /** Novos testes */

        $sql = "INSERT INTO checklists (turno, data, operador_mp, operador_sp, operador_dr, operador_tr,
        entrada_mp, saida_mp, entrada_sp, saida_sp, entrada_dr, saida_dr, entrada_tr, saida_tr, racks_mp,
        racks_sp, racks_dr, racks_tr, org_mp, org_sp, org_dr, org_tr, lumin_mp, lumin_sp, lumin_dr,
        lumin_tr, infra_mp, infra_sp, infra_dr, infra_tr, acesso_mp, acesso_sp, acesso_dr, acesso_tr,
        portacf_mp, portacf_sp, portacf_dr, arc_mp, arc_sp, arc_dr, arc_tr, sist_extint_mp, sist_extint_sp,
        sist_extint_dr, sist_extint_tr, ledsaude_mp, ledsaude_dr, temp01_mp, humid01_mp, temp02_mp,
        humid02_mp, temp03_mp, humid03_mp, temp01_sp, humid01_sp, temp02_sp, humid02_sp, temp03_sp,
        humid03_sp, temp_dr, humid_dr, cap_ups_tr, lumin_sc_mp, portacf_sc_mp, acesso_sc_mp, geradores_mp,
        geradores_sp, org_ext_mp, org_ext_sp, org_ext_dr, org_ext_tr, zabbix, obs_mp, obs_sp, obs_dr,
        obs_tr, chk_carro, chk_sala, chk_not, chk_cel, chk_batcel, obs_npo) VALUES ('$this->turno', '$this->data',
        '$this->operador_mp', '$this->operador_sp', '$this->operador_dr', '$this->operador_tr', '$this->entrada_mp',
        '$this->saida_mp', '$this->entrada_sp', '$this->saida_sp', '$this->entrada_dr', '$this->saida_dr', '$this->entrada_tr',
        '$this->saida_tr', '$this->racks_mp', '$this->racks_sp', '$this->racks_dr', '$this->racks_tr', '$this->org_mp',
        '$this->org_sp', '$this->org_dr', '$this->org_tr', '$this->lumin_mp', '$this->lumin_sp', '$this->lumin_dr',
        '$this->lumin_tr', '$this->infra_mp', '$this->infra_sp', '$this->infra_dr', '$this->infra_tr', '$this->acesso_mp',
        '$this->acesso_sp', '$this->acesso_dr', '$this->acesso_tr', '$this->portacf_mp', '$this->portacf_sp', '$this->portacf_dr',
        '$this->arc_mp', '$this->arc_sp', '$this->arc_dr', '$this->arc_tr', '$this->sist_extint_mp', '$this->sist_extint_sp',
        '$this->sist_extint_dr', '$this->sist_extint_tr', '$this->ledsaude_mp', '$this->ledsaude_dr', '$this->temp01_mp',
        '$this->humid01_mp', '$this->temp02_mp', '$this->humid02_mp', '$this->temp03_mp', '$this->humid03_mp',
        '$this->temp01_sp', '$this->humid01_sp', '$this->temp02_sp', '$this->humid02_sp', '$this->temp03_sp',
        '$this->humid03_sp', '$this->temp_dr', '$this->humid_dr', '$this->cap_ups_tr', '$this->lumin_sc_mp',
        '$this->portacf_sc_mp', '$this->acesso_sc_mp', '$this->geradores_mp', '$this->geradores_sp', '$this->org_ext_mp',
        '$this->org_ext_sp', '$this->org_ext_dr', '$this->org_ext_tr', '$this->zabbix', '$this->obs_mp', '$this->obs_sp',
        '$this->obs_dr', '$this->obs_tr', '$this->chk_carro', '$this->chk_sala', '$this->chk_not', '$this->chk_cel',
        '$this->chk_batcel', '$this->obs_npo')";

        /** END Novos testes */

        $sql = $this->pdo->prepare($sql);
        $sql->execute();

        return true;
	}

    public function editCheck($i, $turno, $data, $operador_mp, $operador_sp, $operador_tr, $entrada_mp,
                                $saida_mp, $entrada_sp, $saida_sp, $entrada_tr, $saida_tr, $racks_mp,
                                $racks_sp, $racks_tr, $org_mp, $org_sp, $org_tr, $lumin_mp, $lumin_sp,
                                $lumin_tr, $infra_mp, $infra_sp, $infra_tr, $acesso_mp, $acesso_sp,
                                $acesso_tr, $portacf_mp, $portacf_sp, $arc_mp, $arc_sp, $arc_tr,
                                $sist_extint_mp, $sist_extint_sp, $sist_extint_tr, $ledsaude_mp,
                                $temp01_mp, $humid01_mp, $temp01_sp, $humid01_sp, $temp02_mp,
                                $humid02_mp, $temp02_sp, $humid02_sp, $temp03_mp, $humid03_mp,
                                $temp03_sp, $humid03_sp, $cap_ups_tr, $lumin_sc_mp, $portacf_sc_mp,
                                $acesso_sc_mp, $geradores_mp, $geradores_sp, $org_ext_mp, $org_ext_sp,
                                $org_ext_tr, $zabbix, $obs_mp, $obs_sp, $obs_tr, $chk_carro, $chk_sala,
                                $chk_not, $chk_cel, $chk_batcel, $obs_npo,
                                $operador_dr, $entrada_dr, $saida_dr, $racks_dr, $org_dr, $lumin_dr, $infra_dr,
                                $acesso_dr, $portacf_dr, $arc_dr, $sist_extint_dr, $ledsaude_dr, $temp_dr,
                                $humid_dr, $org_ext_dr, $obs_dr){

     $this->id = $i;
     $this->turno = $turno;
     $this->data = $data;
     $this->operador_mp = $operador_mp;
     $this->operador_sp = $operador_sp;
     $this->operador_tr = $operador_tr;
     $this->entrada_mp = $entrada_mp;
     $this->saida_mp = $saida_mp;
     $this->entrada_sp = $entrada_sp;
     $this->saida_sp = $saida_sp;
     $this->entrada_tr = $entrada_tr;
     $this->saida_tr = $saida_tr;
     $this->racks_mp = $racks_mp;
     $this->racks_sp = $racks_sp;
     $this->racks_tr = $racks_tr;
     $this->org_mp = $org_mp;
     $this->org_sp = $org_sp;
     $this->org_tr = $org_tr;
     $this->lumin_mp = $lumin_mp;
     $this->lumin_sp = $lumin_sp;
     $this->lumin_tr = $lumin_tr;
     $this->infra_mp = $infra_mp;
     $this->infra_sp = $infra_sp;
     $this->infra_tr = $infra_tr;
     $this->acesso_mp = $acesso_mp;
     $this->acesso_sp = $acesso_sp;
     $this->acesso_tr = $acesso_tr;
     $this->portacf_mp = $portacf_mp;
     $this->portacf_sp = $portacf_sp;
     $this->arc_mp = $arc_mp;
     $this->arc_sp = $arc_sp;
     $this->arc_tr = $arc_tr;
     $this->sist_extint_mp = $sist_extint_mp;
     $this->sist_extint_sp = $sist_extint_sp;
     $this->sist_extint_tr = $sist_extint_tr;
     $this->ledsaude_mp = $ledsaude_mp;
     $this->temp01_mp = $temp01_mp;
     $this->humid01_mp = $humid01_mp;
     $this->temp01_sp = $temp01_sp;
     $this->humid01_sp = $humid01_sp;
     $this->temp02_mp = $temp02_mp;
     $this->humid02_mp = $humid02_mp;
     $this->temp02_sp = $temp02_sp;
     $this->humid02_sp = $humid02_sp;
     $this->temp03_mp = $temp03_mp;
     $this->humid03_mp = $humid03_mp;
     $this->temp03_sp = $temp03_sp;
     $this->humid03_sp = $humid03_sp;
     $this->cap_ups_tr = $cap_ups_tr;
     $this->lumin_sc_mp = $lumin_sc_mp;
     $this->portacf_sc_mp = $portacf_sc_mp;
     $this->acesso_sc_mp = $acesso_sc_mp;
     $this->geradores_mp = $geradores_mp;
     $this->geradores_sp = $geradores_sp;
     $this->org_ext_mp = $org_ext_mp;
     $this->org_ext_sp = $org_ext_sp;
     $this->org_ext_tr = $org_ext_tr;
     $this->zabbix = $zabbix;
     $this->obs_mp = $obs_mp;
     $this->obs_sp = $obs_sp;
     $this->obs_tr =$obs_tr;
     $this->chk_carro = $chk_carro;
     $this->chk_sala = $chk_sala;
     $this->chk_not = $chk_not;
     $this->chk_cel = $chk_cel;
     $this->chk_batcel = $chk_batcel;
     $this->obs_npo = $obs_npo;
     $this->operador_dr = $operador_dr; /**Início DR */
     $this->entrada_dr = $entrada_dr;
     $this->saida_dr = $saida_dr;
     $this->racks_dr = $racks_dr;
     $this->org_dr = $org_dr;
     $this->lumin_dr = $lumin_dr;
     $this->infra_dr = $infra_dr;
     $this->acesso_dr = $acesso_dr;
     $this->portacf_dr = $portacf_dr;
     $this->arc_dr = $arc_dr;
     $this->sist_extint_dr = $sist_extint_dr;
     $this->ledsaude_dr = $ledsaude_dr;
     $this->temp_dr = $temp_dr;
     $this->humid_dr = $humid_dr;
     $this->org_ext_dr = $org_ext_dr;
     $this->obs_dr = $obs_dr;
                                    /*
                                    echo $this->operador_dr."<br>";
                                    echo $this->entrada_dr."<br>";
                                    echo $this->saida_dr."<br>";
                                    echo $this->racks_dr."<br>";
                                    echo $this->org_dr."<br>";
                                    echo $this->lumin_dr."<br>";
                                    echo $this->infra_dr."<br>";
                                    echo $this->acesso_dr."<br>";
                                    echo $this->portacf_dr."<br>";
                                    echo $this->arc_dr."<br>";
                                    echo $this->sist_extint_dr."<br>";
                                    echo $this->ledsaude_dr."<br>";
                                    echo $this->temp_dr."<br>";
                                    echo $this->humid_dr."<br>";
                                    echo $this->org_ext_dr."<br>";
                                    echo $this->obs_dr."<br>"; exit();
                                    */


     //$sql = "UPDATE `checklists` SET id = '$this->id', turno = '$this->turno', data = '$this->data', operador_mp = '$this->operador_mp', operador_sp = '$this->operador_sp', operador_tr = '$this->operador_tr', entrada_mp = '$this->entrada_mp', saida_mp = '$this->saida_mp', entrada_sp = '$this->entrada_sp', saida_sp = '$this->saida_sp', entrada_tr = '$this->entrada_tr', saida_tr = '$this->saida_tr', racks_mp = '$this->racks_mp', racks_sp = '$this->racks_sp', racks_tr = '$this->racks_tr', org_mp = '$this->org_mp', org_sp = '$this->org_sp', org_tr = '$this->org_tr', lumin_mp = '$this->lumin_mp', lumin_sp = '$this->lumin_sp', lumin_tr = '$this->lumin_tr', infra_mp = '$this->infra_mp', infra_sp = '$this->infra_sp', infra_tr = '$this->infra_tr', acesso_mp = '$this->acesso_mp', acesso_sp = '$this->acesso_sp', acesso_tr = '$this->acesso_tr', portacf_mp = '$this->portacf_mp', portacf_sp = '$this->portacf_sp', arc_mp = '$this->arc_mp', arc_sp = '$this->arc_sp', arc_tr = '$this->arc_tr', sist_extint_mp = '$this->sist_extint_mp', sist_extint_sp = '$this->sist_extint_sp', sist_extint_tr = '$this->sist_extint_tr', ledsaude_mp = '$this->ledsaude_mp', temp01_mp = '$this->temp01_mp', humid01_mp = '$this->humid01_mp', temp02_mp = '$this->temp02_mp', humid02_mp = '$this->humid02_mp', temp03_mp = '$this->temp03_mp', humid03_mp = '$this->humid03_mp', temp01_sp = '$this->temp01_sp', humid01_sp = '$this->humid01_sp', temp02_sp = '$this->temp02_sp', humid02_sp = '$this->humid02_sp', temp03_sp = '$this->temp03_sp', humid03_sp = '$this->humid03_sp', cap_ups_tr = '$this->cap_ups_tr', lumin_sc_mp = '$this->lumin_sc_mp', portacf_sc_mp = '$this->portacf_sc_mp', acesso_sc_mp = '$this->acesso_sc_mp', geradores_mp = '$this->geradores_mp', geradores_sp = '$this->geradores_sp', org_ext_mp = '$this->org_ext_mp', org_ext_sp = '$this->org_ext_sp', org_ext_tr = '$this->org_ext_tr', zabbix = '$this->zabbix', obs_mp = '$this->obs_mp', obs_sp = '$this->obs_sp', obs_tr = '$this->obs_tr', chk_carro = '$this->chk_carro', chk_sala = '$this->chk_sala', chk_not = '$this->chk_not', chk_cel = '$this->chk_cel', chk_batcel = '$this->chk_batcel', obs_npo = '$this->obs_npo' WHERE id = '$this->id'";
     //$sql = "UPDATE `checklists` SET turno = '$this->turno', data = '$this->data', operador_mp = '$this->operador_mp', operador_sp = '$this->operador_sp', operador_tr = '$this->operador_tr', entrada_mp = '$this->entrada_mp', saida_mp = '$this->saida_mp', entrada_sp = '$this->entrada_sp', saida_sp = '$this->saida_sp', entrada_tr = '$this->entrada_tr', saida_tr = '$this->saida_tr', racks_mp = '$this->racks_mp', racks_sp = '$this->racks_sp', racks_tr = '$this->racks_tr', org_mp = '$this->org_mp', org_sp = '$this->org_sp', org_tr = '$this->org_tr', lumin_mp = '$this->lumin_mp', lumin_sp = '$this->lumin_sp', lumin_tr = '$this->lumin_tr', infra_mp = '$this->infra_mp', infra_sp = '$this->infra_sp', infra_tr = '$this->infra_tr', acesso_mp = '$this->acesso_mp', acesso_sp = '$this->acesso_sp', acesso_tr = '$this->acesso_tr', portacf_mp = '$this->portacf_mp', portacf_sp = '$this->portacf_sp', arc_mp = '$this->arc_mp', arc_sp = '$this->arc_sp', arc_tr = '$this->arc_tr', sist_extint_mp = '$this->sist_extint_mp', sist_extint_sp = '$this->sist_extint_sp', sist_extint_tr = '$this->sist_extint_tr', ledsaude_mp = '$this->ledsaude_mp', temp01_mp = '$this->temp01_mp', humid01_mp = '$this->humid01_mp', temp02_mp = '$this->temp02_mp', humid02_mp = '$this->humid02_mp', temp03_mp = '$this->temp03_mp', humid03_mp = '$this->humid03_mp', temp01_sp = '$this->temp01_sp', humid01_sp = '$this->humid01_sp', temp02_sp = '$this->temp02_sp', humid02_sp = '$this->humid02_sp', temp03_sp = '$this->temp03_sp', humid03_sp = '$this->humid03_sp', cap_ups_tr = '$this->cap_ups_tr', lumin_sc_mp = '$this->lumin_sc_mp', portacf_sc_mp = '$this->portacf_sc_mp', acesso_sc_mp = '$this->acesso_sc_mp', geradores_mp = '$this->geradores_mp', geradores_sp = '$this->geradores_sp', org_ext_mp = '$this->org_ext_mp', org_ext_sp = '$this->org_ext_sp', org_ext_tr = '$this->org_ext_tr', zabbix = '$this->zabbix', obs_mp = '$this->obs_mp', obs_sp = '$this->obs_sp', obs_tr = '$this->obs_tr', chk_carro = '$this->chk_carro', chk_sala = '$this->chk_sala', chk_not = '$this->chk_not', chk_cel = '$this->chk_cel', chk_batcel = '$this->chk_batcel', obs_npo = '$this->obs_npo' WHERE id = '$this->id'";
    
    $sql = "UPDATE
     `checklists`
    SET
     turno = '$this->turno',
     data = '$this->data',
     operador_mp = '$this->operador_mp',
     operador_sp = '$this->operador_sp',
     operador_dr = '$this->operador_dr',
     operador_tr = '$this->operador_tr',
     entrada_mp = '$this->entrada_mp',
     saida_mp = '$this->saida_mp',
     entrada_sp = '$this->entrada_sp',
     saida_sp = '$this->saida_sp',
     entrada_dr = '$this->entrada_dr',
     saida_dr = '$this->saida_dr',
     entrada_tr = '$this->entrada_tr',
     saida_tr = '$this->saida_tr',
     racks_mp = '$this->racks_mp',
     racks_sp = '$this->racks_sp',
     racks_dr = '$this->racks_dr',
     racks_tr = '$this->racks_tr',
     org_mp = '$this->org_mp',
     org_sp = '$this->org_sp',
     org_dr = '$this->org_dr',
     org_tr = '$this->org_tr',
     lumin_mp = '$this->lumin_mp',
     lumin_sp = '$this->lumin_sp',
     lumin_dr = '$this->lumin_dr',
     lumin_tr = '$this->lumin_tr',
     infra_mp = '$this->infra_mp',
     infra_sp = '$this->infra_sp',
     infra_dr = '$this->infra_dr',
     infra_tr = '$this->infra_tr',
     acesso_mp = '$this->acesso_mp',
     acesso_sp = '$this->acesso_sp',
     acesso_dr = '$this->acesso_dr',
     acesso_tr = '$this->acesso_tr',
     portacf_mp = '$this->portacf_mp',
     portacf_sp = '$this->portacf_sp',
     portacf_dr = '$this->portacf_dr',
     arc_mp = '$this->arc_mp',
     arc_sp = '$this->arc_sp',
     arc_dr = '$this->arc_dr',
     arc_tr = '$this->arc_tr',
     sist_extint_mp = '$this->sist_extint_mp',
     sist_extint_sp = '$this->sist_extint_sp',
     sist_extint_dr = '$this->sist_extint_dr',
     sist_extint_tr = '$this->sist_extint_tr',
     ledsaude_mp = '$this->ledsaude_mp',
     ledsaude_dr = '$this->ledsaude_dr',
     temp01_mp = '$this->temp01_mp',
     humid01_mp = '$this->humid01_mp',
     temp02_mp = '$this->temp02_mp',
     humid02_mp = '$this->humid02_mp',
     temp03_mp = '$this->temp03_mp',
     humid03_mp = '$this->humid03_mp',
     temp01_sp = '$this->temp01_sp',
     humid01_sp = '$this->humid01_sp',
     temp02_sp = '$this->temp02_sp',
     humid02_sp = '$this->humid02_sp',
     temp03_sp = '$this->temp03_sp',
     humid03_sp = '$this->humid03_sp',
     temp_dr = '$this->temp_dr',
     humid_dr = '$this->humid_dr',
     cap_ups_tr = '$this->cap_ups_tr',
     lumin_sc_mp = '$this->lumin_sc_mp',
     portacf_sc_mp = '$this->portacf_sc_mp',
     acesso_sc_mp = '$this->acesso_sc_mp',
     geradores_mp = '$this->geradores_mp',
     geradores_sp = '$this->geradores_sp',
     org_ext_mp = '$this->org_ext_mp',
     org_ext_sp = '$this->org_ext_sp',
     org_ext_dr = '$this->org_ext_dr',
     org_ext_tr = '$this->org_ext_tr',
     zabbix = '$this->zabbix',
     obs_mp = '$this->obs_mp',
     obs_sp = '$this->obs_sp',
     obs_dr = '$this->obs_dr',
     obs_tr = '$this->obs_tr',
     chk_carro = '$this->chk_carro',
     chk_sala = '$this->chk_sala',
     chk_not = '$this->chk_not',
     chk_cel = '$this->chk_cel',
     chk_batcel = '$this->chk_batcel',
     obs_npo = '$this->obs_npo'
    WHERE
     id = '$this->id'";

    $sql = $this->pdo->prepare($sql);
    $sql->execute();

    return true;

    }

    public function getLastReg(){

        $sql = "SELECT * FROM checklists ORDER BY id DESC limit 1";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();

        $array = array();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

            return $array;
        }

        return $array;
    }
    public function getCheck($i){
        $id = $i;
        $sql = "SELECT * FROM checklists WHERE id  = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $i);
        $sql->execute();

        $array = array();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

            return $array;
        }

        return $array;
    }
}

