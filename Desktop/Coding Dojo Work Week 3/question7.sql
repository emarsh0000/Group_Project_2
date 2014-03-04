SELECT countries.name AS countries, cities.district AS districts, cities.name, cities.population 
FROM cities
LEFT JOIN countries ON cities.country_id = countries.id
WHERE cities.population >500000 AND countries.name = 'Argentina' 
AND cities.district = 'Buenos Aires'