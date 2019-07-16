@extends('layout')

@section('content')
<div class="container mt-4">
   <div class="border p-4">

       <form method="POST" action="{{ route('posts.store') }}">
           @csrf

           <fieldset class="mb-4">
               <div class="form-group">
                 <label for="body">
                      投稿のタイトル
                    </label>
　　　　　　　　　　　
                   <input
                       id="title"
                       name="title"
                       class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                       value="{{ old('title') }}"
                       type="text"
                   >
                   @if ($errors->has('title'))
                       <div class="invalid-feedback">
                           {{ $errors->first('title') }}

                       </div>
                   @endif
               </div>

               <div class="form-group">
                   <label for="body">
                       本文
                   </label>

                   <textarea
                       id="body"
                       name="body"
                       class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                       rows="4"
                   >{{ old('body') }}</textarea>
                   @if ($errors->has('body'))
                       <div class="invalid-feedback">
                           {{ $errors->first('body') }}
                       </div>
                   @endif
               </div>

               <div class="mt-5">
                   <a class="btn btn-secondary" href="{{ route('top') }}">
                       キャンセル
                   </a>

                   <button type="submit" class="btn btn-primary">
                       ツイート
                   </button>
               </div>
           </fieldset>
       </form>
   </div>
</div>
@endsection
