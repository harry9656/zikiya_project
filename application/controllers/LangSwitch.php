<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LangSwitch
 *
 * @author Tangtang
 */
class LangSwitch extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}
