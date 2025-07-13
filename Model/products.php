<?php
require_once 'database.php'; // Your database connection

$sql = "SELECT * FROM Products";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
?>
    <tr>
        <td><?= htmlspecialchars($row['product_id']); ?></td>
        <td><?= htmlspecialchars($row['product_name']); ?></td>
        <td><?= htmlspecialchars($row['product_code']); ?></td>
        <td><?= htmlspecialchars($row['description']); ?></td>
        <td><?= htmlspecialchars($row['category_id']); ?></td>
        <td><?= htmlspecialchars($row['brand_id']); ?></td>
        <td><?= htmlspecialchars($row['supplier_id']); ?></td>
        <td><?= htmlspecialchars($row['create_at']); ?></td>
        <td><?= htmlspecialchars($row['update_at']); ?></td>
    </tr>
<?php
    endwhile;
else:
?>
    <tr><td colspan="9" class="text-center">No products found.</td></tr>
<?php endif; ?>
