<html>
<body>
    @foreach($tasks as $key=>$task)
        {{$task->name}}
        <br>
        {{$task->title}}
        <br>
        <form action="{{route('posts.destroy',$task->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
            
            <a href="{{route('posts.edit',$task->id)}}" class="btn btn-danger" >Edit</a>
       
    @endforeach
</body>
</html>