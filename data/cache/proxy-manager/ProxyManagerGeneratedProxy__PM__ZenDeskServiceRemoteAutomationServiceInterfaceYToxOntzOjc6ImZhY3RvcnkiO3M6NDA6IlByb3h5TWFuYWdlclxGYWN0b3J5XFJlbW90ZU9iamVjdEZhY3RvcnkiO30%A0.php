<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\AutomationServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\AutomationServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc975fe7e947391776 = null;

    /**
     * @rest\http POST
     * @rest\uri /automations
     * @param  Automation                 $automation
     * @return \ZenDesk\Entity\Automation
     */
    public function persist(\ZenDesk\Entity\Automation $automation)
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'persist', array($automation));

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
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'save', array($automation));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /automations/%hook
     * @param Automation $automation
     */
    public function delete(\ZenDesk\Entity\Automation $automation)
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'delete', array($automation));

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
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /automations
     * @return \ZenDesk\Entity\Automation[]
     */
    public function getAll()
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc975fe7e947391776)
    {
        $this->adapter53abdc975fe7e947391776 = $adapter53abdc975fe7e947391776;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc975fe7e947391776->call('ZenDesk\\Service\\Remote\\AutomationServiceInterface', '__unset', array($name));

        return $return;
    }


}
