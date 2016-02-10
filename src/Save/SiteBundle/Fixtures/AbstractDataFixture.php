<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.02.16
 * Time: 22:19
 */

namespace Save\SiteBundle\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;

/**
 * Class AbstractDataFixture
 * @package Save\SiteBundle\Fixtures
 */
abstract class AbstractDataFixture implements FixtureInterface
{
    /** @var array */
    protected static $created = [];
    /** @var array */
    protected static $data;

    /**
     * @param $file
     * @return array|mixed
     */
    protected static function getData($file)
    {
        if(self::$data === null) {
            self::$data = require __DIR__ .'/data/'. $file;
        }

        return self::$data;
    }

    /**
     * @param $type
     * @return array
     */
    public static function getRandomData($type)
    {
        $data = self::getData($type);
        $rand = mt_rand(0, count($data) - 1);
        if(count(self::$created) !== count($data) && in_array($rand, self::$created)) {
            return self::getRandomData($type);
        }

        return $data[$rand];
    }
}