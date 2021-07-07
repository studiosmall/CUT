<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageCollaborations extends Controller
{
	function articles() {

    $queried_object = get_queried_object();

    if ( $queried_object ) {
      $args = array(
        'post_type' => 'collaboration',
        'post_status' => 'publish',
        'posts_per_page' => 10
      );
    }

    $articles = array();

    $articles['category'] = $queried_object->name ? $queried_object->name : 'All' ;

    $blog_query = new \WP_Query( $args );

    if ( $blog_query->have_posts() ) {

      while( $blog_query->have_posts() ) {

        $blog_query->the_post();

        $article = array(
          'author_url'    => get_author_posts_url( get_the_author_meta( 'ID' )),
          'title'         => get_the_title(),
          'slug'          => get_the_permalink(),
          'id'            => get_the_id(),
          'thumbnail'     => get_the_post_thumbnail_url(get_the_id(), 'full'),
        );

        $articles['articles'][] = $article;

      }

      wp_reset_postdata();

    }

	  return $articles;
	}
}