SELECT cities.population, cities.name 
FROM cities
LEFT JOIN countries ON cities.country_id = countries.id
WHERE cities.population > 500000 AND countries.name = 'Mexico'
ORDER BY cities.population DESC