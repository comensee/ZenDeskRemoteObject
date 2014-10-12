<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class UserServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\UserServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a6312049b8303132956 = null;

    /**
     * @rest\http POST
     * @rest\uri /users
     * @param  User                 $user
     * @return \ZenDesk\Entity\User
     */
    public function persist(\ZenDesk\Entity\User $user)
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'persist', array($user));

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
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'save', array($user));

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
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'delete', array($user));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /users/me
     * @return \ZenDesk\Entity\User
     */
    public function me()
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'me', array());

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
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'suspend', array($user));

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
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /users
     * @return \ZenDesk\Entity\User[]
     */
    public function getAll()
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a6312049b8303132956)
    {
        $this->adapter543a6312049b8303132956 = $adapter543a6312049b8303132956;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a6312049b8303132956->call('ZenDesk\\Service\\Remote\\UserServiceInterface', '__unset', array($name));

        return $return;
    }


}
