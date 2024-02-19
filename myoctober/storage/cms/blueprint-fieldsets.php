<?php return array (
  '6947ff28-b660-47d7-9240-24ca6d58aeae' => 
  array (
    'name' => 'Author',
    'handle' => 'Blog\\Author',
    'contentUuid' => '6947ff28-b660-47d7-9240-24ca6d58aeae',
    'fields' => 
    array (
      'avatar' => 
      array (
        'label' => 'Avatar',
        'type' => 'mediafinder',
        'mode' => 'image',
      ),
      'role' => 
      array (
        'label' => 'Role',
        'type' => 'text',
      ),
      'about' => 
      array (
        'label' => 'About',
        'type' => 'textarea',
      ),
      '_social_links' => 
      array (
        'type' => 'mixin',
        'label' => 'Social Links',
        'source' => 'Fields\\SocialLinks',
        'tab' => 'Social',
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
  array (
    'name' => 'Category',
    'handle' => 'Blog\\Category',
    'contentUuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6:regular_post' => 
  array (
    'name' => 'Regular Post',
    'handle' => 'regular_post',
    'contentUuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'fields' => 
    array (
      'content' => 
      array (
        'tab' => 'Edit',
        'label' => 'Content',
        'type' => 'richeditor',
        'span' => 'adaptive',
      ),
      '_blog_post_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Blog\\PostContent',
      ),
    ),
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6:markdown_post' => 
  array (
    'name' => 'Markdown Post',
    'handle' => 'markdown_post',
    'contentUuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'fields' => 
    array (
      'content' => 
      array (
        'tab' => 'Edit',
        'label' => 'Content',
        'type' => 'markdown',
        'span' => 'adaptive',
      ),
      '_blog_post_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Blog\\PostContent',
      ),
    ),
  ),
  'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1' => 
  array (
    'name' => 'About Page',
    'handle' => 'Page\\About',
    'contentUuid' => 'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1',
    'fields' => 
    array (
      'block_builder' => 
      array (
        'type' => 'mixin',
        'source' => 'Page\\Blocks',
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  '339b11b7-69ad-43c4-9be1-6953e7738827' => 
  array (
    'name' => 'Article',
    'handle' => 'Page\\Article',
    'contentUuid' => '339b11b7-69ad-43c4-9be1-6953e7738827',
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'tab' => 'Edit',
        'type' => 'richeditor',
        'span' => 'adaptive',
      ),
      'banner' => 
      array (
        'label' => 'Banner',
        'type' => 'fileupload',
        'mode' => 'image',
        'maxFiles' => 1,
      ),
      'show_in_toc' => 
      array (
        'label' => 'Show in TOC',
        'comment' => 'Include this article in the table of contents',
        'type' => 'checkbox',
      ),
      'summary_text' => 
      array (
        'label' => 'Summary Text',
        'type' => 'textarea',
        'size' => 'small',
      ),
      'gallery' => 
      array (
        'label' => 'Gallery',
        'type' => 'fileupload',
        'mode' => 'image',
      ),
      'external_links' => 
      array (
        'label' => 'External Links',
        'tab' => 'Links',
        'type' => 'repeater',
        'form' => 
        array (
          'fields' => 
          array (
            'link_text' => 
            array (
              'label' => 'Link Text',
              'span' => 'auto',
            ),
            'link_url' => 
            array (
              'label' => 'Link URL',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  '6743a1c3-3e57-4cfa-a886-e0c0a277fd71' => 
  array (
    'name' => 'Sitemap',
    'handle' => 'Site\\Sitemap',
    'contentUuid' => '6743a1c3-3e57-4cfa-a886-e0c0a277fd71',
    'fields' => 
    array (
      'reference' => 
      array (
        'label' => 'Reference',
        'type' => 'pagefinder',
      ),
      'priority' => 
      array (
        'label' => 'Priority',
        'commentAbove' => 'The priority of this URL relative to other URLs on your site.',
        'type' => 'radio',
        'inlineOptions' => true,
        'options' => 
        array (
          '0.1' => '0.1',
          '0.2' => '0.2',
          '0.3' => '0.3',
          '0.4' => '0.4',
          '0.5' => '0.5',
          '0.6' => '0.6',
          '0.7' => '0.7',
          '0.8' => '0.8',
          '0.9' => '0.9',
          '1.0' => '1.0',
        ),
      ),
      'changefreq' => 
      array (
        'commentAbove' => 'How frequently the page is likely to change.',
        'label' => 'Change Frequency',
        'type' => 'radio',
        'inlineOptions' => true,
        'options' => 
        array (
          'always' => 'Always',
          'hourly' => 'Hourly',
          'daily' => 'Daily',
          'weekly' => 'Weekly',
          'monthly' => 'Monthly',
          'yearly' => 'Yearly',
          'never' => 'Never',
        ),
      ),
      'nesting' => 
      array (
        'label' => 'Include nested items',
        'shortLabel' => 'Nesting',
        'comment' => 'Nested items could be generated dynamically by supported page references.',
        'type' => 'checkbox',
      ),
      'replace' => 
      array (
        'label' => 'Replace this item with its generated children',
        'comment' => 'Use this checkbox to push generated menu items to the same level with this item. This item itself will be hidden.',
        'type' => 'checkbox',
        'column' => false,
        'scope' => false,
        'trigger' => 
        array (
          'action' => 'disable|empty',
          'field' => 'nesting',
          'condition' => 'unchecked',
        ),
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  '3328c303-7989-462e-b866-27e7037ba275' => 
  array (
    'name' => 'Blog Settings',
    'handle' => 'Blog\\Config',
    'contentUuid' => '3328c303-7989-462e-b866-27e7037ba275',
    'fields' => 
    array (
      'blog_name' => 
      array (
        'label' => 'Blog Name',
        'tab' => 'General',
        'placeholder' => 'Latest News',
      ),
      'about_this_blog' => 
      array (
        'label' => 'About This Blog',
        'comment' => 'Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.',
        'type' => 'textarea',
        'size' => 'small',
        'tab' => 'General',
      ),
      '_section1' => 
      array (
        'label' => 'Social Links',
        'type' => 'section',
        'tab' => 'General',
      ),
      '_social_links' => 
      array (
        'type' => 'mixin',
        'source' => 'Fields\\SocialLinks',
        'tab' => 'General',
      ),
    ),
    'validation' => NULL,
  ),
);