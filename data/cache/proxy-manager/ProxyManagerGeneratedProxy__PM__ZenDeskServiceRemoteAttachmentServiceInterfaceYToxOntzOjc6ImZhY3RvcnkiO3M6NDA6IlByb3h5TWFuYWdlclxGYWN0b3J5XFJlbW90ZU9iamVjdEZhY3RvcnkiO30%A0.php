<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote\AttachmentServiceInterface;

class YToxOntzOjc6ImZhY3RvcnkiO3M6NDA6IlByb3h5TWFuYWdlclxGYWN0b3J5XFJlbW90ZU9iamVjdEZhY3RvcnkiO30  implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\AttachmentServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter53abdc96eac4d942939133 = null;

    /**
     * @rest\http POST
     * @rest\uri /uploads?filename=%file
     * @param  File                       $file
     * @return \ZenDesk\Entity\Attachment
     */
    public function upload(\ZenDesk\Entity\Consumable\File $file)
    {
        $return = $this->adapter53abdc96eac4d942939133->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', 'upload', array($file));

        return $return;
    }

    /**
     * @rest\http GET
     * @rest\uri /attachments/%id
     * @param  int                        $id
     * @return \ZenDesk\Entity\Attachment
     */
    public function get($id)
    {
        $return = $this->adapter53abdc96eac4d942939133->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter53abdc96eac4d942939133)
    {
        $this->adapter53abdc96eac4d942939133 = $adapter53abdc96eac4d942939133;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter53abdc96eac4d942939133->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter53abdc96eac4d942939133->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter53abdc96eac4d942939133->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter53abdc96eac4d942939133->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__unset', array($name));

        return $return;
    }


}
