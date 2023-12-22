<div>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{ $post->title }}</h2>
                        <span>{{ \Carbon\Carbon::parse($post->created_a)->format('d M, Y') }} <span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a wire:navigate href="{{ route('blog').'?category='.$post->category_slug }}" class="ml-1">{{ $post->category_name }} </a></p>
                        <p class="list-inline-item">Author : <a wire:navigate href="#" class="ml-1">{{ $post->author }} </a></p>
                    </div>
                    <div class="mb-5 text-center">
                    <div class="post-slider rounded overflow-hidden">
                        @if ($post->thumbnail != '')
                            <img loading="lazy" decoding="async" src="{{ asset('storage/'.$post->thumbnail) }}" alt="Post Thumbnail">
                        @endif
                    </div>
                    </div>
                    <div class="content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
