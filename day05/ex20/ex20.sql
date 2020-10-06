SELECT film.id_genre, 
genre.name AS `name_genre`, 
film.id_distrib, 
distrib.name AS `name_distrib`, 
film.title AS `title_film` 
FROM `film` 
LEFT JOIN `distrib` ON film.id_distrib = distrib.id_distrib 
LEFT JOIN `genre` ON film.id_genre = genre.id_genre 
WHERE 4 <= film.id_genre AND film.id_genre <= 8 AND 
film.id_distrib != 'NULL' AND 
film.id_genre != 'NULL' AND 
film.title != 'NULL';
