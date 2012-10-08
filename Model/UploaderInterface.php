<?php

namespace Defrag\PluploadBundle\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 *
 * @author Michał Dąbrowski <dabrowski@brillante.pl>
 */
interface UploaderInterface
{

    public function upload(UploadedFile $file);

}
