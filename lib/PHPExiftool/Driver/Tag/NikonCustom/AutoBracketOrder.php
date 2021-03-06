<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AutoBracketOrder extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'AutoBracketOrder';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Auto Bracket Order';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        1 => array(
            'Id' => 8,
            'Label' => '-,0,+',
        ),
        2 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        3 => array(
            'Id' => 4,
            'Label' => '-,0,+',
        ),
        4 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        5 => array(
            'Id' => 16,
            'Label' => '-,0,+',
        ),
        6 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        7 => array(
            'Id' => 8,
            'Label' => '-,0,+',
        ),
        8 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        9 => array(
            'Id' => 16,
            'Label' => '-,0,+',
        ),
        10 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        11 => array(
            'Id' => 32,
            'Label' => '-,0,+',
        ),
        12 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        13 => array(
            'Id' => 16,
            'Label' => '-,0,+',
        ),
        14 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        15 => array(
            'Id' => 16,
            'Label' => '-,0,+',
        ),
        16 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        17 => array(
            'Id' => 16,
            'Label' => '-,0,+',
        ),
    );

    protected $Index = 'mixed';
}
