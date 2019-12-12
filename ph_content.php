<?php include ("sequence.php");
$sql = "SELECT * FROM posts WHERE 1 ORDER BY d_date DESC LIMIT 30";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='post_wrapper'><div class='wrapper'><div class='id'>" . $row['id']. "</div> <div class='user'>" . $row['user']. ": <div class='title'>" . $row['title']. "</div></div></div><div class='content'>" . $row['content']. "</div></div>";
    }
} else {
    echo "<h1>Temporary Database Error </h1>";
}?>
