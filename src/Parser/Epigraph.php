<?php

namespace Tizis\FB2\Parser;


class Epigraph extends Parser
{
    /**
     * Epigraph constructor.
     * @param $xmlDOM
     */
    public function __construct(&$xmlDOM)
    {
        $this->setXmlDOM($xmlDOM);
    }

    /**
     * @return \Tizis\FB2\Model\Epigraph|null
     */
    public function parse(): ?\Tizis\FB2\Model\Epigraph
    {
        $data = [];

        $items = (array)$this->xmlDOM->find('body>epigraph');
        foreach ($items as $key => $item) {
            $data[] = $item->innerHTML();
        }

        if (!empty($data)) {
            return (new \Tizis\FB2\Model\Epigraph())
                ->setContent($data);
        }

        return null;
    }
}
