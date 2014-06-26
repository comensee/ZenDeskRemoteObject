<?php

namespace ZenDesk\Entity\Consumable;

use RestRemoteObject\Client\Rest\RestParametersAware;

use Zend\Stdlib\Exception\RuntimeException;

class File implements RestParametersAware
{
    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $content;

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $file
     */
    public function attachFile($file)
    {
        if (!file_exists($file)) {
            throw new RuntimeException(sprintf('File "%s" does not exist', $file));
        }

        $info = pathinfo($file);
        $this->setFilename($info['basename']);
        $this->setContent(file_get_contents($file));
    }

    /**
     * @return array
     */
    public function getRestParameters()
    {
        return array(
            'file' => $this->getFilename(),
        );
    }
}
