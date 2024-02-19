<?php return array (
  '4d7fd1e4-85f2-48f5-947e-92819fc8664b' => 
  array (
    'uuid' => '4d7fd1e4-85f2-48f5-947e-92819fc8664b',
    'handle' => 'Blog\\PostContent',
    'type' => 'mixin',
    'name' => 'Blog Post Content',
    'fields' => 
    array (
      'banner' => 
      array (
        'tab' => 'Manage',
        'label' => 'Banner',
        'type' => 'fileupload',
        'mode' => 'image',
        'maxFiles' => 1,
      ),
      'author' => 
      array (
        'tab' => 'Manage',
        'label' => 'Author',
        'commentAbove' => 'Select the author for this blog post',
        'type' => 'entries',
        'maxItems' => 1,
        'source' => 'Blog\\Author',
      ),
      'categories' => 
      array (
        'tab' => 'Manage',
        'label' => 'Categories',
        'commentAbove' => 'Select categories the blog post belongs to',
        'type' => 'entries',
        'source' => 'Blog\\Category',
      ),
      'featured_text' => 
      array (
        'tab' => 'Featured',
        'label' => 'Featured Text',
        'type' => 'textarea',
        'size' => 'small',
      ),
      'gallery' => 
      array (
        'label' => 'Gallery',
        'type' => 'fileupload',
        'mode' => 'image',
        'span' => 'adaptive',
        'tab' => 'Gallery',
      ),
      'gallery_media' => 
      array (
        'label' => 'Media',
        'type' => 'mediafinder',
        'mode' => 'image',
        'span' => 'adaptive',
        'tab' => 'Media',
      ),
    ),
    'handleSlug' => 'blog_post_content',
  ),
  'ae2d2c25-3a0e-4765-8b36-d1666fc0e31f' => 
  array (
    'uuid' => 'ae2d2c25-3a0e-4765-8b36-d1666fc0e31f',
    'name' => 'Social Links',
    'type' => 'mixin',
    'handle' => 'Fields\\SocialLinks',
    'fields' => 
    array (
      'social_links' => 
      array (
        'type' => 'repeater',
        'prompt' => 'Add Link',
        'form' => 
        array (
          'fields' => 
          array (
            'platform' => 
            array (
              'span' => 'auto',
              'label' => 'Platform',
              'type' => 'dropdown',
              'options' => 
              array (
                'facebook' => 'Facebook',
                'linkedin' => 'LinkedIn',
                'dribbble' => 'Dribbble',
                'twitter' => 'Twitter',
                'youtube' => 'YouTube',
              ),
            ),
            'url' => 
            array (
              'span' => 'auto',
              'label' => 'Social Link',
              'type' => 'text',
              'placeholder' => 'https://...',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'fields_social_links',
  ),
  'da034c4f-0e24-4906-94b9-66b26c0549c9' => 
  array (
    'uuid' => 'da034c4f-0e24-4906-94b9-66b26c0549c9',
    'name' => 'Detailed Block',
    'type' => 'mixin',
    'handle' => 'Blocks\\DetailedBlock',
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'type' => 'text',
      ),
      'content' => 
      array (
        'label' => 'Description',
        'type' => 'richeditor',
        'size' => 'small',
      ),
      'list_items' => 
      array (
        'label' => 'List Items',
        'type' => 'datatable',
        'btnAddRowLabel' => 'Add Item',
        'btnDeleteRowLabel' => 'Delete Item',
        'columns' => 
        array (
          'text' => 
          array (
            'type' => 'string',
            'title' => 'Text',
          ),
        ),
      ),
      'button_text' => 
      array (
        'label' => 'Button Text',
        'span' => 'auto',
        'placeholder' => 'Main call to action',
      ),
      'button_url' => 
      array (
        'label' => 'Button URL',
        'span' => 'auto',
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'maxItems' => 1,
      ),
    ),
    'handleSlug' => 'blocks_detailed_block',
  ),
  '21aad99b-d3c6-4f5e-b271-15471c81e11b' => 
  array (
    'uuid' => '21aad99b-d3c6-4f5e-b271-15471c81e11b',
    'name' => 'Image Slice',
    'type' => 'mixin',
    'handle' => 'Blocks\\ImageSlice',
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'maxItems' => 1,
      ),
    ),
    'handleSlug' => 'blocks_image_slice',
  ),
  '015fde4b-23d8-4ba3-8e78-9c6ebfb5fcf7' => 
  array (
    'uuid' => '015fde4b-23d8-4ba3-8e78-9c6ebfb5fcf7',
    'name' => 'Paragraph Block',
    'type' => 'mixin',
    'handle' => 'Blocks\\ParagraphBlock',
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'type' => 'text',
      ),
      'content' => 
      array (
        'label' => 'Description',
        'type' => 'richeditor',
        'size' => 'small',
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'maxItems' => 1,
      ),
    ),
    'handleSlug' => 'blocks_paragraph_block',
  ),
  '55615b16-120f-4be9-9429-6ae6dabc523c' => 
  array (
    'uuid' => '55615b16-120f-4be9-9429-6ae6dabc523c',
    'name' => 'Scoreboard Metrics',
    'type' => 'mixin',
    'handle' => 'Blocks\\ScoreboardMetrics',
    'fields' => 
    array (
      'metrics' => 
      array (
        'label' => 'Metrics',
        'type' => 'repeater',
        'form' => 
        array (
          'fields' => 
          array (
            'number' => 
            array (
              'label' => 'Number',
              'type' => 'number',
              'span' => 'row',
              'spanClass' => 'col-md-3',
            ),
            'description' => 
            array (
              'label' => 'Description',
              'type' => 'text',
              'span' => 'row',
              'spanClass' => 'col-md-9',
            ),
            'icon' => 
            array (
              'label' => 'Icon',
              'type' => 'radio',
              'cssClass' => 'inline-options',
              'options' => 
              array (
                'notepad' => 'Notepad',
                'shield' => 'Shield',
                'basket' => 'Basket',
                'briefcase' => 'Briefcase',
              ),
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'blocks_scoreboard_metrics',
  ),
  '8c4041cf-f16d-46f8-86be-9372a266ae6d' => 
  array (
    'uuid' => '8c4041cf-f16d-46f8-86be-9372a266ae6d',
    'name' => 'Team Leaders',
    'type' => 'mixin',
    'handle' => 'Blocks\\TeamLeaders',
    'fields' => 
    array (
      'members' => 
      array (
        'label' => 'Members',
        'type' => 'repeater',
        'itemsExpanded' => false,
        'form' => 
        array (
          'fields' => 
          array (
            'title' => 
            array (
              'label' => 'Title',
              'span' => 'left',
            ),
            'role' => 
            array (
              'label' => 'Role',
              'span' => 'right',
            ),
            'description' => 
            array (
              'label' => 'Description',
              'type' => 'textarea',
              'size' => 'tiny',
            ),
            'avatar' => 
            array (
              'label' => 'Image',
              'type' => 'mediafinder',
              'mode' => 'image',
              'maxItems' => 1,
            ),
            '_social_links' => 
            array (
              'label' => 'Social Links',
              'type' => 'mixin',
              'source' => 'Fields\\SocialLinks',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'blocks_team_leaders',
  ),
  '7b193500-ac0b-481f-a79c-2a362646364d' => 
  array (
    'uuid' => '7b193500-ac0b-481f-a79c-2a362646364d',
    'handle' => 'Page\\Blocks',
    'type' => 'mixin',
    'name' => 'Page Blocks',
    'fields' => 
    array (
      'blocks' => 
      array (
        'label' => 'Blocks',
        'type' => 'repeater',
        'displayMode' => 'builder',
        'span' => 'adaptive',
        'tab' => 'Blocks',
        'groups' => 
        array (
          'image_slice' => 
          array (
            'name' => 'Image Slice',
            'description' => 'A large image with an angled slice.',
            'icon' => 'octo-icon-picture',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\ImageSlice',
              ),
            ),
          ),
          'paragraph_block' => 
          array (
            'name' => 'Paragraph Block',
            'description' => 'Simple paragraph with image',
            'icon' => 'octo-icon-text-h1',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\ParagraphBlock',
              ),
            ),
          ),
          'detailed_block' => 
          array (
            'name' => 'Detailed Block',
            'description' => 'Detailed paragraph with image and list',
            'icon' => 'octo-icon-diamond',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\DetailedBlock',
              ),
            ),
          ),
          'scoreboard_metrics' => 
          array (
            'name' => 'Scoreboard Metrics',
            'description' => 'Show some impressive metrics about the business.',
            'icon' => 'icon-quote-right',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\ScoreboardMetrics',
              ),
            ),
          ),
          'team_leaders' => 
          array (
            'name' => 'Team Leaders',
            'description' => 'Display the team members.',
            'icon' => 'octo-icon-comment',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\TeamLeaders',
              ),
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'page_blocks',
  ),
);