<?php include 'config.php';
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: index.php");
}
?>

<h2>Edit Post</h2>
<form method="post">
    <input type="text" name="title" value="<?= $post['title'] ?>" required><br>
    <textarea name="content" required><?= $post['content'] ?></textarea><br>
    <button type="submit">Update</button>
</form>
