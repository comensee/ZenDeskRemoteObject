<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\TagServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\TagServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc9a93ebc690854011 = null;

    /**
     * @rest\http GET
     * @rest\uri /tags
     * @return \ZenDesk\Entity\Tag[]
     */
    public function getAll()
    {
        $return = $this->adapter53abdc9a93ebc690854011->call('ZenDesk\\Service\\Remote\\TagServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc9a93ebc690854011)
    {
        $this->adapter53abdc9a93ebc690854011 = $adapter53abdc9a93ebc690854011;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc9a93ebc690854011->call('ZenDesk\\Service\\Remote\\TagServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc9a93ebc690854011->call('ZenDesk\\Service\\Remote\\TagServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc9a93ebc690854011->call('ZenDesk\\Service\\Remote\\TagServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc9a93ebc690854011->call('ZenDesk\\Service\\Remote\\TagServiceInterface', '__unset', array($name));

        return $return;
    }


}
