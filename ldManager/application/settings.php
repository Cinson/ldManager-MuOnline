<?php  
/*
    @Class settings;
*/
class Settings {
    public function __construct($module = NULL)
    {
        switch($module)
        {
            case "license": $this->license(); return;
            case "mssqlLibMu": $this->mssqlLibMu(); return;
            case "mssqlLibManager": $this->mssqlLibManager(); return;    
            case "sessionLoad": $this->sessionLoad(); return;
            case "languageLoad": $this->languageLoad(); return;
            case "managerAccounts": $this->managerAccounts(); return;
        } 
    } 
    
    public function license()
    {
        define("countryPreference", 0x02); // Para Brasil 0x01, Estados Unidos da Am�rica 0x02
        define("autenticationCache", true); // Guarda a chave de seguran�a em cache para n�o fazer requisi��es a cada pagina acessada.
    }
    
    public function __toString()
    {
        return $this->sessionName;
    } 
    protected function sessionLoad()
    {
        $this->sessionName = "ldMuEditor";
    }    
    protected function languageLoad()
    {
        $this->languageDir      = "application/languages/";
        $this->languageDefault  = "pt_br";   
    }
    protected function mssqlLibManager()  //Configura��es de onde o SITE esta instalado
    {
        $this->mssqlLibDatabase  = "webSite";
        $this->mssqlLibHost      = "localhost";
        $this->mssqlLibUser      = "sa";
        $this->mssqlLibPassword  = "microsoft";
    }
    protected function mssqlLibMu()  //Configura��es de onde o JOGO esta instalado
    {
        $this->mssqlLibDatabase  = "MuOnline";
        $this->mssqlLibHost      = "localhost";
        $this->mssqlLibUser      = "sa";
        $this->mssqlLibPassword  = "microsoft";
    }
    protected function managerAccounts()
    {
        $this->vi_curr_info  = true; //Joinserver com sistema de idade, TRUE para sim, FALSE para nao
        $this->md5_encode    = true; //Servidor usa MD5
        $this->dbversion     = 3;    //1 = (Vers�es antigas sem personal store [97d]), 2 = (Vers�es antigas com personal store [1.0]), 3 = (Vers�es novas com personal store e harmony [1.02n ou acima]) 
    }
}
?>