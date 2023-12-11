<?php

namespace App\Models;

class Post
{
    private static $blog_posts =[
        [
            "title"=> "Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author"=> "Raka Febrian",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam neque cupiditate ipsum facere unde ipsam dignissimos veritatis tenetur? Accusantium aspernatur sapiente molestiae, ducimus cum repellendus nemo hic qui magnam ea, deleniti quos sint omnis sequi provident fugiat nesciunt? Cum accusamus iste ipsam distinctio blanditiis cumque reprehenderit sunt laborum similique vero pariatur dolorem dicta, cupiditate recusandae perferendis illo sapiente, nostrum amet nemo modi. Quo omnis officia eveniet tempora dolores ipsam dolorem. Ducimus excepturi autem odio impedit fugit, obcaecati quo. Harum, adipisci.",
        ],
        [
            "title"=> "Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=> "Zelensky",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, laudantium? Dolores molestiae repellat vero, dolor aspernatur laborum dolorum distinctio dolore quas, esse, odio illo sint. Laborum id, consectetur quod in, quibusdam nihil veritatis, nulla explicabo ipsa facilis alias minus! Eos recusandae consectetur, repellat placeat distinctio aspernatur debitis odio. Corrupti enim ipsum eum suscipit impedit consequatur sit, aut corporis fuga sequi quaerat, dignissimos sed nobis iure vitae reprehenderit? Minus iste adipisci iusto quas, ea velit, nisi doloremque blanditiis deleniti voluptatem in!",
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts); //mengubah array menjadi collection
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere("slug",$slug); //firstwhere() cek persamaan dari dua nilai
    }
}
