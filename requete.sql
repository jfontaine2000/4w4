SELECT `post_title`, `post_type` FROM `wp_posts`  
where `post_type` = "revision"
ORDER BY `wp_posts`.`post_type` ASC;


DELETE FROM table_name WHERE condition;

DELETE FROM `wp_posts`  WHERE `post_type` = "revision";
