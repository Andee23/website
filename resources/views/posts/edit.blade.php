@include('layouts.header')

<h2>редактировать пост{{$post->title}}</h2>

<form action="{{route('posts.update', [$post])}}">
    @csrf
    <label for="title">
    <input type="text" name="title" id="title">
    </label>

    <label for="content">
        <textarea type="text" name="content" id="content">
            {{$post->content}}
    </textarea>
    <label for="description">
        <textarea type="text" name="description" id="description">
            {{$post->description}}
    </textarea>
        <label for="is_published">
    <input type="checkbox"
           name="is_published"
           id="is_published">
            {{$post->is_published ? 'checked' : ''}}>
        </label>
        <button type="submit">Сохранить</button>
    </form>

@include('layouts.footer')
