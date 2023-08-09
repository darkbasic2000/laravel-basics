<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Project</title>
</head>

<body>
   
    <div class="container">    
        <div class="form">
            <form method="POST" action={{ route('project.store') }}>
                @csrf
                @method('post')
                <div class="form-group">
                    <h1>Create Project</h1>
                </div>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Project Name" maxlength="50" value="{{old('name')}}" />
                </div>
                <div class="form-group">
                    <textarea name="description" placeholder="Project Description" maxlength="200">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <select name="difficulty">
                        <option value="">Select a dificulty</option>
                        <option value="Beginner" @if (old('difficulty') == 'Beginner') selected @endif>Beginner</option>
                        <option value="Intermediate" @if (old('difficulty') == 'Intermediate') selected @endif>Intermediate</option>
                        <option value="Advanced" @if (old('difficulty') == 'Advanced') selected @endif>Advanced</option>
                    </select>
                </div>
                <div class="form-group">
                    <div style="display: flex; justify-content: space-evenly;">
                        <button type="button" class="btn btn-cancel" id="cancelCreate">Cancel</button>
                        <button type="submit" class="btn btn-save">Save</button>
                    </div>                
                </div>
                <div class="form-group">
                    @if($errors->any())
                        <div class="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif                    
                </div>
            </form>
        </div>
    </div>

</body>

</html>