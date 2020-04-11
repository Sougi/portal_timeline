
    <div  class="form-group">
        <label for="title">your title</label>
        <input  class="form-control"  name="title" id="title" type="text" value="{{old('title', $post->title ?? null)}}">
    </div>
    <div class="form-group">
        <label for="content">your content</label>
        <input class="form-control"  name="content" id="content" type="text" value="{{old('content', $post->content ?? null)}}">
    </div>
    <div class="form-group">
        <label for="slug">slug</label>
        <input class="form-control"  name="slug" id="slug" type="text" value="{{old('slug', $post->slug ?? null)}}">
    </div>

    <div class="form-group">
        <label for="active">active</label>
        <input class="form-control"  name="active" id="active" type="text" value="{{old('active', $post->active ?? null)}}">
    </div>
   
    <div class="form-group">
        <label for="body">your body</label>
        <input  class="form-control" name="body" id="body" type="text" value="{{old('body', $post->body ?? null)}}">
    </div>