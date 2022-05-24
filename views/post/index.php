<?php
$this->beginBlock('block1');
    echo "Some Content";
$this->endBlock();
$this->registerJsFile('@web/js/posts.js', ['depends' => 'yii\web\YiiAsset']);

echo "<hr>";
foreach ($categories as $category) {
    echo "<h3>{$category->name}</h3>";

    foreach ($category->posts as $post) {
        echo "<span style='font-weight: bold;'>{$post->title}</span>\n";
    }
}
//foreach ($posts as $post) {
//    echo "<span style='font-weight: bold;'>{$post->title}</span>\n";
//}
?>
<hr>

<br>
<button class="btn btn-success" id="getPostsBtn">Получить посты посредством AJAX</button>

<?php
$js = <<<JS
    $('#getPostsBtn').click((e) => {
        e.preventDefault();
        
        $.get({
            url: 'index.php?r=post/index',
            success: response => {
                let posts = JSON.parse(response);
                let postsTemplate = "";
                
                for (let i = 0; i < posts.length; i++) {
                    postsTemplate += `<div class="post">
                        <div class="post__title" style="font-weight: bold;">` + posts[i].title + `</div>
                        <div class="post__text">` + posts[i].text + `</div>
                    </div>`;
                }
                let template = `<div class="posts">` + postsTemplate + `</div><br>`;
                $('#content').append(template);
            },
            error: e => {
                console.log(e);
            }
        });
    });
JS;

$this->registerJs($js);

?>

<br><br>
