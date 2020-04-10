
    <div>
        <label for="title">your title</label>
        <input name="title" id="title" type="text" value="{{old('title', $post->title ?? null)}}">
    </div>
    <div>
        <label for="content">your content</label>
        <input name="content" id="content" type="text" value="{{old('content', $post->content ?? null)}}">
    </div>
    <div>
        <label for="slug">slug</label>
        <input name="slug" id="slug" type="text" value="{{old('slug', $post->slug ?? null)}}">
    </div>

    <div>
        <label for="active">active</label>
        <input name="active" id="active" type="text" value="{{old('active', $post->active ?? null)}}">
    </div>
   
    <div>
        <label for="body">your body</label>
        <input name="body" id="body" type="text" value="{{old('body', $post->body ?? null)}}">
    </div>