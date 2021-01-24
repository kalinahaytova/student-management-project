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
                            <th>Major</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $key => $student)
                            
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $student->Name }}</td>
                                <td>{{ $student->Major }}</td>
                            </tr>  
                        @endforeach          
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
