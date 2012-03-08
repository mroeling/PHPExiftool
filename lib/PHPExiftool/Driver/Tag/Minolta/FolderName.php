<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class FolderName extends \PHPExiftool\Driver\Tag
{

    protected $Id = 39;

    protected $Name = 'FolderName';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Folder Name';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard Form',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Data Form',
        ),
    );

}