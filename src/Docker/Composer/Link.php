<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 25.06.16
 * Time: 19:15
 */

namespace Docker\Composer;


class Link
{
    protected $host;

    protected $as;

    public function __construct($host, $as)
    {
        $this->host = $host;
        $this->as = $as;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getAs()
    {
        return $this->as;
    }

    /**
     * @param mixed $as
     */
    public function setAs($as)
    {
        $this->as = $as;
    }

}