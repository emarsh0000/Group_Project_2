SELECT languages.language, languages.percentage 
FROM languages
LEFT JOIN countries ON languages.country_id = countries.id
WHERE languages.percentage > 89
ORDER BY languages.percentage DESC