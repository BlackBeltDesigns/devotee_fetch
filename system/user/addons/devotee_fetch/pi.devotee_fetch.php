<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * devot:ee Fetch
 * 
 * This file must be placed in the
 * system/user/addons folder in your ExpressionEngine installation.
 *
 * @package devot:ee Fetch
 * @version 1.0.0
 * @author Brian Mallett http://bbdokc.com
 * @copyright Copyright (c) 2016 Brian Mallett
 */

class Devotee_fetch
{
   /**
    * Plugin Information
    *
    * This information will be displayed in the Add-on Manager section of the Control Panel
    */
   public static $name         = 'devot:ee Fetch';
   public static $version      = '1.0.0';
   public static $author       = 'Brian Mallett, BBDOKC';
   public static $author_url   = 'http://bbdokc.com/';
   public static $description  = 'A simple way to call in your devot:ee data.';
   public static $typography   = FALSE;

   public $return_data = "";

   public function __construct()
   {
      // Get all parameters from our tag
      $file = ee()->TMPL->fetch_param('file', FALSE); // Grab the file name
      $api_key = "YOUR_API_KEY";
      $secret_key = "YOUR_SECRET_KEY";
      $base_fetch = "https://devot-ee.com/add-ons/data-json/";

      /**
       * Process our json call
       */
      $str = file_get_contents($base_fetch . $file . '?api_key=' . $api_key . '&secret_key=' . $secret_key);
      $row = json_decode($str, true); // decode the JSON into an associative array

      $variables = array();

      $developer = array();
      $developer_links = array();
      foreach ($row['developer']['developer_links'] as $developer_link)
      {
         $developer_links[] = array('dv_link_title' => $developer_link['title'], 'dv_link_url' => $developer_link['url']);
      }
      $developer[] = array('dv_developer_name' => $row['developer']['developer_name'], 'dv_developer_alt' => $row['developer']['developer_alt'], 'dv_developer_links' => $developer_links);

      $categories = array();
      foreach ($row['categories'] as $category)
      {
         $categories[] = array('dv_category' => $category);
      }

      $version_support = array();
      foreach ($row['version_support'] as $version => $supported)
      {
         $version_support[] = array('dv_version_name' => $version, 'dv_version_supported' => $supported);
      }

      $compatibility = array();
      foreach ($row['compatibility'] as $object => $compatible)
      {
         $compatibility[] = array('dv_component' => $object, 'dv_compatible' => $compatible);
      }

      $requirements = array();
      foreach ($row['requirements'] as $requirement => $required)
      {
         $requirements[] = array('dv_requirement' => $requirement, 'dv_required' => $required);
      }

      $links = array();
      foreach ($row['links'] as $link)
      {
         $links[] = array('dv_link_title' => $link['title'], 'dv_link_url' => $link['url']);
      }

      $hooks = array();
      foreach ($row['hooks'] as $hook)
      {
         $hooks[] = array('dv_hook' => $hook);
      }

      $reviews = array();
      foreach ($row['reviews'] as $review)
      {
         $reviews[] = array('dv_author_name' => $review['author_name'], 'dv_author_url' => $review['author_url'], 'dv_author_photo' => $review['author_photo'], 'dv_date' => $review['date'], 'dv_review' => $review['review']);
      }

      $variable_row = array(
          'dv_title' => $row['title'],
          'dv_developer' => $developer,
          'dv_license' => $row['license'],
          'dv_categories' => $categories,
          'dv_party' => $row['party'],
          'dv_version_support' => $version_support,
          'dv_compatibility' => $compatibility,
          'dv_requirements' => $requirements,
          'dv_summary' => $row['summary'],
          'dv_description' => $row['description'],
          'dv_links' => $links,
          'dv_hooks' => $hooks,
          'dv_rating' => $row['rating'],
          'dv_votes' => $row['votes'],
          'dv_favorites' => $row['favorites'],
          'dv_reviews' => $reviews
      );

      $variables[] = $variable_row;

      $output = ee()->TMPL->parse_variables(ee()->TMPL->tagdata, $variables);

      $this->return_data = $output;
   }


   // --------------------------------------------------------------------


   /**
    * Usage
    *
    * This function describes how the plugin is used.
    *
    * @access  public
    * @return  string
    */
   public static function usage()
   {
      ob_start(); ?>

      Fetch your public data from the devot:ee site for your addons.

      You must first add your API Key and Secret Key to the script above.

      - $file (Required) - This is the name of the file you want to retrieve. This is the {url_title} of the devot:ee location.

      - $return_data   -    This is a LOT of information, so I thought it best to just throw it in a tag pair so you can pick and choose what you like.

         - "title" - {dv_title}
         - "developer" - {dv_developer}{/dv_developer}
            - "developer_name" - {dv_developer_name}
            - "developer_alt" - {dv_developer_alt}
            - "developer_links" - {dv_developer_links}{/dv_developer_links}
               - "title" - {dv_link_title}
               - "url" - {dv_link_url}
         - "license" - {dv_license}
         - "categories" - {dv_categories}{/dv_categories}
            - "category" - {dv_category}
         - "party" - {dv_party}
         - "version_support" - {dv_version_support}{/dv_version_support}
            - "version_name" - {dv_version_name}
            - "version_supported" - (bool) {dv_version_supported}
         - "compatibility" - {dv_compatibility}{/dv_compatibility}
            - "component" - {dv_component}
            - "compatibility" - (bool) {dv_compatible}
         - "requirements" - {dv_requirements}{/dv_requirements}
            - "requirement" - {dv_requirement}
            - "required" - (bool) {dv_required}
         - "summary" - {dv_summary}
         - "description" - {dv_description}
         - "links" - {dv_links}{/dv_links}
            - "title" - {dv_link_title}
            - "url" - {dv_link_url}
         - "hooks" - {dv_hooks}{/dv_hooks}
            - "hook" - {dv_hook}
         - "rating" - {dv_rating}
         - "votes" - {dv_votes}
         - "favorites" - {dv_favorites}
         - "reviews" - {dv_reviews}{/dv_reviews}
            - "author_name" - {dv_author_name}
            - "author_url" - {dv_author_url}
            - "author_photo" - {dv_author_photo}
            - "date" - {dv_date}
            - "review" - {dv_review}

      This will come back to you in json format.

      <?php
      $buffer = ob_get_contents();
      ob_end_clean();

      return $buffer;
   }
}


/* End of file pi.devotee_fetch.php */
/* Location: ./system/user/addons/devotee_fetch/ */
