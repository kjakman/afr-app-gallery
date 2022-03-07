<?php

$__CLASSES= array_merge($__CLASSES, array(

//   CLASS                          USER_LEVEL  GROUP TABLE KEY FLAGS DESCRIPTOR SORT  PARENT_CLASS CLASS_SITE_ID
//                                    0          1     2     3     4        5     6      7              8

// gallery    
    'plugin' =>               array(USER_LEVEL_STAFF,  'gallery', '', '', 0, 'name', '', ''),
    'media_folder' =>         array(USER_LEVEL_USER,   'gallery', '', '', 0, 'title', 'rank ', ''),
    'media_tags' =>           array(USER_LEVEL_USER,   'gallery', '', '', 0, 'tags', '', ''),
    'gallery' =>              array(USER_LEVEL_USER,   'gallery', '', '', 0, 'title', 'rank ', ''),
    'media_collection' =>     array(USER_LEVEL_USER,   'gallery', '', '', 0, 'title', 'media_collection.rank ', ''),
    'media_collection_type' =>array(USER_LEVEL_USER,   'gallery', '', '', NF_CACHE_ASSOC, 'name', 'name ', ''),
    'media_collection_map' => array(USER_LEVEL_USER,   'gallery', '', '', 0, '', 'rank', ''),
    'exhibition_map' =>       array(USER_LEVEL_USER,   'gallery', '', '', 0, '', '', ''),

// artwork
    'artwork' =>                array(USER_LEVEL_OWNER,  'artwork', '', '', NF_LOG, 'title', 'artwork.id desc', ''),
    'artwork_type' =>           array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'artwork_status' =>         array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'artwork_related_type' =>  array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'artwork_media' =>  array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'exhibition_type' =>           array(USER_LEVEL_SYSTEM, 'artwork', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),

// minisite    
    'minisite' =>             array(USER_LEVEL_ADMIN, 'site', '', '', NF_CACHE|NF_COMPACT_LIST, 'name', '', ''),
    'minisite_page_type' =>   array(USER_LEVEL_ADMIN, 'site', '', '', NF_CACHE|NF_COMPACT_LIST, 'name', '', ''),
    'minisite_page' =>       array(USER_LEVEL_ADMIN, 'site', '', '', NF_CACHE|NF_COMPACT_LIST, 'page_name', '', ''),
    'minisite_layout' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'minisite_font' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'minisite_menu' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'minisite_parent_layout' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'minisite_tpl' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'minisite_level1' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),
    'minisite_hover' =>      array(USER_LEVEL_SYSTEM, 'site', '', '', NF_CACHE_ASSOC, 'name', 'id', ''),

// crud
    'cruds' =>                array(USER_LEVEL_OWNER,  'crud', '', '', 0, 'name', '', ''),  
    'company' =>                array(USER_LEVEL_OWNER,  'company', '', '', 0, 'name', '', ''),  

));


// extensions to existing classes
    $__CLASS_ATTRIBUTES["user_profile"] = array_merge($__CLASS_ATTRIBUTES["user_profile"], array(                                
        'gallery_name'     => array('Gallery name'  ,     'str',      '', 0, 50 ),
        'gallery_solo_shows'   => array('Solo Shows'  ,      'html',     '', 0),
        'gallery_group_shows'  => array('Group Shows'  ,      'html',     '', 0),
        'press'                => array('Press'  ,      'html',     '', 0),
        'awards'=>        array('Awards',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
        'artist'  =>       array('artist',      'bool',     1,  AF_HIDE_ADD, 1),
        'working_hours'=>        array('Working Hours',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
        'social'=>        array('Social',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
        'contact'=>        array('More Contacts',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
        'language'=>          array('Language',                'many2one', ATT_DEFAULT_LANGUAGE, AF_SEARCHABLE, 'language'),
     
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

  "artwork_related_type" =>
  array(
     'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 2),
     'name'=>          array('Name',              'str',  '', 1, 20 ),
     'rank'=>          array('Rank',              'int',  0, AF_HIDE_ADD, 3 ),
  ),

  "artwork_media" =>
  array(
     'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 2),
     'user_id'=>       array('User',              'link',  ATT_DEFAULT_USER_ID, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
     'artwork_id'=>    array('Artwork Id',        'int', 0, AF_HIDE_ADD, 10),
     'type'=>          array('Type',              'int',  0, AF_OBLIGATORY|AF_HIDE_ADD, 3),
     'description'=>   array('description',       'text',  AF_OBLIGATORY,   '', 0),
     'media' =>        array('Media',             'media',      '', 0, $gallery_media_options),
     'row_order'=>     array('Order',              'int',  0, AF_HIDE_ADD, 11),
     'created'=>       array('Created',           'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_ADD),
     'modified'=>      array('Modified',         'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_ADD, 14 ),
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
            'description'=>      array('content','text','', AF_HIDE_LIST),
            //     'json' =>             array('Json',              'json',  '', AF_READONLY),
            //     'images'=>            array('Images',            'many2many', '', AF_HIDE_LIST, 'media_collection_map'),
            'start_date'=>         array('From',              'date',   '', AF_LOG),
            'end_date'=>           array('To',                'date',   '', AF_LOG),
            'exhibition_sequence'=>           array('To',                'date',   '', AF_LOG),
            'location_id'=>        array('Location',          'link',   0, AF_READONLY|AF_HIDE_ADD, 'location'),
            'address_formatted'=>  array('Formatted Address', 'text',   '', AF_HIDE_LIST),
            'event_id'=>           array('Event',             'link',   0, AF_READONLY|AF_HIDE_ADD, 'event'),

            'settings'=>        array('Settings',           'json',  '', AF_SEARCHABLE|AF_HIDE_ADD),
            'title_image_option'  =>       array('Title Image Radio button',         'bool',     1,  AF_HIDE_ADD, 0),
            'video_status'=>array('video_status',  'int', AF_SEARCHABLE|AF_READONLY_EDIT), 
            'video'=>             array('video',             'str',   '', AF_SEARCHABLE, 255),
            'video_type'=>array('video_type', 'int', 0, AF_HIDE_ADD, 3), //1=>You tube, 2=>video
            'auto_play'=>array('auto_play',  'int', AF_SEARCHABLE|AF_READONLY_EDIT), 
            'mute'=>array('mute',  'int', AF_SEARCHABLE|AF_READONLY_EDIT), 
            'loop'=>array('loop',  'int', AF_SEARCHABLE|AF_READONLY_EDIT), 
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
            'type'  =>              array('Type',            'link',   0, 0, 'artwork_related_type'),
            'media_id'=>            array('Media',           'link',   '', 0, 'media'),
            'artwork_id'=>          array('Artwork',         'link',   ATT_DEFAULT_NULL, 0, 'artwork'),
            'name'=>                array('Name',            'str',   '', AF_SEARCHABLE, 128),
            'description'=>         array('Description',     'str',   '', AF_SEARCHABLE, 128),
            'original_year'=>       array('Year',            'str',   '', AF_SEARCHABLE, 4),
            'original_technique'=>  array('Technique',       'str',   '', AF_SEARCHABLE, 255),
            'artist_name'=>         array('Artist Name',     'str',   '', AF_SEARCHABLE, 50),
            'curator_name'=>        array('Curator Name',    'str',   '', AF_SEARCHABLE, 50),
        ),
  
    "exhibition_map" => 
    array(
       'id'=>                    array('ID',              'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
   //    'created'=>           array('Created',           'datetime',   ATT_DEFAULT_NOW, AF_HIDE_LIST, 6 ),
  //     'timestamp'=>         array('Timestamp',         'timestamp',   ATT_DEFAULT_NOW, AF_HIDE|AF_READONLY, 14 ),
       'site_id'=>           array('Site',              'link',   ATT_DEFAULT_SITE_ID, AF_READONLY|AF_HIDE_ADD, 'site'),
       'user_id'=>           array('User',              'link',  ATT_DEFAULT_USER_ID, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
       'artist_id'=>         array('Artist',            'link',  ATT_DEFFAUL_NULL, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
       'curator_id'=>        array('Curator',            'link',  ATT_DEFAULT_NULL, AF_SEARCHABLE|AF_HIDE_ADD, 'user'),
       'active'=>            array('Active',            'bool',   1, 0),      
       'media_collection_id'=> array('Collection',      'link',   '', AF_OBLIGATORY, 'media_collection'),
       'media_id'=>            array('Media',           'link',   '', AF_OBLIGATORY, 'media'),
       'page_id'=>             array('Minisite_page',         'link',   ATT_DEFAULT_NULL, 0, 'artwork'),
       'name'=>                array('Name',            'str',   '', AF_SEARCHABLE, 128),
       'type'=>                array('Type',            'str',   '', AF_SEARCHABLE, 128),
       'rank'=>              array('Rank',              'int', 0, AF_HIDE_ADD, 3),
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
     'name'=>             array('Name',             'str',   '', AF_OBLIGATORY, 255),
     //'title_index'=>       array('Title Image Index', 'int',   0, 0, 3),
     'title_image'=>       array('Title Image',       'link',  ATT_DEFAULT_NULL, 0, 'media'),
     'title_image_json'  => array('Image (json)',      'json',     '', 0),
     'description'=>       array('Description',       'html',  '', AF_HIDE_LIST),
     'image'            => array('Title image',       'media',     '', 0, $std_image_options),
     'media'            => array('Media',             'media',     '', 0, $gallery_media_options),
     'path'             => array('Path',              'str', 0, AF_HIDE_LIST, 255),
     'type'             => array('Type',              'str', 0, AF_HIDE_LIST, 10),
     
  ),

  "media_folder" => 
  array(
     'id'=>                array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
     'created'=>           array('Created',           'datetime',   ATT_DEFAULT_NOW, AF_HIDE_LIST, 6 ),
     'timestamp'=>         array('Timestamp',         'timestamp',   ATT_DEFAULT_NOW, AF_HIDE|AF_READONLY, 14 ),
     'active'=>            array('Active',            'bool',   1, 0),
     'site_id'=>           array('Site',              'link',   ATT_DEFAULT_SITE_ID, AF_READONLY|AF_HIDE_ADD, 'site'),
     'user_id'=>           array('User',              'link',  ATT_DEFAULT_USER_ID, AF_SEARCHABLE|AF_HIDE_ADD|AF_READONLY, 'user'),
     'filename'=>             array('Name',             'str',   '', AF_OBLIGATORY, 255),
     'tags'=>              array('tags',       'html',  '', AF_HIDE_LIST),
     'path'=>              array('Path',              'str', 0, AF_HIDE_LIST, 255),
     'type'=>              array('Type',              'str', 0, AF_HIDE_LIST, 25),
     'rank'=>              array('Rank',              'int', 0, AF_HIDE_ADD, 4),
  ),

  "media_tags" => 
  array(
     'id'=>                array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
     'created'=>           array('Created',           'datetime',   ATT_DEFAULT_NOW, AF_HIDE_LIST, 6 ),
     'timestamp'=>         array('Timestamp',         'timestamp',   ATT_DEFAULT_NOW, AF_HIDE|AF_READONLY, 14 ),
     'active'=>            array('Active',            'bool',   1, 0),
     'name'=>              array('Name',              'str',  '', AF_HIDE_LIST),
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
     'sub_title'=>          array('Sub Title',          'str',  '', AF_SEARCHABLE, 60 ),
     'meta_title'=>         array('Meta Title',         'str',  '', AF_SEARCHABLE, 60 ),
     'description'=>        array('Description',        'str',  '', AF_SEARCHABLE, 128 ),
     'url'=>                array('Url',                'str',  '', AF_OBLIGATORY|AF_SEARCHABLE, 64 ),
     'domain'=>             array('Domain',             'str',  '', AF_SEARCHABLE, 128 ),
     'url_slug'=>           array('Url Slug',           'str',  '', AF_SEARCHABLE, 128 ),
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
     'font_type' =>         array('Fonts',              'link',  0, AF_SEARCHABLE|AF_HIDE, 'minisite_font'),
     'menu_type' =>         array('Menu Style',         'link',  0, AF_SEARCHABLE|AF_HIDE, 'minisite_menu'),
     'hover_type' =>        array('Hover Style',        'link',  0, AF_SEARCHABLE|AF_HIDE, 'minisite_animation'),
     'hover_text' =>        array('Hover Text',        'link',  0, AF_SEARCHABLE|AF_HIDE, ''),
     'art_animation' =>     array('Art Animation',      'link',  0, AF_SEARCHABLE|AF_HIDE, 'Art_animation'),
     'icon_size' =>         array('Icon Size',          'int',     0,  AF_HIDE_ADD, 3),
     'title_size' =>        array('Site Title Size',    'int',     0,  AF_HIDE_ADD, 3),
     'fixed_header'  =>     array('Fixed Header',       'bool',     1,  AF_HIDE_ADD, 0),
     'show_homemenu'  =>    array('Show Homepage menu', 'bool',     1,  AF_HIDE_ADD, 0),
     'footer_data' =>       array('Footer data',        'bool',     1,  AF_HIDE_ADD, 0),
     'connect_domain' =>    array('Connect Domain',     'bool',     0,  AF_HIDE_ADD, 0),
   ),

   "minisite_page_type" => 
   array(
      'id'=>            array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 4),
      'name'=>          array('Name',              'str',   '', 1, 32 ),
      'tab'=>           array('tab',              'str',   '', 1, 32 ),
      'row_order'=>     array('Row Order',            'int',   '', 0, 10 ),
      'active'  =>           array('Active?',            'bool',     1,  AF_HIDE_ADD, 0),
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
      'page_title'=>         array('Page Title',  'str',  '', AF_SEARCHABLE, 60 ),
      'secondary_title'=>    array('Secondary Title',  'str',  '', AF_SEARCHABLE, 60 ),
      'slug'=>               array('Slug',             'str',   '', 0, 128 ),
      'search'=>             array('Search',           'json',   ''),
      'search1'=>            array('Search1',           'json',   ''),
      'row_order'=>          array('Row Order',        'int',   '', 0, 11 ),
      'data'=>               array('data',              'json',     '', AF_HIDE_ADD),
      'colour'=>             array('Page Colour',       'str',   '', 0, 600 ),
      'page_layout'=>        array('Page Layout',       'int',   '', 0, 25 ),
      'second_layout'=>      array('Second Layout',       'int',   '', 0, 25 ),
      'template'=>           array('Template',       'int',   '', 0, 10 ),
      'show_details'=>       array('Show Details',       'int',   '', 0, 5 ),
   ),

   "minisite_layout" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 11),
      'parent_id'=>          array('Parent Id',        'int',   '', 0, 11 ),
      'type'=>               array('Page Type',        'int',   '', 0, 11 ),
      'subtype'=>            array('Second Page Type', 'int',   '', 0, 11 ),
      'name'=>               array('Name',             'str',   '', 1, 255 ),
      'separator'=>          array('Separator',             'str',   '', 1, 255 ),
      'level1_id'=>         array('level1_id',             'int',   '', 0, 25 ),
      'image'=>              array('Image',            'str',   '', 1, 100 ),
      'row_order'=>          array('Row Order',        'int',   '', 0, 11 ),
      'active'  =>           array('Active?',          'bool',     1,  AF_HIDE_ADD, 0),
      'created'=>            array('Created',          'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'timestamp'=>          array('Timestamp',        'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
   ),

   "minisite_parent_layout" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 11),
      'name'=>               array('Name',             'str',   '', 1, 255 ),
      'image'=>              array('Image',            'str',   '', 1, 255 ),
      'page_type'=>          array('Page Type',        'int',   '', 0, 11 ),
      'page_subtype'=>       array('Page Subtype', 'int',   '', 0, 11 ),
      'layout_type'=>        array('Layout Type',        'int',   '', 0, 11 ),
      'row_order'=>          array('Row Order',            'int',   '', 0, 11 ),
      'active'  =>           array('Active?',          'bool',     1,  AF_HIDE_ADD, 0),
      'created'=>            array('Created',          'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'timestamp'=>          array('Timestamp',        'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
   ),

   "minisite_level1" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 11),
      'parent_id'=>          array('Parent Id',        'int',   '', 0, 11 ),
      'name'=>               array('Name',             'str',   '', 1, 255 ),
      'level_2'=>            array('Level 2',          'int',   '', 0, 1 ),
      'row_order'=>          array('Row Order',        'int',   '', 0, 11 ),
   ),

    "minisite_font" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
      'created'=>            array('Created',          'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'timestamp'=>          array('Timestamp',        'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
      'active'  =>           array('Active?',          'bool',     1,  AF_HIDE_ADD, 0),
      'name'=>         array('Name',      'str',   '', 0, 255 ),
      'h1'=>           array('h1',        'str',   '', 0, 100 ),
      'h2'=>           array('h2',        'txt',   '', ),
      'h3'=>           array('h3',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'h4'=>           array('h4',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'h5'=>           array('h5',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'h6'=>           array('h6',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'p'=>            array('p',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'title'=>        array('Title',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'sub_title'=>    array('Sub Title',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'menu_title'=>   array('Menu Title',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'font_family'=>  array('Font Family',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
   ),  

    "minisite_menu" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
      'created'=>            array('Created',          'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'timestamp'=>          array('Timestamp',        'timestamp', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
      'active'  =>           array('Active?',          'bool',     1,  AF_HIDE_ADD, 0),
      'name'=>               array('Name',             'str',   '', 0, 50 ),
      'logo'=>               array('Logo',             'txt',   '',  ),
      'sub_title'=>          array('Subtitle',         'txt',   '', ),
      'menu_title'=>         array('Menutitle',        'txt',   '', ),
      'icon_default'=>       array('Icon detault',     'int',   0, AF_READONLY|AF_HIDE_ADD, 5),
      'icon1'=>              array('Icon1',        'int',   0, AF_READONLY|AF_HIDE_ADD, 5),
      'icon2'=>              array('Icon2',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'icon3'=>              array('Icon3',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'icon4'=>              array('Icon4',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'icon5'=>              array('Icon5',        'int',   0, AF_READONLY|AF_HIDE_ADD, 8),
      'image'=>              array('Image',        'str',   '', 0, 50 ),
   ), 

    "minisite_hover" => 
   array(
      'id'=>            array('ID',        'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
      'created'=>       array('Created',   'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'timestamp'=>     array('Timestamp', 'timestamp', ATT_DEFAULT_NOW,AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT, 14 ),
      'active'  =>      array('Active?',   'bool',     1,  AF_HIDE_ADD, 0),
      'name'=>          array('Name',      'str',   '', 0, 255 ),
      'type'=>          array('Typr',      'int',   '', 0, 10 ),
      'rank'=>          array('Rank',      'int',   '', 0, 11 ),
   ),

    "minisite_tpl" => 
   array(
      'id'=>                 array('ID',               'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
      'created'=>            array('Created',          'datetime', ATT_DEFAULT_NOW, AF_HIDE_LIST|AF_READONLY|AF_HIDE_EDIT),
      'active'  =>           array('Active?',          'bool',     1,  AF_HIDE_ADD, 0),
      'template'=>           array('Template',         'str',   '', 0, 50 ),
      'page'=>               array('Page',             'str',   '',  ),
      'parts'=>              array('Parts',            'int',   0, ),
      'type'=>               array('Type',            'int',   0, ),
   ), 

   "cruds" => 
   array(
      'id'=>                  array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
      'name'=>                array('Name',              'str',   '', 0, 50 ),
      'email'=>               array('Email',             'str',   '', ),
      'mobile'=>              array('Mobile',            'bigint',   0, ),
   ), 

    "company" => array(
        'id'=>                  array('ID',                'id',   0, AF_PRIMARY|AF_AUTOINCREMENT, 8),
        'name'=>                array('Name',              'str',   '', 0, 50 ),
        'email'=>               array('Email',             'str',   '', ),
        'mobile'=>              array('Mobile',            'bigint',   0, ),
    ),   

));
