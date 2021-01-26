SELECT `title`,`authors`.`name`
FROM `posts` INNER JOIN `authors` ON `authors_idauthors`=`idauthors`
ORDER BY `date_start` DESC
LIMIT 10