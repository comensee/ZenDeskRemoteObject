<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class AgentServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\AgentServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a63021ab12598942725 = null;

    /**
     * @rest\http GET
     * @rest\uri /users/%user/tickets/requested
     * @param  Agent                    $user
     * @return \ZenDesk\Entity\Ticket[]
     */
    public function getTickets(\ZenDesk\Entity\Agent $user)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'getTickets', array($user));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /users/search?query=%query
     * @param  string                 $query
     * @return \ZenDesk\Entity\User[]
     */
    public function search($query)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'search', array($query));

        return $return;
    }

    /**
     * @rest\http POST
     * @rest\uri /users/autocomplete
     * @param  string                 $name
     * @return \ZenDesk\Entity\User[]
     */
    public function autocomplete($name)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'autocomplete', array($name));

        return $return;
    }

    /**
     * @rest\http POST
     * @rest\uri /users
     * @param  User                 $user
     * @return \ZenDesk\Entity\User
     */
    public function persist(\ZenDesk\Entity\User $user)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'persist', array($user));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /users/%user
     * @param  User                 $user
     * @return \ZenDesk\Entity\User
     */
    public function save(\ZenDesk\Entity\User $user)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'save', array($user));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /users/%user
     * @param  User                 $user
     * @return \ZenDesk\Entity\User
     */
    public function delete(\ZenDesk\Entity\User $user)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'delete', array($user));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /users/me
     * @return \ZenDesk\Entity\User
     */
    public function me()
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'me', array());

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /users/%user
     * @param  User                 $user
     * @return \ZenDesk\Entity\User
     */
    public function suspend(\ZenDesk\Entity\User $user)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'suspend', array($user));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /users/%id
     * @param  int                  $id
     * @return \ZenDesk\Entity\User
     */
    public function get($id)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /users
     * @return \ZenDesk\Entity\User[]
     */
    public function getAll()
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a63021ab12598942725)
    {
        $this->adapter543a63021ab12598942725 = $adapter543a63021ab12598942725;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a63021ab12598942725->call('ZenDesk\\Service\\Remote\\AgentServiceInterface', '__unset', array($name));

        return $return;
    }


}
