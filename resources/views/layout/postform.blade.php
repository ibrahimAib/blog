@csrf
<div class="mb-3">
    <label for="title" class="form-label">عنوان المقال</label>
    <input class="form-control" id="title" name="title" value="{{ $post->title ?? '' }}">
</div>
<div class="mb-3">
    <label for="body" class="form-label">نص المقال</label>
    <textarea class="form-control" id="body" name="body" rows="13">{{ $post->body ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label for="author" class="form-label">الكاتب</label>
    <input class="form-control" id="author" name="author" value="{{ $post->author ?? '' }}">
</div>