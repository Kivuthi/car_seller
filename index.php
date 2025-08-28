<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>

<h1>Welcome to West-Side Co. Vehicle Marketplace</h1>
<p>Browse cars and bikes from trusted sellers.</p>

<!-- Search Bar -->
<form method="GET" action="index.php">
    <input type="text" name="q" placeholder="Search vehicles...">
    <button type="submit">Search</button>
</form>

<hr>

<h2>Latest Vehicles</h2>
<?php
$sql = "SELECT * FROM vehicles WHERE status='active' ORDER BY created_at DESC LIMIT 6";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h3>" . $row['brand'] . " " . $row['model'] . "</h3>";
    echo "<p>Price: $" . $row['price'] . "</p>";
    echo "</div><hr>";
}
?>

<?php include("includes/footer.php"); ?>
