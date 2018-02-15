<?php
/**
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2018 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

namespace ElGigi\SystemPay\Request;

use ElGigi\SystemPay\AbstractObject;

/**
 * Request Settlement.
 *
 * @package ElGigi\SystemPay\Request
 *
 * @property string $transactionUuids Transaction Uuids
 * @property string $commission       Commission
 * @property string $date             Date & time
 */
class Settlement extends AbstractObject
{
    /**
     * Settlement constructor.
     *
     * @param array $data Default data
     */
    public function __construct(array $data = [])
    {
        parent::__construct(['transactionUuids' => 'string',
                             'commission'       => 'n2',
                             'date'             => 'datetime'],
                            $data);
    }
}