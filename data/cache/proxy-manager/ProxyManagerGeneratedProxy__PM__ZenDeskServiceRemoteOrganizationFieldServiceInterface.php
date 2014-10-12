<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class OrganizationFieldServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\OrganizationFieldServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a630ad68ac992873667 = null;

    /**
     * @rest\http POST
     * @rest\uri /organization_fields
     * @param  OrganizationField                 $organizationField
     * @return \ZenDesk\Entity\OrganizationField
     */
    public function persist(\ZenDesk\Entity\OrganizationField $organizationField)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', 'persist', array($organizationField));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /organization_fields/%organizationField
     * @param  OrganizationField                 $organizationField
     * @return \ZenDesk\Entity\OrganizationField
     */
    public function save(\ZenDesk\Entity\OrganizationField $organizationField)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', 'save', array($organizationField));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /organization_fields/%organizationField
     * @param OrganizationField $organizationField
     */
    public function delete(\ZenDesk\Entity\OrganizationField $organizationField)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', 'delete', array($organizationField));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /organization_fields/%id
     * @param  int                               $id
     * @return \ZenDesk\Entity\OrganizationField
     */
    public function get($id)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /organization_fields
     * @return \ZenDesk\Entity\OrganizationField[]
     */
    public function getAll()
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a630ad68ac992873667)
    {
        $this->adapter543a630ad68ac992873667 = $adapter543a630ad68ac992873667;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a630ad68ac992873667->call('ZenDesk\\Service\\Remote\\OrganizationFieldServiceInterface', '__unset', array($name));

        return $return;
    }


}
