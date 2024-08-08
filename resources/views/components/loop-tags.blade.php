@props(['looptags'])

@php
    $tags=explode(",",$looptags);
@endphp


@foreach ($tags as $tag)
    <input type="submit" name="tag" value="{{$tag}}">
@endforeach