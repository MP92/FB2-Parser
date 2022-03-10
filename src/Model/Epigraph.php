<?php


namespace Tizis\FB2\Model;


class Epigraph implements IModel
{
    /**
     * @var string[]
     */
    private $content;

    /**
     * @return string[]
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @param string[] $content
     * @return $this
     */
    public function setContent(array $content): self
    {
        $this->content = $content;
        return $this;
    }
}
