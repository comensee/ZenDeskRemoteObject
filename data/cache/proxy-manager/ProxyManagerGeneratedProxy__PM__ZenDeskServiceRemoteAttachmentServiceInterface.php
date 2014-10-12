<?php

namespace ProxyManagerGeneratedProxy\__PM__\ZenDesk\Service\Remote;

class AttachmentServiceInterface implements \ProxyManager\Proxy\RemoteObjectInterface, \ZenDesk\Service\Remote\AttachmentServiceInterface
{

    /**
     * @var \ProxyManager\Factory\RemoteObject\AdapterInterface Remote web service
     * adapter
     */
    private $adapter543a6303c65ce421122759 = null;

    /**
     * @rest\http POST
     * @rest\uri /uploads?filename=%file
     * @param  File                       $file
     * @return \ZenDesk\Entity\Attachment
     */
    public function upload(\ZenDesk\Entity\Consumable\File $file)
    {
        $return = $this->adapter543a6303c65ce421122759->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', 'upload', array($file));

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
        $return = $this->adapter543a6303c65ce421122759->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', 'get', array($id));

        return $return;
    }

    /**
     * @override constructor for remote object control\n\n@param
     * \ProxyManager\Factory\RemoteObject\AdapterInterface \$adapter
     */
    public function __construct(\ProxyManager\Factory\RemoteObject\AdapterInterface $adapter543a6303c65ce421122759)
    {
        $this->adapter543a6303c65ce421122759 = $adapter543a6303c65ce421122759;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $return = $this->adapter543a6303c65ce421122759->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__get', array($name));

        return $return;
    }

    /**
     * @param string \$name\n@param mixed \$value
     */
    public function __set($name, $value)
    {
        $return = $this->adapter543a6303c65ce421122759->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__set', array($name, $value));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $return = $this->adapter543a6303c65ce421122759->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__isset', array($name));

        return $return;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $return = $this->adapter543a6303c65ce421122759->call('ZenDesk\\Service\\Remote\\AttachmentServiceInterface', '__unset', array($name));

        return $return;
    }


}
