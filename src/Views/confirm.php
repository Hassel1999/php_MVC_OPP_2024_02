<h2>Confirm Deletion</h2>

<?php if (isset($data)): ?>
    <p>Are you sure you want to delete the following customer?</p>
    <p><strong>Customer ID:</strong> <?= htmlspecialchars($data['CustomerID']) ?></p>
    <p><strong>Name:</strong> <?= htmlspecialchars($data['FirstName']) . ' ' . htmlspecialchars($data['LastName']) ?></p>

    <form action="index.php?action=confirmDelete&id=<?= $data['CustomerID'] ?>" method="post">
        <input type="hidden" name="txt_id" value="<?= $data['CustomerID'] ?>">
        <input type="submit" value="Yes, Delete">
        <a href="index.php">Cancel</a>
    </form>
<?php else: ?>
    <p>Invalid customer ID.</p>
    <a href="index.php">Back to Customer List</a>
<?php endif; ?>
