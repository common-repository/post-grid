<?php
if (!defined('ABSPATH')) exit;  // if direct access
class class_post_grid_support
{
    public function __construct() {}
    public function video_tutorials()
    {
        $tutorials = array(
            array(
                'title' => __('How to create post grid', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=QaoMrdgkyKw&list=PL0QP7T2SN94bpTVghETSePuVvRROpuEW6&index=9&ab_channel=PickPlugins',
                'keywords' => '',
            ),
            // array(
            //     'title' => __('Custom read more text', 'post-grid'),
            //     'url' => 'https://www.youtube.com/watch?v=LY7IjS7SFNk',
            //     'keywords' => '',
            // ),
            // array(
            //     'title' => __('Remove read more text', 'post-grid'),
            //     'url' => 'https://www.youtube.com/watch?v=ZcS2vRcTe4A',
            // ),
            array(
                'title' => __('Excerpt word count', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=gZ6E3UiKQqk',
                'keywords' => '',
            ),
            array(
                'title' => __('Custom media height', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=TupF2TpHHFA',
                'keywords' => '',
            ),
            array(
                'title' => __('Item custom padding margin', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=HRZpoib1VvI',
                'keywords' => '',
            ),
            array(
                'title' => __('Grid item height', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=ydqlgzfsboQ',
                'keywords' => '',
            ),
            array(
                'title' => __('Column Width or column number', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=ZV8hd1ij5Wo',
                'keywords' => '',
            ),
            array(
                'title' => __('Post title linked', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=oUVZB9F5d4U',
                'keywords' => '',
            ),
            array(
                'title' => __('Featured image linked to post', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=stGOJLwUF-k',
                'keywords' => '',
            ),
            array(
                'title' => __('Query post by categories or terms', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=xYzqtWRg8W4',
                'keywords' => '',
            ),
            array(
                'title' => __('Query post by tags or terms', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=RKb-B_Q72Ak',
                'keywords' => '',
            ),
            array(
                'title' => __('Display search input', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=psJR65Fmc_s',
                'keywords' => '',
            ),
            array(
                'title' => __('Work with layout editor', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=9bQc7q40jMc',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Create filterable grid', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=Zg2r7idmEm0',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable custom filter type data logic', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=5Dueav6Yoyc',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable custom all text', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=JvVkAyoXC3g',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable default active filter', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=h2rbyZNhMhU',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable custom filter', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=e8phxNKIRsU',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable dropdown single filter', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=ZHY8qf-z3H0',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable display sort filter', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=21TYNsp2OPI',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Filterable multi filter', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=uRcfd_R9YCM',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Post grid on archive tags', 'post-grid'),
                'url' => 'https://youtu.be/lNyAjva_UXo',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Query post by meta field', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=0AIDNJvZGR0',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Multi skin', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=YzUs_P3cFCo',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Sticky post query', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=nVIOUbVjML4',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Masonry layout', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=qYjbv2euNpE',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Post query by author', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=KtoGa8NB3ig',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Create glossary grid', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=MKL4EZ-WYTs',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Post carousel slider', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=A0bZ_luBtQQ',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Grid layout type', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=58piQVkDZN4',
                'keywords' => '',
            ),
            array(
                'title' => __('[ Pro ] Thumbnail youtube', 'post-grid'),
                'url' => 'https://www.youtube.com/watch?v=Zm5vD15yvNM',
                'keywords' => '',
            ),
            array(
                'title' => __('How to Create a Post Grid?', 'post-grid'),
                'url' => 'https://www.pickplugins.com/documentation/post-grid/faq/how-to-create-a-post-grid/',
            ),
            array(
                'title' => __('How to upgrade to premium?', 'post-grid'),
                'url' => 'https://www.pickplugins.com/documentation/post-grid/upgrade-to-premium/',
            ),
            array(
                'title' => __('Post grid on archive page?', 'post-grid'),
                'url' => 'https://www.pickplugins.com/documentation/post-grid/faq/post-grid-for-archive-page/',
            ),
            array(
                'title' => __('How to display HTML/Shortcode via layout editor?', 'post-grid'),
                'url' => 'https://www.pickplugins.com/documentation/post-grid/faq/layout-editor-how-at-add-htmlshortcode/',
            ),
        );
        return apply_filters('post_grid_video_tutorials', $tutorials);
    }
    public function faq()
    {
        $faq = array();
        return apply_filters('post_grid_faq', $faq);
    }
}
