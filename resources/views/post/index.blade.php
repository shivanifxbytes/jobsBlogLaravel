@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="container container-fluid gedf-wrapper" >
    <div class="row gedf-main">      
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-8 gedf-main">
            <div class="row">
               @foreach($posts as $post)
                <div class="card gedf-card" style="width:100%;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>

                                <div class="ml-2">
                                    <div class="h5 m-0"> {{ $post->title }}
                                     &nbsp; </div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">
                            </h5>
                        </a>
                        <p class="card-text">
                            

                        </p>
                       

                        <img class="card-img-bottom" src=""  style="width:50%">
                       

                    </div>
                    <div class="card-footer">
                        

                        <a href="{{ route('post.show', $post->id) }}" class="card-link">Show Post</a>
                    
                    </div>
                </div>
                   @endforeach
            </div>
        </div>
    </div>
    @endsection
