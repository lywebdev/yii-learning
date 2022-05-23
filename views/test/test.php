test view for test route, incoming variable message: <?= $message ?>

<hr>
<?php

if (isset($postId) && !empty($postId)) {
    echo "Идентификатор нужного нам поста: $postId\n";
}
else {
    echo "Идентификатор поста не был передан\n";
}
