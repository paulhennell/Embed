<?php

namespace Embed\Detectors;

class AuthorName extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('author_name');
    }
}
