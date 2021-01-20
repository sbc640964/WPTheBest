<?php


namespace SBC;

use WeDevs\ORM\WP\Post as Post;


class Helper
{
   use SBCTrait\StringFunctions;
    public function __construct()
    {
        //echo __(Post::where('id', 1)->first()->post_status, 'wp');
        echo __('Page Published');
    }
}