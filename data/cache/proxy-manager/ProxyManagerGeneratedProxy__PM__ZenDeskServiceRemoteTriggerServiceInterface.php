<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class TriggerServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\TriggerServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a630f27a88661038357 = null;

    /**
     * @rest\http POST
     * @rest\uri /triggers
     * @param  Trigger                 $trigger
     * @return \ZenDesk\Entity\Trigger
     */
    public function persist(\ZenDesk\Entity\Trigger $trigger)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', 'persist', array($trigger));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /triggers/%hook
     * @param  Trigger                 $trigger
     * @return \ZenDesk\Entity\Trigger
     */
    public function save(\ZenDesk\Entity\Trigger $trigger)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', 'save', array($trigger));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /triggers/%hook
     * @param Trigger $trigger
     */
    public function delete(\ZenDesk\Entity\Trigger $trigger)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', 'delete', array($trigger));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /triggers/%id
     * @param  int                     $id
     * @return \ZenDesk\Entity\Trigger
     */
    public function get($id)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /triggers
     * @return \ZenDesk\Entity\Trigger[]
     */
    public function getAll()
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a630f27a88661038357)
    {
        $this->adapter543a630f27a88661038357 = $adapter543a630f27a88661038357;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a630f27a88661038357->call('ZenDesk\\Service\\Remote\\TriggerServiceInterface', '__unset', array($name));

        return $return;
    }


}
