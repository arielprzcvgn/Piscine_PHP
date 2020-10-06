SELECT COUNT(*) 
FROM `member_history` 
WHERE ('2006-10-30' <= `date` AND `date` <= '2007-07-27') 
OR DATE_FORMAT(`date`, '%m-%d') = '12-24';
