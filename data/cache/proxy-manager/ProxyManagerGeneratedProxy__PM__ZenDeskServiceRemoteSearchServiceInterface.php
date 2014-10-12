<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class SearchServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\SearchServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a631d3b8d1917920200 = null;

    /**
     * @rest\http GET
     * @rest\uri /search?query=type:user+%query
     * @param  int                    $query
     * @return \ZenDesk\Entity\User[]
     */
    public function users($query)
    {
        $return = $this->adapter543a631d3b8d1917920200->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', 'users', array($query));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /search?query=type:ticket+%query
     * @param  int                      $query
     * @return \ZenDesk\Entity\Ticket[]
     */
    public function tickets($query)
    {
        $return = $this->adapter543a631d3b8d1917920200->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', 'tickets', array($query));

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a631d3b8d1917920200)
    {
        $this->adapter543a631d3b8d1917920200 = $adapter543a631d3b8d1917920200;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a631d3b8d1917920200->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a631d3b8d1917920200->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a631d3b8d1917920200->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a631d3b8d1917920200->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__unset', array($name));

        return $return;
    }


}
