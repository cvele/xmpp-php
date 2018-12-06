<?php

namespace Norgul\Xmpp;

class Options
{
    /**
     * Hostname of XMPP server
     */
    protected $host;
    /**
     * XMPP server port. Usually 5222
     */
    protected $port = 5222;
    /**
     * Username to authenticate on XMPP server
     */
    protected $username;
    /**
     * Password to authenticate on XMPP server
     */
    protected $password;

    public function getHost()
    {
        if(!$this->host)
            echo "No host found, please set the host variable ";
        return $this->host;
    }

    public function setHost($host): Options
    {
        $this->host = $host;
        return $this;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port): Options
    {
        $this->port = $port;
        return $this;
    }

    public function getUsername()
    {
        if(!$this->username)
            echo "No username found, please set the username variable ";
        return $this->username;
    }

    public function setUsername($username): Options
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        if(!$this->host)
            echo "No password found, please set the password variable ";
        return $this->password;
    }

    public function setPassword($password): Options
    {
        $this->password = $password;
        return $this;
    }


}