<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.02.16
 * Time: 22:32
 */

namespace Save\SiteBundle\Helper;

use Save\SiteBundle\Entity\Tag;
use Save\SiteBundle\Fixtures\TagFixtures;

/**
 * Class TagHelper
 * @package Save\SiteBundle\Helper
 */
class TagHelper extends AbstractEntityHelper
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'site_tag';
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('popular_tags', [$this, 'getPopularTags']),
        ];
    }

    /**
     * @param int $limit
     * @return Tag[]
     */
    public function getPopularTags($limit = 15)
    {
        $tags = [];
        for($i = 0; $i < $limit; $i++) {
            $tags[] = TagFixtures::createTag();
        }

        return $tags;
    }
}