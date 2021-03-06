<?php
/**
 * PHP 7 SDK for the KATANA(tm) Framework (http://katana.kusanagi.io)
 * Copyright (c) 2016-2018 KUSANAGI S.L. All rights reserved.
 *
 * Distributed under the MIT license
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 *
 * @link      https://github.com/kusanagi/katana-sdk-php7
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @copyright Copyright (c) 2016-2018 KUSANAGI S.L. (http://kusanagi.io)
 */

namespace Katana\Sdk\Schema;

class ActionReturn
{
    /**
     * @var string
     */
    private $type = '';

    /**
     * @var bool
     */
    private $allowEmpty = false;

    /**
     * @param string $type
     * @param bool $allowEmpty
     */
    public function __construct($type, $allowEmpty)
    {
        $this->type = $type;
        $this->allowEmpty = $allowEmpty;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
