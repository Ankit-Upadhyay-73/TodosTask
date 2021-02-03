@extends('template.template')
@section('content')
    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $("#del").on('click', function(e) {
            e.preventDefault(); 
        
            var $this = $(this);
        
            $.post({
                type: $this.data('method'),
                url: $this.attr('href')
            }).done(function (data) {
                alert('success');
                console.log(data);
            });
        });
    </script>                    

    <div class="card">
        <div class="header">
            <h2>Tasks</h1>
        </div>

        <div class="body p-3"> 

            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Edit/Delete</th>
                </tr>
                </thead>
                <tbody>
                    
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{$task->name}}</td>
                            <td>{{$task->date}}</td>
                            <td>
                                <a href="/tasks/{{$task->id}}/edit" >Edit</a>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <a id="del" href="{{ route('tasks.delete', $task->id) }}" data-method="delete" class="jquery-postback">Delete</a>
                            </td>                        
                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>

    </div>


@endsection
