@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($pertanyaan as $tanya)
            <div class="card mt-3">
                <div class="card-header">{{ $tanya->title }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{ $tanya->content }}
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection