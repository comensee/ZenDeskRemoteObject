<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\CommentServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\CommentServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc99e5d79155832073 = null;

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc99e5d79155832073)
    {
        $this->adapter53abdc99e5d79155832073 = $adapter53abdc99e5d79155832073;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc99e5d79155832073->call('ZenDesk\\Service\\Remote\\CommentServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc99e5d79155832073->call('ZenDesk\\Service\\Remote\\CommentServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc99e5d79155832073->call('ZenDesk\\Service\\Remote\\CommentServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc99e5d79155832073->call('ZenDesk\\Service\\Remote\\CommentServiceInterface', '__unset', array($name));

        return $return;
    }


}
