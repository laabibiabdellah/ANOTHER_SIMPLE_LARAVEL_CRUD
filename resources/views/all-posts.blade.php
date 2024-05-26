<x-scope title="All posts">
    @if (session()->has('success'))
      <div class="alert alert-success text-center">{{session()->get('success')}}</div>
    @endif
    <div class="d-flex align-items-center justify-content-center py-5">
        @if (count($posts)==0)
            <h1>NULL</h1>
         @else
            <div class="d-flex justify-content-center flex-wrap gap-5">
                @foreach ($posts as $post )
                <div class="card text-center" style="width: 18rem;">
                    <img src="{{asset('storage/'.$post->img)}}" class="card-img-top" style="height:150px ;" alt="...">
                    <div class="card-body">
                      <p class="card-text">{{Str::limit($post->desc,30,'...')}}</p>
                      <a href="{{route('post.show',$post)}}" class="btn btn-info text-white">Show</a>
                    </div>
                  </div>
                @endforeach
            </div>
        @endif
     </div>
</x-scope>
