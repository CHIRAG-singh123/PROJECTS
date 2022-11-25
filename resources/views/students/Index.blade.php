@extends('students.layout')
@section('content')
<head>
    <style>
    b,button{border-radius:100%; color:white; border:solid rgb(0, 187, 255) 3px; background-color:rgb(0, 187, 255); font-size:30px;"}
    u{text-decoration: rgb(0, 187, 255);}
    </style>
</head>
<div>
    <h2>STUDENT DETAILS</h2>
</div>
<div>
    <a href="{{ route('students.create')}}"><button ><b>+</b></button></a>
</div>
@if ($message = Session::get('success'))
    <div>
        <p>{{$message}}</p>
    </div>
    @endif
    <!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <link rel="stylesheet" href="nicepage.css" media="screen">
</head>
        <table border="3px">
            <tr>
                <th class="u-table-cell">                    No                </th>
                <th class="u-table-cell">                    Name                </th>
                <th class="u-table-cell">            Stream                </th>
                 <th class="u-table-cell">                    Sem                </th>
                <th class="u-table-cell">                Div                </th>
                <th class="u-table-cell">                    Course                </th>
                <th class="u-table-cell">                    ACTION                </th>
                
            </tr>
            @foreach ( $students as $student)
            <tr>
                <td>{{ ++$i }}</td>    
                <td>{{ $student->studname }}</td>    
                <td>{{ $student->stream }}</td>    
                <td>{{ $student->sem }}</td>    
                <td>{{ $student-> div}}</td> 
                <td>{{ $student->course }}</td>    
                <td>
                <form   action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <a href="{{ route('students.show',$student->id) }}"><b>👁️‍🗨️</b></button></a>
                    <a href="{{ route('students.edit',$student->id) }}"><b>✎</b></a>
                @csrf
                @method('DELETE')
                <button type="submit"><b>🗑️</b></button>        
            </form>    
                </td>   
            </tr>                
            @endforeach
        </table>
    </div>

</body></html>