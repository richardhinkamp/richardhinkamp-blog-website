<?php

namespace RhBlog\Controllers;

/**
 * Extend frontend with error 404 page
 */
class Frontend extends \Bolt\Controllers\Frontend
{
    public static function error404(\Silex\Application $app)
    {
        return $app['render']->render('error404.twig');
    }
}
