<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog CMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Blog</h1>
    <a href="create.php">+ Add New Post</a>
    <?php
    $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>
                <h2>{$row['title']}</h2>
                <p>{$row['content']}</p>
                <a href='edit.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </div>";
    }
    ?>
</body>
</html>
