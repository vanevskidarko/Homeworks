SELECT campers.id, v.vehicle_type,
CONCAT_WS(" ", campers.first_name, campers.last_name) AS driver_name
FROM campers
JOIN vehicles AS v ON campers.vehicle_id = v.id;
