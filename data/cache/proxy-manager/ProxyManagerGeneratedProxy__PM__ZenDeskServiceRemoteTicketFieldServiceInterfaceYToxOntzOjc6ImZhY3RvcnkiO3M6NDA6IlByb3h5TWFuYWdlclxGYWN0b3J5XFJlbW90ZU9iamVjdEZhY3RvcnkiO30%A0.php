<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\TicketFieldServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\TicketFieldServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc993bbb1045552178 = null;

    /**
     * @rest\http POST
     * @rest\uri /ticket_fields
     * @param  TicketField                 $ticketField
     * @return \ZenDesk\Entity\TicketField
     */
    public function persist(\ZenDesk\Entity\TicketField $ticketField)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', 'persist', array($ticketField));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /ticket_fields/%ticketField
     * @param  TicketField                 $ticketField
     * @return \ZenDesk\Entity\TicketField
     */
    public function save(\ZenDesk\Entity\TicketField $ticketField)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', 'save', array($ticketField));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /ticket_fields/%ticketField
     * @param TicketField $ticketField
     */
    public function delete(\ZenDesk\Entity\TicketField $ticketField)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', 'delete', array($ticketField));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /ticket_fields/%id
     * @param  int                         $id
     * @return \ZenDesk\Entity\TicketField
     */
    public function get($id)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /ticket_fields
     * @return \ZenDesk\Entity\TicketField[]
     */
    public function getAll()
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc993bbb1045552178)
    {
        $this->adapter53abdc993bbb1045552178 = $adapter53abdc993bbb1045552178;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc993bbb1045552178->call('ZenDesk\\Service\\Remote\\TicketFieldServiceInterface', '__unset', array($name));

        return $return;
    }


}
