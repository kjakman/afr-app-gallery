<?php

$__CLASSES= array_merge($__CLASSES, array(

//   CLASS                          USER_LEVEL  GROUP TABLE KEY FLAGS DESCRIPTOR SORT  PARENT_CLASS CLASS_SITE_ID
//                                    0          1     2     3     4        5     6      7              8

// gallery    
    'plugin' =>               array(USER_LEVEL_STAFF,  'gallery', '', '', 0, 'name', '', ''),
    'gallery' =>              array(USER_LEVEL_USER,   'gallery', '', '', 0, 'title', 'rank ', ''),
    'media_collection' =>     array(USER_LEVEL_USER,   'gallery', '', '', 0, 'title', 'media_collection.rank ', ''),
    'media_collection_type' =>array(USER_LEVEL_USER,   'gallery', '', '', NF_CACHE_ASSOC, 'name', 'name ', ''),
    'media_collection_map' => array(USER_LEVEL_USER,   'gallery', '', '', 0, '', 'rank', ''),

// artwork
    'artwork' =>                array(USER_LEVEL_OWNER,  'artwork', '', '', NF_LOG, 'title', 'artwork.id desc', ''),
    'artwork_type' =>           array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'artwork_status' =>         array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    
    'exhibition_type' =>           array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),

// minisite    
    'minisite' =>             array(USER_LEVEL_ADMIN, 'site', '', '', NF_CACHE|NF_COMPACT_LIST, 'name', '', ''),
    'minisite_page_type' =>   array(USER_LEVEL_ADMIN, 'site', '', '', NF_CACHE|NF_COMPACT_LIST, 'name', '', ''),
    'minisite_page' =>       array(USER_LEVEL_ADMIN, 'site', '', '', NF_CACHE|NF_COMPACT_LIST, 'page_name', '', ''),
    'minisite_layout' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),

));


// extensions to existing classes
$__CLASS_ATTRIBUTES["user_profile"] = array_merge($__CLASS_ATTRIBUTES["user_profile"], array(                                
     'gallery_name'     => array('Gallery name'  ,     'str',      '', 0, 50 ),
     'gallery_solo_shows'   => array('Solo Shows'  ,      'html',     '', 0),
     'gallery_group_shows'  => array('Group Shows'  ,      'html',     '', 0),
     'press'                => array('Press'  ,      'html',     '', 0),
     'show_awards'          => array('Show Awards'     ,     'int',      0, 0, 6),
     'awards'=>        array('Awards',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
     'artist'  =>       array('artist',      'bool',     1,  AF_HIDE_ADD, 1),
     'working_hours'=>        array('Working Hours',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
     'social'=>        array('Social',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
     'facebook'=>      array('Facebook',     'str',  '', AF_SEARCHABLE, 64 ),
     'instagram'=>     array('Instagram',    'str',  '', AF_SEARCHABLE, 64 ),
     'twitter'=>       array('Twitter',      'str',  '', AF_SEARCHABLE, 64 ),
     'contact'=>        array('More Contacts',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
     
));


$__CLASS_ATTRIBUTES = array_merge($__CLASS_ATTRIBUTES, array(                                

  "plugin" => 
  array(
     'id'=>                array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 3),
     'active' =>                   array('Active?',           'bool',        1, AF_HIDE_LIST|AF_READONLY),     
     'created'=>           array('Created',           'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_ADD),
     'timestamp'=>         array('Timestamp',         'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_ADD, 14 ),
     'client_id'=>         array('Client',    			  'many2one', ATT_DEFAULT_CLIENT_ID, AF_OBLIGATORY|AF_READONLY|AF_HIDE, 'client'),
     'site_id'=>           array('Site',              'many2one',   ATT_DEFAULT_SITE_ID, AF_HIDE_LIST|AF_HIDE_ADD|AF_LOG, 'site'),
     'user_id'=>           array('User',              'link', ATT_DEFAULT_USER_ID, AF_OBLIGATORY|AF_HIDE_ADD, 'user'),
     'share_user_id'=>     array('Shared by',         'link', ATT_DEFAULT_USER_ID, AF_HIDE_ADD, 'user'),
     'parent_type'      => array('object type',       'str',      ATT_DEFAULT_NULL, AF_HIDE_ADD, 50),
     'parent_id'        => array('object id',        'int',      ATT_DEFAULT_NULL, AF_HIDE_ADD),
     'name'             => array('Name',              'str',      '', 0, 255),
     'title'            => array('Title',             'str',      '', 0, 255),
     'subtitle'         => array('Subtitle',          'str',      '', 0, 128),
     'description'      => array('Description',       'text',     '', AF_HIDE_ADD),
     'language'=>          array('Language',          'many2one',  ATT_DEFAULT_LANG, AF_HIDE_LIST|AF_HIDE_ADD, 'language'),
     'count'            => array('count',             'int',      0, AF_HIDE_ADD),
     'type'             => array('type',              'valSelect', 0, AF_OBLIGATORY, $shareTypeArray),
     'show_title'       => array('Show title?',        'valSelect', 0, AF_HIDE_LIST, $positionArray),
     'image_index'     => array('plugin image index',  'int',      0, AF_HIDE_ADD),
     'style'            => array('style',             'text',     '', 0),
     'link'             => array('link',              'str',      '', AF_HIDE_ADD, 255),
     'image_size'       => array('size',              'str',      '', AF_HIDE_ADD, 16),
     'hover_effect'     => array('hover_effect',      'str',      '', 0, 32),

     'plugin_options'   => array('Plugin Options',    'json',     '', AF_HIDE_ADD),
     'popup_options'   => array('Popup Options',    'json',     '', AF_HIDE_ADD),

     /** don't include URL or plug-in will break: change to full_url */     
     'full_url'         => array('full url',          'str',      '', AF_HIDE_ADD, 255),
     'shorturl'         => array('shorturl',          'str',      '', AF_HIDE_ADD, 50),
     'data'             => array('data',              'text',     '', AF_HIDE_ADD),
     'title_image'      => array('Title image',       'str', 0, AF_HIDE_LIST, 200),
     'title_image_json'  => array('Image (json)',      'json',     '', 0),
     'container_class'  => array('Container Class',   'str', '', AF_HIDE_LIST, 200),
     'container_tag'  => array('Container Tag',   'str', '', AF_HIDE_LIST, 16),
     'object_tag'  => array('Object Tag',   'str', '', AF_HIDE_LIST, 16),
     'object_class'  => array('Object Class',   'str', '', AF_HIDE_LIST, 200),
  ),

  "artwork_type" => 
  array(
     'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 2),
     'name'=>          array('Name',              'str',   '', 1, 20 ),
     'description'=>   array('Description',       'str',   '', 1, 200 ),
  ),

  "artwork_status" => 
  array(
     'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 2),
     'name'=>          array('Name',              'str',   '', 1, 20 ),
     'description'=>   array('Description',       'str',   '', 1, 200 ),
  ),

  "exhibition_type" => 
  array(
     'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 2),
     'name'=>          array('Name',              'str',   '', 1, 20 ),
     'description'=>   array('Description',       'str',   '', 1, 200 ),
  ),
  
  "media_collection_type" => 
  array(
     'id'=>            	    array('ID',                	'id',   '', AF_PRIMARY|AF_AUTOINCREMENT, 11),
     'name'=>               array('Name',               'str',   '', AF_OBLIGATORY|AF_SEARCHABLE, 100),
     'description'=>        array('Description',        'str',   '', 0, 100),
  ),

  "media_collection" => 
  array(
     'id'=>                array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
     'created'=>           array('Created',           'datetime',   ATT_DEFAULT_NOW, AF_HIDE_LIST, 6 ),
     'timestamp'=>         array('Timestamp',         'timestamp',   ATT_DEFAULT_NOW, AF_HIDE|AF_READONLY, 14 ),
     'active'=>            array('Active',            'bool',   1, 0),
     'public'=>            array('Public',            'bool',   1, 0),
     'show_plugin'=>       array('Show Plugin',       'bool',   1, 0),
     'show_website'=>      array('Show Website',      'bool',   1, 0),
     'rank'=>              array('Rank',              'int', 0, AF_HIDE_ADD, 3),
     //'type'=>        array('Type',                'one2one', 0,   AF_HIDE_LIST|AF_OBLIGATORY|AF_CASCADE_DELETE|AF_ONE2ONE_INTEGRATE, 'media_collection_type'),

     'type' =>             array('Collection Type',   'many2one', MEDIA_COLLECTION_TYPE_EXHIBITION, AF_SEARCHABLE, 'media_collection_type'), // collection, exhibition
     'subtype' =>          array('Exhibition Subtype', 'many2one', 0, AF_SEARCHABLE, 'exhibition_type'), // art faire, virtual exhibition, etc
     'site_id'=>           array('Site',              'link',   ATT_DEFAULT_SITE_ID, AF_READONLY|AF_HIDE_ADD, 'site'),
     'user_id'=>           array('User',              'link',  ATT_DEFAULT_USER_ID, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
     'artist_id'=>         array('Artist',            'link',  ATT_DEFAULT_NULL, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
   //'artist_ids'=>        array('Artists',           'json',  ATT_DEFAULT_NULL, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),

     //'artist_ids'=>        array('Artist name',                'one2bala', 0,   AF_HIDE_LIST|AF_OBLIGATORY|AF_CASCADE_DELETE|AF_ONE2ONE_INTEGRATE, 'user_profile'),
     'artist_ids'=>        array('Artists',           'json',  ATT_DEFAULT_NULL, AF_SEARCHABLE|AF_HIDE_ADD),
    
     'curator_id'           =>array('Curator Id'    , 'link', ATT_DEFAULT_NULL, AF_HIDE_LIST|AF_HIDE_ADD|AF_READONLY, 'user'),
     'title'=>             array('Title',             'str',   '', AF_OBLIGATORY, 255),
//     'title_image'=>       array('Title Image',       'media',  ATT_DEFAULT_NULL, 0, 'media'),
     'title_image'=>       array('Title image',       'media',   '', 0, $std_image_options),
     'title_image_json'  => array('Image (json)',      'json',     '', 0),

     'related_media'            => array('Media',             'media',     '', 0, $gallery_media_options),
     'related_media_json'       => array('Media (json)',      'json',     '', 0),
     
     'language'=>          array('Language',    			'many2one', ATT_DEFAULT_LANGUAGE, AF_SEARCHABLE, 'language'),
     'description'=>       array('Description',       'html',  '', AF_HIDE_LIST),
//     'json' =>             array('Json',              'json',  '', AF_READONLY),
//     'images'=>            array('Images',            'many2many', '', AF_HIDE_LIST, 'media_collection_map'),
     'start_date'=>         array('From',              'date',   '', AF_LOG),
     'end_date'=>           array('To',                'date',   '', AF_LOG),

     'location_id'=>        array('Location',          'link',   0, AF_READONLY|AF_HIDE_ADD, 'location'),
     'address_formatted'=>  array('Formatted Address', 'text',   '', AF_HIDE_LIST),
     'event_id'=>           array('Event',             'link',   0, AF_READONLY|AF_HIDE_ADD, 'event'),

     'settings'=>        array('Settings',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
     'title_image_option'  =>       array('Title Image Radio button',         'bool',     1,  AF_HIDE_ADD, 0),
     
  ),
  
  "media_collection_map" => 
  array(
     'id'=>                    array('ID',              'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
     'created'=>           array('Created',           'datetime',   ATT_DEFAULT_NOW, AF_HIDE_LIST, 6 ),
//     'timestamp'=>         array('Timestamp',         'timestamp',   ATT_DEFAULT_NOW, AF_HIDE|AF_READONLY, 14 ),
     'site_id'=>           array('Site',              'link',   ATT_DEFAULT_SITE_ID, AF_READONLY|AF_HIDE_ADD, 'site'),
     'user_id'=>           array('User',              'link',  ATT_DEFAULT_USER_ID, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
     'artist_id'=>         array('Artist',            'link',  ATT_DEFFAUL_NULL, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
     'curator_id'=>        array('Curator',            'link',  ATT_DEFAULT_NULL, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),

     'active'=>            array('Active',            'bool',   1, 0),
     'rank'=>              array('Rank',              'int', 0, AF_HIDE_ADD, 3),
     'media_collection_id'=> array('Collection',      'link',   '', AF_OBLIGATORY, 'media_collection'),
     'collection_type'   => array('Collection Type', 'link',   0, 0, 'media_collection_type'),
     'media_id'=>            array('Media',           'link',   '', AF_OBLIGATORY, 'media'),
     'artwork_id'=>          array('Artwork',         'link',   ATT_DEFAULT_NULL, 0, 'artwork'),
     'name'=>                array('Name',            'str',   '', AF_SEARCHABLE, 128),
     'original_year'=>       array('Year',            'str',   '', AF_SEARCHABLE, 4),
     'original_technique'=>  array('Technique',       'str',   '', AF_SEARCHABLE, 255),
     'artist_name'=>         array('Artist Name',     'str',   '', AF_SEARCHABLE, 50),
     'curator_name'=>        array('Curator Name',    'str',   '', AF_SEARCHABLE, 50),
  ),

  "gallery" => 
  array(
     'id'=>                array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
     'created'=>           array('Created',           'datetime',   ATT_DEFAULT_NOW, AF_HIDE_LIST, 6 ),
     'timestamp'=>         array('Timestamp',         'timestamp',   ATT_DEFAULT_NOW, AF_HIDE|AF_READONLY, 14 ),
     'active'=>            array('Active',            'bool',   1, 0),
     'rank'=>              array('Rank',              'int', 0, AF_HIDE_ADD, 3),
     'site_id'=>           array('Site',              'link',   ATT_DEFAULT_SITE_ID, AF_READONLY|AF_HIDE_ADD, 'site'),
     'user_id'=>           array('User',              'link',  ATT_DEFAULT_USER_ID, AF_SEARCHABLE|AF_HIDE_ADD|AF_READONLY, 'user'),
     'parent_id'=>         array('Parent',            'link',   0, AF_READONLY|AF_HIDE_ADD, 'gallery'),
     'title'=>             array('Title',             'str',   '', AF_OBLIGATORY, 255),
     //'title_index'=>       array('Title Image Index', 'int',   0, 0, 3),
     'title_image'=>       array('Title Image',       'link',  ATT_DEFAULT_NULL, 0, 'media'),
     'title_image_json'  => array('Image (json)',      'json',     '', 0),
     'description'=>       array('Description',       'html',  '', AF_HIDE_LIST),
     'image'            => array('Title image',       'media',     '', 0, $std_image_options),
     'media'            => array('Media',             'media',     '', 0, $gallery_media_options),
     'path'             => array('Path',              'str', 0, AF_HIDE_LIST, 255),
     
  ),

  "minisite" => 
  array(
     'id'=>                 array('ID',                 'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 3),
     'created'=>            array('Created',            'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
     'timestamp'=>          array('Timestamp',          'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
     'active'  =>           array('Active?',            'bool',     1,  AF_HIDE_ADD, 0),
     'site_id'=>            array('Site',               'link',  0, AF_SEARCHABLE|AF_HIDE, 'site'),
     'client_id'=>          array('Client',    			'link', ATT_DEFAULT_CLIENT_ID, AF_OBLIGATORY|AF_READONLY_EDIT, 'client'),
     'user_id' =>           array('User ID',            'link', ATT_DEFAULT_USER_ID, 0, 'user'),
     'admin_users' =>       array('Admin Users',        'json', '', 0),
     'type'=>               array('Type',               'str',  '', AF_OBLIGATORY|AF_SEARCHABLE, 32 ),
     'name'=>               array('Name',               'str',  '', AF_OBLIGATORY|AF_SEARCHABLE, 128 ),
     'sub_title'=>          array('Sub Title',          'str',  '', AF_SEARCHABLE, 128 ),
     'description'=>        array('Description',          'str',  '', AF_SEARCHABLE, 128 ),
     'url'=>                array('Url',                'str',  '', AF_OBLIGATORY|AF_SEARCHABLE, 64 ),
     'domain'=>             array('Domain',             'str',  '', AF_SEARCHABLE, 128 ),
     'email_address'=>      array('Email',              'email',  '', AF_SEARCHABLE|AF_HIDE_LIST, 128),
     'languages'=>          array('Languages',    	    'json', 'en', AF_OBLIGATORY, 'language', array('active' => 1)),
     'default_language'=>   array('Language',    		    'valSelect', 'en', AF_OBLIGATORY|AF_SEARCHABLE, $langArray),
     //'social' =>            array('Social',             'json', '', 0),
     'data' =>              array('Data',               'json', '', 0),
     'template' =>          array('Template',           'str', '', 128),
     'logo'   =>            array('Logo',               'image',   '', AF_HIDE_LIST, 128),
     'logo_small' =>        array('Logo - Small',       'image',   '', AF_HIDE_LIST, 128),

     'text_color'=>         array('Text Color',         'color',    '', AF_HIDE_LIST, 6),
     'bg_color'=>           array('BG Color',           'color',    '', AF_HIDE_LIST, 6),
     'theme_color1'=>       array('Theme Color 1',      'color',    '', AF_HIDE_LIST, 6),
     'theme_color2'=>       array('Theme Color 2',      'color',    '', AF_HIDE_LIST, 6),
     'font'=>               array('Font',               'str',  '', 0, 64 ),
     'css'=>                array('Css',                'str',  '', 0, 64 ),
     'location_id'=>        array('Location',           'link',   0, AF_HIDE_ADD, 'location'),
     'footer'=>             array('Footer',             'str',  '', AF_SEARCHABLE, 128 ),
     'show_title'  =>       array('Show title',         'bool',     1,  AF_HIDE_ADD, 0),
     'show_subtitle'  =>    array('Show subtitle',      'bool',     1,  AF_HIDE_ADD, 0),
     'show_timing'  =>      array('Show timing',        'bool',     1,  AF_HIDE_ADD, 0),
     'show_social'  =>      array('Show social',        'bool',     1,  AF_HIDE_ADD, 0),
   ),

   "minisite_page_type" => 
   array(
      'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 4),
      'name'=>          array('Name',              'str',   '', 1, 32 ),
   ),

    "minisite_page" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
      'created'=>            array('Created',          'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'timestamp'=>          array('Timestamp',        'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
      'active'  =>           array('Active?',          'bool',     1,  AF_HIDE_ADD, 0),
      'minisite_id'=>        array('Minisite',         'link',  0, AF_SEARCHABLE|AF_HIDE, 'minisite'),
      'site_id'=>            array('Site',             'link',  0, AF_SEARCHABLE|AF_HIDE, 'site'),
      'client_id'=>          array('Client',           'link', ATT_DEFAULT_CLIENT_ID, AF_OBLIGATORY|AF_READONLY_EDIT, 'client'),
      'user_id' =>           array('User ID',          'link', ATT_DEFAULT_USER_ID, 0, 'user'),
      'type' =>              array('Type',             'many2one', 0, AF_LOG|AF_SEARCHABLE , 'minisite_page_type'),
      'menu_title'=>         array('Menu Title',  'str',  '', AF_OBLIGATORY|AF_SEARCHABLE, 128 ),
      'page_title'=>         array('Page Title',  'str',  '', AF_OBLIGATORY|AF_SEARCHABLE, 128 ),
      'slug'=>               array('Slug',             'str',   '', 0, 128 ),
      'search'=>             array('Search',           'json',   ''),
      'row_order'=>          array('Row Order',        'int',   '', 0, 11 ),
      'data'=>               array('data',              'json',     '', AF_HIDE_ADD),
   ),

   "minisite_layout" => 
   array(
      'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 2),
      'name'=>          array('Name',              'str',   '', 1, 20 ),
   ),
   
));
