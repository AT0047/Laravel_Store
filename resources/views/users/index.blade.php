@extends('layouts.app')
@section('content')
        <div class="recent-orders">
            <h2>Users({{ $count }})</h2>
            @if (session()->has('message'))
                <strong class="messages">{{session('message')}}</strong>
            @endif  
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>email_verified_at</th>
                        <th>Created At</th>
                        <th>updated at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $key => $user)
                        <tr>
                            <td>{{$key + $users->firstItem()}}</td>
                            <td>{{$user-> name}}</td>
                            <td>{{$user-> email}}</td>
                            <td class="tdfnt primary">{{$user-> updated_at->diffForHumans()}}</td>
                            <td class="tdfnt primary">{{ \Carbon\Carbon::parse($user->email_verified_at)->diffForHumans() }}</td>
                            <td class="warning">{{$user-> created_at->diffForHumans()}}</td>
                            <td class="actionsicn">
                                <form action="{{route('users.delete', $user-> id)}}" method="post"  class="formbtn">
                                    @csrf
                                    @method('delete')
                                <button class="material-icons-sharp actionsicn1">delete</button>
                                </form>
                                <a href="{{route('users.edit', $user->id)}}" role="button">
                                    <span class="material-icons-sharp actionsicn2">edit_note</span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="#">Show ALL</a>
        </div>
@endsection