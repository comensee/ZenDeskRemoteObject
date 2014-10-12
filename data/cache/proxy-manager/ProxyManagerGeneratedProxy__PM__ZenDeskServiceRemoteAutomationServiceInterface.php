<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class AutomationServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\AutomationServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a630548891661186508 = null;

    /**
     * @rest\http POST
     * @rest\uri /automations
     * @param  Automation                 $automation
     * @return \ZenDesk\Entity\Automation
     */
    public function persist(\ZenDesk\Entity\Automation $automation)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'persist', array($automation));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /automations/%hook
     * @param  Automation                 $automation
     * @return \ZenDesk\Entity\Automation
     */
    public function save(\ZenDesk\Entity\Automation $automation)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'save', array($automation));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /automations/%hook
     * @param Automation $automation
     */
    public function delete(\ZenDesk\Entity\Automation $automation)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'delete', array($automation));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /automations/%id
     * @param  int                        $id
     * @return \ZenDesk\Entity\Automation
     */
    public function get($id)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /automations
     * @return \ZenDesk\Entity\Automation[]
     */
    public function getAll()
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a630548891661186508)
    {
        $this->adapter543a630548891661186508 = $adapter543a630548891661186508;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a630548891661186508->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__unset', array($name));

        return $return;
    }


}
