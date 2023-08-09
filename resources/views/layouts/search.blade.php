<div class="search">
    <div style="flex: 1">
        @if (session()->has('success'))
            <div class="message">{{session('success')}}</div>
        @endif        
    </div>
    <div style="flex: 2">
        <form method="GET" action="{{route('project.search')}}">
            @csrf
            <input type="text" name="name" placeholder="Project name" required onblur="this.value=this.value.trim()" />
            <button type="submit" class="btn-sm btn-search">Search</button>
        </form>        
    </div>
    <div>
        <a class="btn-sm btn-create" href="{{route('project.create')}}" style="float: right;">New Project</a>        
    </div>
</div>