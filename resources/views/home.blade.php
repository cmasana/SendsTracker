@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($)

                        @endforeach
                        {{--@foreach ($db_users as $user)--}}
                        {{--<p><b>ID: </b>{{$user->id}}</p>--}}
                        {{--<p><b>Nombre: </b>{{$user->name}}</p>--}}
                        {{--<p><b>Email: </b>{{$user->email}}</p>--}}
                        {{--<p style="border-bottom: 1px solid #040505"><b>Creado en: </b>{{$user->created_at}}</p>--}}
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
