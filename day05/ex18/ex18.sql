SELECT `name` 
FROM `distrib` 
WHERE (`id_distrib` = 42) 
OR (62 <= `id_distrib` AND `id_distrib` <= 69) 
OR `id_distrib` = 71 
OR (88 <= `id_distrib` AND `id_distrib` <= 90) 
OR `name` LIKE '%y%y%' 
LIMIT 5 OFFSET 2;
