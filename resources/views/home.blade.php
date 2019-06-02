@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center vertical-space">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Articles by {{ Auth::user()->name}}</div>

                <div class="card-body">  

                    <div v-for="article in articles" class="alert alert-secondary" role="alert">
                        @{{ article.title }}
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
    <add-article @completed="pushNewArticle"></add-article>
</div>
@endsection
