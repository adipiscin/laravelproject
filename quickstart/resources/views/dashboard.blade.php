@extends('layout.layout')

@section('content')
    
@include('shared.success_message')
@include('shared.submit_idea')
<hr>
<div class="mt-3">
    @foreach ($ideas as $idea)
        @include('shared.idea_card')
    @endforeach
    <div class="mt-3">
        {{$ideas->links()}}
    </div>
</div>
            
@endsection