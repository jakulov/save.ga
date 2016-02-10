<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.02.16
 * Time: 22:03
 */

namespace Save\SiteBundle\Helper;

use Save\SiteBundle\Entity\Bookmark;
use Save\SiteBundle\Fixtures\BookmarkFixtures;

/**
 * TODO: fetch objects from DB
 *
 * Class BookmarkHelper
 * @package Save\SiteBundle\Helper
 */
class BookmarkHelper extends AbstractEntityHelper
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'site_bookmark';
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('latest_bookmarks', [$this, 'latestBookmarks']),
            new \Twig_SimpleFunction('popular_bookmarks', [$this, 'popularBookmarks'])
        ];
    }

    /**
     * @param int $limit
     * @return Bookmark[]
     */
    public function latestBookmarks($limit = 5)
    {
        $bookmarks = [];
        for($i = 0; $i < $limit; $i++) {
            $bookmarks[] = BookmarkFixtures::createBookmark();
        }

        return $bookmarks;
    }

    /**
     * @param string $period
     * @param int $limit
     * @return \Save\SiteBundle\Entity\Bookmark[]
     */
    public function popularBookmarks($period = 'week', $limit = 5)
    {
        return $this->latestBookmarks($limit);
    }
}