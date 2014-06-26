<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\MacroServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\MacroServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc9814ccb053088380 = null;

    /**
     * @rest\http POST
     * @rest\uri /macros
     * @param  Macro                 $macro
     * @return \ZenDesk\Entity\Macro
     */
    public function persist(\ZenDesk\Entity\Macro $macro)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', 'persist', array($macro));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /macros/%macro
     * @param  Macro                 $macro
     * @return \ZenDesk\Entity\Macro
     */
    public function save(\ZenDesk\Entity\Macro $macro)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', 'save', array($macro));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /macros/%macro
     * @param Macro $macro
     */
    public function delete(\ZenDesk\Entity\Macro $macro)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', 'delete', array($macro));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /macros/%id
     * @param  int                   $id
     * @return \ZenDesk\Entity\Macro
     */
    public function get($id)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /macros
     * @return \ZenDesk\Entity\Macro[]
     */
    public function getAll()
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc9814ccb053088380)
    {
        $this->adapter53abdc9814ccb053088380 = $adapter53abdc9814ccb053088380;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc9814ccb053088380->call('ZenDesk\\Service\\Remote\\MacroServiceInterface', '__unset', array($name));

        return $return;
    }


}
