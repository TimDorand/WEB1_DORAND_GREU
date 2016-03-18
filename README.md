# td-laravel



Tout est fonctionnel.

____

Seul problème: Ajout de commentaire. Bug sur les foreign key.

SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`td-laravel`.`comments`, CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)) (SQL: insert into `comments` (`user_id`, `id`, `comment`, `updated_at`, `created_at`) values (1, , aze, 2016-03-18 12:04:31, 2016-03-18 12:04:31))

____
