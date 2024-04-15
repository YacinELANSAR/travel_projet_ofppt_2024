@extends('admin.layout')

@section('title')
    <h2>Messages des clients</h2>
@endsection

@section('content')
@if(session('success'))
    <div style="padding: 8px;text-align:center;color:white;background-color:#00a249" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if($messages->count()>0)
    <div>
        <table>
            <thead>
                <tr>
                    <th>Sujet</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->user->email }}</td>
                        <td>{{ $message->content }}</td>
                        <td>
                            <form action="{{route('contacts.reponse')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$message->user_id}}">
                                <textarea name="messageReponse"  cols="30" rows="10" required></textarea><br>
                                <button type="submit" style="text-decoration: none; padding:5px;background-color:#005CAD;color:white;font-weight:bold;border-radius:5px;border-color:#005CAD">Repondre</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h2 style="text-align: center;background-color:#005CAD;color:white;padding:8px;border-radius:10px;margin-top:5px">Aucun message pour le moment</h2>
    @endif

@endsection
