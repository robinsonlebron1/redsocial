<?php
/*redireccionamiento*/;




function redirection($url) 
{
    header('location:' . URL_PROJECT . $url);
}