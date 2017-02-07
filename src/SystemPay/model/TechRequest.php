<?php
namespace SystemPay\model;

/**
 * Class TechRequest
 *
 * @package SystemPay\model
 *
 * @property string $browserUserAgent Browser user agent header value
 * @property string $browserAccept    Browser accept header value
 */
class TechRequest extends Object
{
    /**
     * TechRequest constructor.
     *
     * @param array $data Default data
     */
    public function __construct(array $data = [])
    {
        parent::__construct(['browserUserAgent' => 'string',
                             'browserAccept'    => 'string'],
                            $data);
    }
}