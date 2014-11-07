<?php
// validates the input.
// tells the input that we want to see the input.
$title =filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>";
echo "<p>Post: $post</p>"