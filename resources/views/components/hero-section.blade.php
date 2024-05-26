<div class="d-flex justify-content-center pt-5">
  <form class="w-100" method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="text" class="form-label">Image description</label>
          <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{old('desc')}}" id="text" aria-describedby="text" placeholder="Description...">
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
        </div>
        <button type="submit" class="btn btn-info text-white">Submit</button>
      </form>
</div>