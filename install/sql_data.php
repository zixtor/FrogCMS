<?php

/**
 * This file will insert all basic data to database
 */

function frog_datetime_incrementor()
{
    static $cpt=1;
    $cpt++;
    return date('Y-m-d H:i:s', time()+$cpt);
}


//  Dumping data for table: comment ------------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."comment (id, page_id, body, author_name, author_email, author_link, is_approved, created_on) VALUES
(1, 5, 'This is your first comment.', 'Philippe Archambault', 'example@example.com', 'http://www.philworks.com/', 1, '".frog_datetime_incrementor()."')");


//  Dumping data for table: layout -------------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."layout (id, name, content_type, content, created_on, updated_on, created_by_id, updated_by_id) VALUES (1, 'none', 'text/html', '<?php echo \$this->content(); ?>', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."layout (id, name, content_type, content, created_on, updated_on, created_by_id, updated_by_id) VALUES (2, 'Normal', 'text/html', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\r\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n  <title><?php echo \$this->title(); ?></title>\r\n\r\n  <meta http-equiv=\"content-type\" content=\"application/xhtml+xml; charset=utf-8\" />\r\n  <meta name=\"robots\" content=\"index, follow\" />\r\n  <meta name=\"description\" content=\"A RadiantCMS like writen with PHP\" />\r\n  <meta name=\"keywords\" content=\"php,cms,radian,design,theme,template,layout\" />\r\n  <meta name=\"author\" content=\"Philippe Archambault\" />\r\n\r\n  <link rel=\"stylesheet\" href=\"<?php echo URL_PUBLIC; ?>/public/stylesheets/styles.css\" media=\"all\" type=\"text/css\" />\r\n\r\n</head>\r\n<body>\r\n<div id=\"page\">\r\n<?php \$this->includeSnippet(''header''); ?>\r\n<div id=\"content\">\r\n\r\n  <h2><?php echo \$this->title(); ?></h2>\r\n  <?php echo \$this->content(); ?> \r\n  <?php if (\$this->hasContent(''extended'')) echo \$this->content(''extended''); ?> \r\n\r\n  <?php if (\$this->comment_status != ''none'') { \$this->includeSnippet(''comment-each''); } ?>\r\n  <?php if (\$this->comment_status == ''open'') { \$this->includeSnippet(''comment-form''); } ?>\r\n\r\n</div> <!-- end #content -->\r\n<div id=\"sidebar\">\r\n\r\n  <?php echo \$this->content(''sidebar'', true); ?> \r\n\r\n</div> <!-- end #sidebar -->\r\n<?php \$this->includeSnippet(''footer''); ?>\r\n</div> <!-- end #page -->\r\n</body>\r\n</html>', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1)");


//  Dumping data for table: page ---------------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (1, 'Home Page', '', 'Home Page', 0, 2, '', 100, 'none', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 0, 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (2, 'RSS Feed', 'rss', 'RSS Feed', 1, 1, '', 101, 'none', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 2, 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (3, 'About us', 'about_us', 'About us', 1, 0, '', 100, 'none', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 0, 0)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (4, 'Articles', 'articles', 'Articles', 1, 0, 'archive', 100, 'none', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 1, 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (5, 'My first article', 'my_first_article', 'My first article', 4, 0, '', 100, 'open', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 0, 0)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (6, 'My second article', 'my_second_article', 'My second article', 4, 0, '', 100, 'none', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 0, 0)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page (id, title, slug, breadcrumb, parent_id, layout_id, behavior_id, status_id, comment_status, created_on, published_on, updated_on, created_by_id, updated_by_id, position, is_protected) VALUES (7, '%B %Y archive', 'monthly_archive', '%B %Y archive', 4, 0, 'archive_month_index', 101, 'none', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1, 0, 1)");


//  Dumping data for table: page_part ----------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (1, 'body', '', '<?php \$page_article = \$this->find(''/articles/''); ?>\r\n<?php \$last_article = \$page_article->children(array(''limit'' => 1, ''order'' => ''page.created_on DESC'')); ?>\r\n\r\n<div class=\"first entry\">\r\n  <h3><?php echo \$last_article->link(); ?></h3>\r\n  <?php echo \$last_article->content(); ?>\r\n  <?php if (\$last_article->hasContent(''extended'')) echo \$last_article->link(''Continue Reading&#8230;''); ?>\r\n  <p class=\"info\">Posted by <?php echo \$last_article->author(); ?> on <?php echo \$last_article->date(); ?></p>\r\n</div>\r\n\r\n<?php foreach (\$page_article->children(array(''limit'' => 4, ''offset'' => 1, ''order'' => ''page.created_on DESC'')) as \$article): ?>\r\n<div class=\"entry\">\r\n  <h3><?php echo \$article->link(); ?></h3>\r\n  <?php echo \$article->content(); ?>\r\n  <?php if (\$article->hasContent(''extended'')) echo \$article->link(''Continue Reading&#8230;''); ?>\r\n  <p class=\"info\">Posted by <?php echo \$article->author(); ?> on <?php echo \$article->date(); ?></p>\r\n</div>\r\n<?php endforeach; ?>\r\n', '<?php \$page_article = \$this->find(''/articles/''); ?>\r\n<?php \$last_article = \$page_article->children(array(''limit'' => 1, ''order'' => ''page.created_on DESC'')); ?>\r\n\r\n<div class=\"first entry\">\r\n  <h3><?php echo \$last_article->link(); ?></h3>\r\n  <?php echo \$last_article->content(); ?>\r\n  <?php if (\$last_article->hasContent(''extended'')) echo \$last_article->link(''Continue Reading&#8230;''); ?>\r\n  <p class=\"info\">Posted by <?php echo \$last_article->author(); ?> on <?php echo \$last_article->date(); ?></p>\r\n</div>\r\n\r\n<?php foreach (\$page_article->children(array(''limit'' => 4, ''offset'' => 1, ''order'' => ''page.created_on DESC'')) as \$article): ?>\r\n<div class=\"entry\">\r\n  <h3><?php echo \$article->link(); ?></h3>\r\n  <?php echo \$article->content(); ?>\r\n  <?php if (\$article->hasContent(''extended'')) echo \$article->link(''Continue Reading&#8230;''); ?>\r\n  <p class=\"info\">Posted by <?php echo \$article->author(); ?> on <?php echo \$article->date(); ?></p>\r\n</div>\r\n<?php endforeach; ?>\r\n', 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (2, 'body', '', '<?php echo ''<?''; ?>xml version=\"1.0\" encoding=\"UTF-8\"<?php echo ''?>''; ?> \r\n<rss version=\"2.0\">\r\n<channel>\r\n	<title>Frog CMS</title>\r\n	<link>http://www.madebyfrog.com/</link>\r\n	<language>en-us</language>\r\n	<copyright>Copyright <?php echo date(''Y''); ?>, philwork.com</copyright>\r\n	<pubDate><?php echo strftime(''%a, %d %b %Y %H:%M:%S +0000''); ?></pubDate>\r\n	<lastBuildDate><?php echo strftime(''%a, %d %b %Y %H:%M:%S +0000''); ?></lastBuildDate>\r\n	<category>CMS</category>\r\n	<generator>Frog CMS</generator>\r\n	<description>The main news feed from Frog CMS.</description>\r\n	<docs>http://www.rssboard.org/rss-specification</docs>\r\n	<atom:link href=\"<?php echo BASE_URL ?>rss\" rel=\"self\" type=\"application/rss+xml\" />\r\n\r\n<?php \$articles = \$this->find(''articles''); ?>\r\n<?php foreach (\$articles->children(array(''limit'' => 10, ''order'' => ''page.created_on DESC'')) as \$article): ?> \r\n	<item>\r\n		<title><?php echo \$article->title(); ?></title>\r\n		<description><?php if (\$article->hasContent(''summary'')) { echo \$article->content(''summary''); } else { echo strip_tags(\$article->content()); } ?></description>\r\n		<pubDate><?php echo \$article->date(''%a, %d %b %Y %H:%M:%S +0000''); ?></pubDate>\r\n		<link><?php echo \$article->url(); ?></link>\r\n		<guid><?php echo \$article->url(); ?></guid>\r\n	</item>\r\n<?php endforeach; ?> \r\n</channel>\r\n</rss>\r\n\r\n', '<?php echo ''<?''; ?>xml version=\"1.0\" encoding=\"UTF-8\"<?php echo ''?>''; ?> \r\n<rss version=\"2.0\">\r\n<channel>\r\n	<title>Frog CMS</title>\r\n	<link>http://www.madebyfrog.com/</link>\r\n	<language>en-us</language>\r\n	<copyright>Copyright <?php echo date(''Y''); ?>, philwork.com</copyright>\r\n	<pubDate><?php echo strftime(''%a, %d %b %Y %H:%M:%S +0000''); ?></pubDate>\r\n	<lastBuildDate><?php echo strftime(''%a, %d %b %Y %H:%M:%S +0000''); ?></lastBuildDate>\r\n	<category>CMS</category>\r\n	<generator>Frog CMS</generator>\r\n	<description>The main news feed from Frog CMS.</description>\r\n	<docs>http://www.rssboard.org/rss-specification</docs>\r\n	<atom:link href=\"<?php echo BASE_URL ?>rss\" rel=\"self\" type=\"application/rss+xml\" />\r\n\r\n<?php \$articles = \$this->find(''articles''); ?>\r\n<?php foreach (\$articles->children(array(''limit'' => 10, ''order'' => ''page.created_on DESC'')) as \$article): ?> \r\n	<item>\r\n		<title><?php echo \$article->title(); ?></title>\r\n		<description><?php if (\$article->hasContent(''summary'')) { echo \$article->content(''summary''); } else { echo strip_tags(\$article->content()); } ?></description>\r\n		<pubDate><?php echo \$article->date(''%a, %d %b %Y %H:%M:%S +0000''); ?></pubDate>\r\n		<link><?php echo \$article->url(); ?></link>\r\n		<guid><?php echo \$article->url(); ?></guid>\r\n	</item>\r\n<?php endforeach; ?> \r\n</channel>\r\n</rss>\r\n\r\n', 2)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (3, 'body', 'textile', 'This is my site. I''m living in ... I''m doing some nice thing, like that and that ...', '	<p>This is my site. I&#8217;m living in &#8230; I&#8217;m doing some nice thing, like that and that &#8230;</p>', 3)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (4, 'body', '', '<?php \$last_articles = \$this->children(array(''limit''=>5, ''order''=>''page.created_on DESC'')); ?>\r\n<?php foreach (\$last_articles as \$article): ?>\r\n<div class=\"entry\">\r\n  <h3><?php echo \$article->link(\$article->title); ?></h3>\r\n  <?php echo \$article->content(); ?>\r\n  <p class=\"info\">Posted by <?php echo \$article->author(); ?> on <?php echo \$article->date(); ?>  \r\n<?php if(\$article->comment_status != ''none''): ?>\r\n     &#8212; <b><?php echo \$article->commentsCount(); ?></b> comment(s)\r\n<?php endif; ?>\r\n     <br />tags: <?php echo join('', '', \$article->tags()); ?>\r\n  </p>\r\n</div>\r\n<?php endforeach; ?>\r\n\r\n', '<?php \$last_articles = \$this->children(array(''limit''=>5, ''order''=>''page.created_on DESC'')); ?>\r\n<?php foreach (\$last_articles as \$article): ?>\r\n<div class=\"entry\">\r\n  <h3><?php echo \$article->link(\$article->title); ?></h3>\r\n  <?php echo \$article->content(); ?>\r\n  <p class=\"info\">Posted by <?php echo \$article->author(); ?> on <?php echo \$article->date(); ?>  \r\n<?php if(\$article->comment_status != ''none''): ?>\r\n     &#8212; <b><?php echo \$article->commentsCount(); ?></b> comment(s)\r\n<?php endif; ?>\r\n     <br />tags: <?php echo join('', '', \$article->tags()); ?>\r\n  </p>\r\n</div>\r\n<?php endforeach; ?>\r\n\r\n', 4)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (5, 'body', 'markdown', 'My **first** tet of my first article that use Markdown', '<p>My <strong>first</strong> tet of my first article that use Markdown</p>\n', 5)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (7, 'body', 'markdown', 'This is you second article', '<p>This is you second article</p>\n', 6)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (8, 'body', '', '<?php \$archives = \$this->archive->get(); ?>\r\n<?php foreach (\$archives as \$archive): ?>\r\n<div class=\"entry\">\r\n  <h3><?php echo \$archive->link(); ?></h3>\r\n  <p class=\"info\">Posted by <?php echo \$archive->author(); ?> on <?php echo \$archive->date(); ?> \r\n<?php if(\$archive->comment_status != ''none''): ?>\r\n     &#8212; <b><?php echo \$archive->commentsCount(); ?></b> comment(s)\r\n<?php endif; ?>\r\n  </p>\r\n</div>\r\n<?php endforeach; ?>', '<?php \$archives = \$this->archive->get(); ?>\r\n<?php foreach (\$archives as \$archive): ?>\r\n<div class=\"entry\">\r\n  <h3><?php echo \$archive->link(); ?></h3>\r\n  <p class=\"info\">Posted by <?php echo \$archive->author(); ?> on <?php echo \$archive->date(); ?> \r\n<?php if(\$archive->comment_status != ''none''): ?>\r\n     &#8212; <b><?php echo \$archive->commentsCount(); ?></b> comment(s)\r\n<?php endif; ?>\r\n  </p>\r\n</div>\r\n<?php endforeach; ?>', 7)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (9, 'sidebar', '', '<h3>About Me</h3>\r\n\r\n<p>I''m just a demonstration of how easy it is to use Frog CMS to power a blog. <a href=\"<?php echo BASE_URL; ?>about_us\">more ...</a></p>\r\n\r\n<h3>Favorite Sites</h3>\r\n<ul>\r\n  <li><a href=\"http://www.madebyfrog.com\">Frog CMS</a></li>\r\n  <li><a href=\"http://www.philworks.com\">Philworks</a></li>\r\n</ul>\r\n\r\n<?php if(url_match(''/'')): ?>\r\n<h3>Recent Entries</h3>\r\n<?php \$page_article = \$this->find(''/articles/''); ?>\r\n<ul>\r\n<?php foreach (\$page_article->children(array(''limit'' => 10, ''order'' => ''page.created_on DESC'')) as \$article): ?>\r\n  <li><?php echo \$article->link(); ?></li> \r\n<?php endforeach; ?>\r\n</ul>\r\n<?php endif; ?>\r\n\r\n<a href=\"<?php echo BASE_URL; ?>articles\">Archives</a>\r\n\r\n<h3>Syndicate</h3>\r\n\r\n<a href=\"<?php echo BASE_URL; ?>rss\">Articles RSS Feed</a>', '<h3>About Me</h3>\r\n\r\n<p>I''m just a demonstration of how easy it is to use Frog CMS to power a blog. <a href=\"<?php echo BASE_URL; ?>about_us\">more ...</a></p>\r\n\r\n<h3>Favorite Sites</h3>\r\n<ul>\r\n  <li><a href=\"http://www.madebyfrog.com\">Frog CMS</a></li>\r\n  <li><a href=\"http://www.philworks.com\">Philworks</a></li>\r\n</ul>\r\n\r\n<?php if(url_match(''/'')): ?>\r\n<h3>Recent Entries</h3>\r\n<?php \$page_article = \$this->find(''/articles/''); ?>\r\n<ul>\r\n<?php foreach (\$page_article->children(array(''limit'' => 10, ''order'' => ''page.created_on DESC'')) as \$article): ?>\r\n  <li><?php echo \$article->link(); ?></li> \r\n<?php endforeach; ?>\r\n</ul>\r\n<?php endif; ?>\r\n\r\n<a href=\"<?php echo BASE_URL; ?>articles\">Archives</a>\r\n\r\n<h3>Syndicate</h3>\r\n\r\n<a href=\"<?php echo BASE_URL; ?>rss\">Articles RSS Feed</a>', 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."page_part (id, name, filter_id, content, content_html, page_id) VALUES (10, 'sidebar', '', '<?php \$article = \$this->find(''articles''); ?>\r\n<?php \$archives = \$article->archive->archivesByMonth(); ?>\r\n\r\n<h3>Archives By Month</h3>\r\n<ul>\r\n<?php foreach (\$archives as \$date): ?>\r\n  <li><a href=\"<?php echo BASE_URL . \$this->url .''/''. \$date . URL_SUFFIX; ?>\"><?php echo strftime(''%B %Y'', strtotime(strtr(\$date, ''/'', ''-''))); ?></a></li>\r\n<?php endforeach; ?>\r\n</ul>', '<?php \$article = \$this->find(''articles''); ?>\r\n<?php \$archives = \$article->archive->archivesByMonth(); ?>\r\n\r\n<h3>Archives By Month</h3>\r\n<ul>\r\n<?php foreach (\$archives as \$date): ?>\r\n  <li><a href=\"<?php echo \$this->url() .''/''. \$date; ?>\"><?php echo strftime(''%B %Y'', strtotime(strtr(\$date, ''/'', ''-''))); ?></a></li>\r\n<?php endforeach; ?>\r\n</ul>', 4)");


//  Dumping data for table: permission ---------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."permission (id, name) VALUES (1, 'administrator')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."permission (id, name) VALUES (2, 'developer')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."permission (id, name) VALUES (3, 'editor')");


//  Dumping data for table: setting ------------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('admin_title', 'Frog CMS')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('language', 'en')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('theme', 'default')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('enable_comment', '1')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('auto_approve_comment', '1')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('default_status_id', '1')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('default_filter_id', '')");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."setting (name, value) VALUES ('plugins', 'a:5:{s:7:\"textile\";i:1;s:8:\"markdown\";i:1;s:7:\"archive\";i:1;s:14:\"page_not_found\";i:1;s:12:\"file_manager\";i:1;}')");


//  Dumping data for table: snippet ------------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."snippet (id, name, filter_id, content, content_html, created_on, updated_on, created_by_id, updated_by_id) VALUES (1, 'header', '', '<div id=\"header\">\r\n  <h1><a href=\"<?php echo URL_PUBLIC; ?>\">Frog</a> <span>content management simplified</span></h1>\r\n  <div id=\"nav\">\r\n    <ul>\r\n      <li><a<?php echo url_match(''/'') ? '' class=\"current\"'': ''''; ?> href=\"<?php echo URL_PUBLIC; ?>\">home</a></li>\r\n<?php foreach(\$this->find(''/'')->children() as \$menu): ?>\r\n      <li><?php echo \$menu->link(\$menu->title, (in_array(\$menu->slug, explode(''/'', \$this->url)) ? '' class=\"current\"'': null)); ?></li>\r\n<?php endforeach; ?> \r\n    </ul>\r\n  </div> <!-- end #navigation -->\r\n</div> <!-- end #header -->', '<div id=\"header\">\r\n  <h1><a href=\"<?php echo URL_PUBLIC; ?>\">Frog</a> <span>content management simplified</span></h1>\r\n  <div id=\"nav\">\r\n    <ul>\r\n      <li><a<?php echo url_match(''/'') ? '' class=\"current\"'': ''''; ?> href=\"<?php echo URL_PUBLIC; ?>\">home</a></li>\r\n<?php foreach(\$this->find(''/'')->children() as \$menu): ?>\r\n      <li><?php echo \$menu->link(\$menu->title, (in_array(\$menu->slug, explode(''/'', \$this->url)) ? '' class=\"current\"'': null)); ?></li>\r\n<?php endforeach; ?> \r\n    </ul>\r\n  </div> <!-- end #navigation -->\r\n</div> <!-- end #header -->', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."snippet (id, name, filter_id, content, content_html, created_on, updated_on, created_by_id, updated_by_id) VALUES (2, 'footer', '', '<div id=\"footer\"><div id=\"footer-inner\">\r\n  <p>&copy; Copyright <?php echo date(''Y''); ?> <a href=\"http://www.madebyfrog.com/\" title=\"Frog\">Philworks.com</a><br />\r\n  Powered by <a href=\"http://www.madebyfrog.com/\" title=\"Frog CMS\">Frog CMS</a>.\r\n  </p>\r\n</div></div><!-- end #footer -->', '<div id=\"footer\"><div id=\"footer-inner\">\r\n  <p>&copy; Copyright <?php echo date(''Y''); ?> <a href=\"http://www.madebyfrog.com/\" alt=\"Frog\">Philworks.com</a><br />\r\n  Powered by <a href=\"http://www.madebyfrog.com/\" alt=\"Frog\">Frog CMS</a>.\r\n  </p>\r\n</div></div><!-- end #footer -->', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."snippet (id, name, filter_id, content, content_html, created_on, updated_on, created_by_id, updated_by_id) VALUES (3, 'comment-form', '', '<form action=\"<?php echo \$this->url(); ?>\" method=\"post\" id=\"comment_form\"> \r\n<p>\r\n	<input class=\"comment-form-name\" type=\"text\" name=\"comment[author_name]\" id=\"comment_form_name\" value=\"\" size=\"22\" /> \r\n	<label for=\"comment_form_name\"> name (require)</label>\r\n</p>\r\n<p>\r\n	<input class=\"comment-form-email\" type=\"text\" name=\"comment[author_email]\" id=\"comment_form_email\" value=\"\" size=\"22\" /> \r\n	<label for=\"comment_form_email\"> email (will not be published) (required)</label>\r\n</p>\r\n<p>\r\n	<input class=\"comment-form-link\" type=\"text\" name=\"comment[author_link]\" id=\"comment_form_link\" value=\"\" size=\"22\" /> \r\n	<label for=\"comment_form_link\"> website</label>\r\n</p>\r\n<p>\r\n	<textarea class=\"comment-form-body\" id=\"comment_form_body\" name=\"comment[body]\" cols=\"100%\" rows=\"10\"></textarea>\r\n</p>\r\n<p>\r\n	<input class=\"comment-form-submit\" type=\"submit\" name=\"commit-comment\" id=\"comment_form_submit\" value=\"Submit comment\" />\r\n</p>\r\n</form>', '<form action=\"<?php echo \$this->url(); ?>\" method=\"post\" id=\"comment_form\"> \r\n<p>\r\n	<input class=\"comment-form-name\" type=\"text\" name=\"comment[author_name]\" id=\"comment_form_name\" value=\"\" size=\"22\" /> \r\n	<label for=\"comment_form_name\"> name (require)</label>\r\n</p>\r\n<p>\r\n	<input class=\"comment-form-email\" type=\"text\" name=\"comment[author_email]\" id=\"comment_form_email\" value=\"\" size=\"22\" /> \r\n	<label for=\"comment_form_email\"> email (will not be published) (required)</label>\r\n</p>\r\n<p>\r\n	<input class=\"comment-form-link\" type=\"text\" name=\"comment[author_link]\" id=\"comment_form_link\" value=\"\" size=\"22\" /> \r\n	<label for=\"comment_form_link\"> website</label>\r\n</p>\r\n<p>\r\n	<textarea class=\"comment-form-body\" id=\"comment_form_body\" name=\"comment[body]\" cols=\"100%\" rows=\"10\"></textarea>\r\n</p>\r\n<p>\r\n	<input class=\"comment-form-submit\" type=\"submit\" name=\"commit-comment\" id=\"comment_form_submit\" value=\"Submit comment\" />\r\n</p>\r\n</form>', '".frog_datetime_incrementor()."', NULL, 1, NULL)");
$PDO->exec("INSERT INTO ".TABLE_PREFIX."snippet (id, name, filter_id, content, content_html, created_on, updated_on, created_by_id, updated_by_id) VALUES (4, 'comment-each', '', '<p><strong><?php echo \$num_comments = \$this->commentsCount(); ?></strong> comment<?php if (\$num_comments > 1) { echo ''s''; } ?></p>\r\n<?php \$comments = \$this->comments(); ?>\r\n<ol class=\"comments\">\r\n<?php foreach (\$comments as \$comment): ?>\r\n  <li class=\"comment\">\r\n    <p><?php echo \$comment->body(); ?></p>\r\n    <p> &#8212; <?php echo \$comment->name(); ?> <small class=\"comment-date\"><?php echo \$comment->date(); ?></small></p>\r\n  </li>\r\n<?php endforeach; // comments; ?>\r\n</ol>', '<p><strong><?php echo \$num_comments = \$this->commentsCount(); ?></strong> comment<?php if (\$num_comments > 1) { echo ''s''; } ?></p>\r\n<?php \$comments = \$this->comments(); ?>\r\n<ol class=\"comments\">\r\n<?php foreach (\$comments as \$comment): ?>\r\n  <li class=\"comment\">\r\n    <p><?php echo \$comment->body(); ?></p>\r\n    <p> — <?php echo \$comment->name(); ?> <small class=\"comment-date\"><?php echo \$comment->date(); ?></small></p>\r\n  </li>\r\n<?php endforeach; // comments; ?>\r\n</ol>', '".frog_datetime_incrementor()."', NULL, 1, NULL)");


//  Dumping data for table: user ---------------------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."user (id, name, email, username, password, created_on, updated_on, created_by_id, updated_by_id) VALUES (1, 'Administrator', 'admin@yoursite.com', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '".frog_datetime_incrementor()."', '".frog_datetime_incrementor()."', 1, 1)");


//  Dumping data for table: user_permission ----------------------------------

$PDO->exec("INSERT INTO ".TABLE_PREFIX."user_permission (user_id, permission_id) VALUES (1, 1)");
