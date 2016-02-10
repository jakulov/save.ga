<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.02.16
 * Time: 22:09
 */

namespace Save\SiteBundle\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Save\SiteBundle\Entity\Bookmark;

/**
 * Class BookmarkFixtures
 * @package Save\SiteBundle\Fixtures
 */
class BookmarkFixtures extends AbstractDataFixture
{

    public function load(ObjectManager $manager)
    {
        // TODO: load bookmarks to DB
    }

    /**
     * @return Bookmark
     */
    public static function createBookmark()
    {
        $data = self::getRandomData('bookmarks');

        $obj = new Bookmark();
        $obj
            ->setTitle($data['title'])
            ->setDescription($data['description'])
            ->setUrl($data['utl']);

        return $obj;
    }
}