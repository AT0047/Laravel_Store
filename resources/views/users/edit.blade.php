@extends('layouts.app')
@section('title', 'Edit Users')
@section('content')
        <div class="recent-orders">
            <h2>Edit Users</h2> 
            <form class="frmbg" method="post" action="{{route('users.update', $users->id)}}">
                @method('patch')
                @csrf
                <div class="frmcontnr">
                    <div>
                        <div class="frmgrop">
                            <label for="name" class="frmlab">Name</label>
                            <input  value="{{ old('name', $users->name) }}" type="text" class="frminpt" name="name" id="name"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="frmgrop">
                            <label for="email" class="frmlab">email</label>
                            <input  value="{{ old('email', $users->email) }}" type="email" class="frminpt" name="email" id="email"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="">
                            <div>
                                <button type="submit">save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection