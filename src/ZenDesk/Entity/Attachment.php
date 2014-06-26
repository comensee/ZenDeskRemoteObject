<?php

namespace ZenDesk\Entity;

class Attachment extends AbstractEntity
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $token;

    /** @var string */
    protected $file_name;

    /** @var string */
    protected $content_url;

    /** @var string */
    protected $content_type;

    /** @var int */
    protected $size;

    /** @var array */
    protected $thumbnails = array();

    /**
     * @param Attachment $fresh
     */
    public function refresh($fresh)
    {
        $this->setId($fresh->getId());
        $this->setFileName($fresh->getFileName());
        $this->setContentUrl($fresh->getContentUrl());
        $this->setContentType($fresh->getContentType());
        $this->setSize($fresh->getSize());
        $this->setThumbnails($fresh->getThumbnails());
        $this->setToken($fresh->getToken());
    }

    /**
     * @param string $content_type
     */
    public function setContentType($contentType)
    {
        $this->content_type = $contentType;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * @param string $content_url
     */
    public function setContentUrl($contentUrl)
    {
        $this->content_url = $contentUrl;
    }

    /**
     * @return string
     */
    public function getContentUrl()
    {
        return $this->content_url;
    }

    /**
     * @param string $file_name
     */
    public function setFileName($file_name)
    {
        $this->file_name = $file_name;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param array $thumbnails
     */
    public function setThumbnails(array $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return array
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
