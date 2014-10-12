<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class UserFieldServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\UserFieldServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a63108fb90243211335 = null;

    /**
     * @rest\http POST
     * @rest\uri /user_fields
     * @param  UserField                 $userField
     * @return \ZenDesk\Entity\UserField
     */
    public function persist(\ZenDesk\Entity\UserField $userField)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', 'persist', array($userField));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /user_fields/%userField
     * @param  UserField                 $userField
     * @return \ZenDesk\Entity\UserField
     */
    public function save(\ZenDesk\Entity\UserField $userField)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', 'save', array($userField));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /user_fields/%userField
     * @param UserField $userField
     */
    public function delete(\ZenDesk\Entity\UserField $userField)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', 'delete', array($userField));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /user_fields/%id
     * @param  int                       $id
     * @return \ZenDesk\Entity\UserField
     */
    public function get($id)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /user_fields
     * @return \ZenDesk\Entity\UserField[]
     */
    public function getAll()
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a63108fb90243211335)
    {
        $this->adapter543a63108fb90243211335 = $adapter543a63108fb90243211335;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a63108fb90243211335->call('ZenDesk\\Service\\Remote\\UserFieldServiceInterface', '__unset', array($name));

        return $return;
    }


}
