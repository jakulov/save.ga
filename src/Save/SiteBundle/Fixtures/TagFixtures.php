<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.02.16
 * Time: 22:39
 */

namespace Save\SiteBundle\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Save\SiteBundle\Entity\Tag;

/**
 * Class TagFixtures
 * @package Save\SiteBundle\Fixtures
 */
class TagFixtures extends AbstractDataFixture
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
    }

    /**
     * @return Tag
     */
    public static function createTag()
    {
        $data = self::getData('tags');

        $tag = new Tag();
        $tag->setName($data['name']);

        return $tag;
    }
}