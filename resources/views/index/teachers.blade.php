@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
                <h2>{{$title}}</h2>
            </header>
            <hr>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $key => $teacher)
                            
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $teacher->Name }}</td>
                                <td>{{ $teacher->Email }}</td>
                            </tr>  
                        @endforeach          
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
