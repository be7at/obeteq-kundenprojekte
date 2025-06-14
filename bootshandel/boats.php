<?php
require 'db.php';
$stmt = $pdo->query('SELECT name, description, image_url, specs FROM boats');
$boats = $stmt->fetchAll();
?>
<div class="boat-list">
<?php foreach ($boats as $boat): ?>
    <div class="boat" data-aos="fade-up">
        <img src="<?php echo htmlspecialchars($boat['image_url']); ?>" alt="<?php echo htmlspecialchars($boat['name']); ?>">
        <h3><?php echo htmlspecialchars($boat['name']); ?></h3>
        <p><?php echo htmlspecialchars($boat['description']); ?></p>
        <p><?php echo htmlspecialchars($boat['specs']); ?></p>
    </div>
<?php endforeach; ?>
</div>
