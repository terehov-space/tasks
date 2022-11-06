<?php

/**
 * SELECT r.*, COUNT(rr.rating) as rct, AVG(rr.rating) AS ar FROM releases AS r
 * LEFT JOIN releases_rating rr on r.id = rr.release_id
 * GROUP BY r.id
 * HAVING rct > 10
 * ORDER BY ar DESC
 * LIMIT 10
 */