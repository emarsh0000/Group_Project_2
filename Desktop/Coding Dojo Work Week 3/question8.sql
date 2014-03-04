SELECT count(countries.name), countries.region FROM countries
GROUP BY  countries.region
ORDER BY count(countries.name) DESC