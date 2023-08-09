<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.header')
    @include('layouts.search')
    <table>
        <thead>
            <th style="width: 35%;">Name</th>
            <th>Description</th>
            <th style="width: 10%;">Difficulty</th>
            <th style="width: 15%;">Actions</th>
        </thead>
        <tbody>
            @if ($projects)
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->difficulty }}</td>
                        <td>                            
                            <a class="btn-sm btn-edit" href="{{route('project.edit', $project->id)}}">
                                Edit
                            </a>
                            <form method="POST" action="{{route('project.delete', $project->id)}}" style="display: inline !important;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-sm btn-delete" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>                            
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>

</html>