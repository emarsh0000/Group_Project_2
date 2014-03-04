SELECT count(cities.name) AS city_number, countries.name 
FROM cities
LEFT JOIN countries ON cities.country_id = countries.id
GROUP BY countries.name
ORDER BY count(cities.name) DESC;
