@extends('layouts.app')
@section('content')

<div class="recent-orders">
            <h2>categories({{ $count }})</h2>
            @if (session()->has('message'))
                <strong class="messages">{{session('message')}}</strong>
            @endif  
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>createdby</th>
                        <th>Created At</th>
                        <th>updated at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $key => $category)
                        <tr>
                            <td>{{$key + $categories->firstItem()}}</td>
                            <td>{{$category-> Name}}</td>
                            <td>{{$category-> create_by}}</td>
                            <td class="tdfnt primary">{{$category-> updated_at->diffForHumans()}}</td>
                            <td class="warning">{{$category-> created_at->diffForHumans()}}</td>
                            <td class="actionsicn">
                                <form action="{{route('categories.delete', $category-> id)}}" method="post"  class="formbtn">
                                    @csrf
                                    @method('delete')
                                    <button class="material-icons-sharp actionsicn1">delete</button>
                                </form>
                                <a href="{{route('categories.edit', $category->id)}}" role="button">
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