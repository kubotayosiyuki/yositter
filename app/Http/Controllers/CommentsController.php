<?php
  /**
  このURLの「コメントの追加」以降を参考ß
  https://blog.hiroyuki90.com/articles/laravel-bbs/
  **/

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;
        use App\Post;

        class CommentsController extends Controller
        {
          public function store(Request $request)
          {
              $params = $request->validate([
                  'post_id' => 'required|exists:posts,id',
                  'body' => 'required|max:2000',
              ]);

              $post = Post::findOrFail($params['post_id']);
              $post->comments()->create($params);

              return redirect()->route('posts.show', ['post' => $post]);
          }
            //
        }
