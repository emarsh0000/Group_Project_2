SELECT countries.name, languages.language, languages.percentage 
FROM languages
LEFT JOIN countries ON languages.country_id = countries.id
WHERE languages.language = "Slovene"
ORDER BY languages.percentage DESC;

