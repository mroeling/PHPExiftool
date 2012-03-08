<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class HL7InstanceIdentifier extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0040,E001';

    protected $Name = 'HL7InstanceIdentifier';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'HL7 Instance Identifier';

}