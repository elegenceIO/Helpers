<?php

if(!function_exists("config"))
{
   function config(?string $name=null)
   {
        $parts = explode(".",$name,2);
        $section = $parts[0];
        $key = $parts[1] ?? null;
        if(!app()->has("config"))
        {
            throw new \Exception("Config cannot be found");
        }        

        
        $config = app("config");
        return $config->load($name);
        // return (!is_null($key))? ($config[$key] ?? null) : $config;

   }

}