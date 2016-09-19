# devotee_fetch
ExpressionEngine developers can now easily fetch your stats and data from the devot:ee website.

<a href='https://pledgie.com/campaigns/32600'><img alt='Click here to lend your support to: devot:ee Fetch and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/32600.png?skin_name=chrome' border='0' ></a>


Fetch your public data from the devot:ee site for your addons.

      You must first add your API Key and Secret Key to the script

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
         - "rating_percentage" - {dv_rating_percentage}
         - "rating" - {dv_rating}
         - "votes" - {dv_votes}
         - "favorites" - {dv_favorites}
         - "reviews" - {dv_reviews}{/dv_reviews}
            - "author_name" - {dv_author_name}
            - "author_url" - {dv_author_url}
            - "date" - {dv_date}
            - "review" - {dv_review}
