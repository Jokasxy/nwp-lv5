@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 32px">
                <div class="card-header">{{ __('home.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                        @role('student')
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('home.titleHR') }}</th>
                                        <th>{{ __('home.titleEN') }}</th>
                                        <th>{{ __('home.task') }}</th>
                                        <th>{{ __('home.type') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $task->name_hr }}</td>
                                            <td>{{ $task->name_en }}</td>
                                            <td>{{ $task->task }}</td>
                                            <td>{{ $task->type }}</td>
                                            <td>
                                                <button>{{ __('home.select') }}</button>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endrole

                        @role('teacher')

                        @endrole

                        @role('admin')
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('home.name') }}</th>
                                        <th>{{ __('home.email') }}</th>
                                        <th>{{ __('home.role') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->roles }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endrole
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
