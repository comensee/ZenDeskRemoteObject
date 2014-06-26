<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\TicketServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\TicketServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc93bc9bd707971003 = null;

    /**
     * @rest\http POST
     * @rest\uri /tickets
     * @param  Ticket                 $ticket
     * @return \ZenDesk\Entity\Ticket
     */
    public function persist(\ZenDesk\Entity\Ticket $ticket)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'persist', array($ticket));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /tickets/%ticket
     * @param  Ticket                 $ticket
     * @return \ZenDesk\Entity\Ticket
     */
    public function save(\ZenDesk\Entity\Ticket $ticket)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'save', array($ticket));

        return $return;
    }

    /**
     * @rest\http DELETE
     * @rest\uri /tickets/%ticket
     * @param Ticket $ticket
     */
    public function delete(\ZenDesk\Entity\Ticket $ticket)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'delete', array($ticket));

        return $return;
    }

    /**
     * @rest\http PUT
     * @rest\uri /tickets/%ticket
     * @param  Ticket                 $ticket
     * @return \ZenDesk\Entity\Ticket
     */
    public function close(\ZenDesk\Entity\Ticket $ticket)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'close', array($ticket));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /tickets/%id
     * @param  int                    $id
     * @return \ZenDesk\Entity\Ticket
     */
    public function get($id)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /tickets
     * @return \ZenDesk\Entity\Ticket[]
     */
    public function getAll()
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'getAll', array());

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /tickets/recent
     * @return \ZenDesk\Entity\Ticket[]
     */
    public function getRecent()
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'getRecent', array());

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /tickets/%ticket/comments
     * @param  Ticket                    $ticket
     * @return \ZenDesk\Entity\Comment[]
     */
    public function getComments(\ZenDesk\Entity\Ticket $ticket)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'getComments', array($ticket));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /tickets/%ticket/tags
     * @param  Ticket                $ticket
     * @return \ZenDesk\Entity\Tag[]
     */
    public function getTags(\ZenDesk\Entity\Ticket $ticket)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', 'getTags', array($ticket));

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc93bc9bd707971003)
    {
        $this->adapter53abdc93bc9bd707971003 = $adapter53abdc93bc9bd707971003;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc93bc9bd707971003->call('ZenDesk\\Service\\Remote\\TicketServiceInterface', '__unset', array($name));

        return $return;
    }


}
