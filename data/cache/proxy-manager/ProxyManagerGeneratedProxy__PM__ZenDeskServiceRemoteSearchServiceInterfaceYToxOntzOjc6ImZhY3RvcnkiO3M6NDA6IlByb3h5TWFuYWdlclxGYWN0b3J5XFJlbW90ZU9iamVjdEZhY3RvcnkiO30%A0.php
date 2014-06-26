<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\SearchServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\SearchServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abddf13b288334575821 = null;

    /**
     * @rest\http GET
     * @rest\uri /search?query=type:user+%query
     * @param  int                    $query
     * @return \ZenDesk\Entity\User[]
     */
    public function users($query)
    {
        $return = $this->adapter53abddf13b288334575821->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', 'users', array($query));

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
        $return = $this->adapter53abddf13b288334575821->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', 'tickets', array($query));

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abddf13b288334575821)
    {
        $this->adapter53abddf13b288334575821 = $adapter53abddf13b288334575821;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abddf13b288334575821->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abddf13b288334575821->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abddf13b288334575821->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abddf13b288334575821->call('ZenDesk\\Service\\Remote\\SearchServiceInterface', '__unset', array($name));

        return $return;
    }


}
