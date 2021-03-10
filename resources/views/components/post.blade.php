@props(['post' => $post])

<div class="mb-4 mt-3">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a>
    <span class="text-sm text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2">
        {{ $post->body }}
    </p>

    @if ($post->ownedBy(auth()->user()))
        <div>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">Delete</button>
            </form>
        </div>
    @endif


    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('post.likes', $post->id) }}" method="POST" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('post.likes', $post->id) }}" method="POST" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
                <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}
                </span>
            @endif

        @endauth
    </div>

</div>
