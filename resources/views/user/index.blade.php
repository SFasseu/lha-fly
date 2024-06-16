@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> All users </h4>
                        <a href="{{route('users.create')}}" class="btn btn-sm btn-success"><i class="nc-icon nc-simple-add"></i>New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td class="text-right">
                                                <a style="font-size: 1.5em;margin-right:2px" href="{{route('users.show',$user->id)}}"><i class="nc-icon nc-bullet-list-67"></i></a>
                                                <a style="font-size: 1.5em;margin-right:2px" href="{{route('users.edit',$user->id)}}"><i class="nc-icon nc-ruler-pencil text-warning"></i></a>
                                                <a style="font-size: 1.5em;margin-right:2px" href="{{route('users.destroy',$user->id)}}"><i class="nc-icon nc-simple-remove text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
