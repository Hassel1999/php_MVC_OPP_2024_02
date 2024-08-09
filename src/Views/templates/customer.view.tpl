<h2><?php echo isset($data) ? 'Edit Customer' : 'Add Customer'; ?></h2>

<form action="index.php?action=save" method="post">
    <input type="hidden" name="txt_id" value="<?= isset($data['CustomerID']) ? $data['CustomerID'] : '' ?>">

    <label for="txt_FirstName">First Name:</label>
    <input type="text" name="txt_FirstName" id="txt_FirstName" value="<?= isset($data['FirstName']) ? $data['FirstName'] : '' ?>" required>

    <label for="txt_LastName">Last Name:</label>
    <input type="text" name="txt_LastName" id="txt_LastName" value="<?= isset($data['LastName']) ? $data['LastName'] : '' ?>" required>

    <label for="txt_Email">Email:</label>
    <input type="email" name="txt_Email" id="txt_Email" value="<?= isset($data['Email']) ? $data['Email'] : '' ?>" required>

    <label for="txt_Phone">Phone:</label>
    <input type="text" name="txt_Phone" id="txt_Phone" value="<?= isset($data['Phone']) ? $data['Phone'] : '' ?>" required>

    <input type="submit" value="<?= isset($data) ? 'Update' : 'Add' ?> Customer">
</form>
