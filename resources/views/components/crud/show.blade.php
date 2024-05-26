<x-scope title="Show">
    <style>
        #show{
            position: relative;
            #back-to-all-posts{
                position: absolute;
                top: 15px;
                right: 0;
            }
        }
    </style>
    <div id="show" class="d-flex align-items-center justify-content-center py-5">
        <a id="back-to-all-posts" href="{{route('all-posts')}}" class="btn btn-dark text-white">Back</a>
        <div class="card text-center" style="width: 18rem;">
            <img src="{{asset('storage/'.$post->img)}}" class="card-img-top" style="height:80px ;" alt="...">
            <div class="card-body">
                <p class="card-text">{{Str::limit($post->desc,30,'...')}}</p>
                <div class="d-flex justify-content-center gap-3 w-100">
                    <a href="{{route('post.edit',$post)}}" class="btn btn-success">Edit</a>
                    <form method="POST" action="{{route('post.destroy',$post)}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger delete-btn" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
     </div>
</x-scope>

<script src="{{asset('js/delete-confirmation.js')}}"></script>