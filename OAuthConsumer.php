<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 11.04.14 at 10:05
 */
 namespace samson\social\oauth;

/**
 *
 * @author Vitaly Egorov <egorov@samsonos.com>
 * @copyright 2013 SamsonOS
 * @version 
 */
class OAuthConsumer
{
     public $key;
     public $secret;

     function __construct($key, $secret, $callback_url=NULL) {
         $this->key = $key;
         $this->secret = $secret;
         $this->callback_url = $callback_url;
     }

     function __toString() {
         return "OAuthConsumer[key=$this->key,secret=$this->secret]";
     }
 }
 