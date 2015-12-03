<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageLoader
 *
 * @author Tangtang
 */
class LanguageLoader {
    //put your code here
    
    function initialize(){
        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->load->library('session');
        
        $session = $ci->session;
        
        $site_lang = ($session->userdata('site_lang')) ? $session->userdata('site_lang')
                    : 'italian';
        $this->loadLanguage($ci->lang,$site_lang);
    }
    
    function loadLanguage($lang, $language){
        //User Language
        $lang->load('message',$language);
        $lang->load('standard',$language);
        
        //System Languages
        $lang->load('calendar',$language);
        $lang->load('date',$language);
        $lang->load('db',$language);
        $lang->load('email',$language);
        $lang->load('form_validation',$language);
        $lang->load('number',$language);
        $lang->load('upload',$language);
    }
    
    
}
