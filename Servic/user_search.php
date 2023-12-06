<?php
include 'header.php'; // Make sure this file contains the opening <html>, <head>, and <body> tags.
require_once 'db_connection.php';

$search_result = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_term = $_POST['search'];
    // SQL query to search users by name, email, or phone
    $sql = "SELECT * FROM users WHERE first_name LIKE '%$search_term%' OR last_name LIKE '%$search_term%' OR email LIKE '%$search_term%' OR cell_phone LIKE '%$search_term%'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $search_result[] = $row;
        }
    } else {
        echo "No results found";
    }
}
?>

<!-- Include the CSS link for styling -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- The main content of the page -->
<main style="flex: 1;">
    <!-- HTML for search form -->
    <div class="search-container">
    <form action="user_search.php" method="post">
        <input type="text" name="search" placeholder="Search by name, email, or phone">
        <input type="submit" value="Search">
    </form>
</div>

    <!-- Displaying search results -->
    <?php if (!empty($search_result)): ?>
        <div class="table-container">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php foreach ($search_result as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['cell_phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</main>

<!-- The footer at the bottom of the page -->
<footer class="footer">
    <?php include 'footer.php'; // Make sure this file contains the closing </body> and </html> tags. ?>
</footer>

<!-- Styling for the sticky footer -->
<style>
html, body {
    height: 100%;
    margin: 0;
}
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
main {
    flex: 1;
}
.footer {
    width: 100%;
    position: relative;
}
</style>
