<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class ViewServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\ViewServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a631370ad6745547803 = null;

    /**
     * @rest\http POST
     * @rest\uri /views
     * @param  View                 $view
     * @return \ZenDesk\Entity\View
     */
    public function persist(\ZenDesk\Entity\View $view)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'persist', array($view));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /views/%view
     * @param  View                 $view
     * @return \ZenDesk\Entity\View
     */
    public function save(\ZenDesk\Entity\View $view)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'save', array($view));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /views/%view
     * @param View $view
     */
    public function delete(\ZenDesk\Entity\View $view)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'delete', array($view));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /views/%view/tickets
     * @param  View                   $view
     * @return \ZenDesk\Entity\View[]
     */
    public function getTickets(\ZenDesk\Entity\View $view)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'getTickets', array($view));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /views/%id
     * @param  int                  $id
     * @return \ZenDesk\Entity\View
     */
    public function get($id)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /views
     * @return \ZenDesk\Entity\View[]
     */
    public function getAll()
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /views/active
     * @return \ZenDesk\Entity\View[]
     */
    public function getAllActive()
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', 'getAllActive', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a631370ad6745547803)
    {
        $this->adapter543a631370ad6745547803 = $adapter543a631370ad6745547803;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a631370ad6745547803->call('ZenDesk\\Service\\Remote\\ViewServiceInterface', '__unset', array($name));

        return $return;
    }


}
