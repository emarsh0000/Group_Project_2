SELECT customer.first_name, customer.last_name, customer.email, customer.address_id, city_id
FROM customer
LEFT JOIN address ON customer.address_id = address.address_id
WHERE city_id = 312