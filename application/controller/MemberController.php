<?php

namespace application\controller;

class MemberController extends Controller 
{
    public function joinGet()
    {
        return "join"._EXTENSION_PHP;
    }
    
    public function logoutGet()
    {
        session_unset();
        session_destroy();

        return "login"._EXTENSION_PHP;
    }
}
