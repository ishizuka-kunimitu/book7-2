SELECT p.id,name,address
LEFT JOIN customer as c 
ON p.customer=id=c.id 
WHERE p.id = 1

SELECT d.product_id,name,count,price
,count * price as shokei
FROM purchase_detail as d
LEFT JOIN product as s
ON s.id = d.product_id
WHERE purchase_id = 1