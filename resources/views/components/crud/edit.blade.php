<x-scope title="Edit">
    <div class="d-flex justify-content-center pt-5">
        @if (session()->has('success'))
          <div class="alert alert-success text-center">{{session()->get('success')}}</div>
        @endif
        <form class="w-100" method="POST" action="{{route('post.update',$post)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
              <div class="mb-3">
                <label for="text" class="form-label">Image description</label>
                <input type="text" class="form-control @error('desc') is-invalid @enderror" value="{{$post->desc}}" name="desc" id="text" aria-describedby="text" placeholder="Description...">
                @error('desc')
                    <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control @error('img') is-invalid @enderror" name="img" id="img" aria-describedby="img">
                @error('img')
                  <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="mt-3 border w-25 rounded">
                    <img src="{{asset('storage/'.$post->img)}}" alt="" width="100%">
                </div>
              </div>
              <button type="submit" class="btn btn-info">Edit</button>
            </form>
      </div>
</x-scope>