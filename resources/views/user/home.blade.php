@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                 </br>
                     {{Auth::user()->name}}
                   </br>
                     {{Auth::user()->email}}
                   </br>
                    {{Auth::user()->customer->phone}}
                </br>
                 {{Auth::user()->customer->address}}
               </br>
                       <a href="{{route('user.books.index')}}">Books</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
