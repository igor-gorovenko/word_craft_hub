@extends('app')

@section('content')

<a href="{{ route('index') }}">Back</a>
<div>
    <h6>Word: {{ $word->word }}</h6>
    <h6>Translation: {{ $word->translation }}</h6>
    <h6>Usage count: {{ $word->usage_count }}</h6>
    <h6>Tags:
        @foreach($word->tags as $tag)
        {{ $tag->name }}
        @unless($loop->last)
        ,
        @endunless
        @endforeach
    </h6>
</div>

@endsection