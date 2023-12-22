<div class="col-md-6" data-aos="fade">
    <article class="blog-post">
        <div class="post-slider slider-sm rounded">
            @if ($post->thumbnail != '')
                <img loading="lazy" decoding="async" src="{{ asset('storage/'.$post->thumbnail) }}" alt="Post Thumbnail">
            @endif
        </div>
        <div class="pt-4">
            <div class="d-flex justify-content-between">
                <p class="mb-3">{{ \Carbon\Carbon::parse($post->created_a)->format('d M, Y') }}</p>
                <p class="mb-3">{{ $post->author }}</p>
            </div>
            <h2 class="h4"><a class="text-black" wire:navigate href="#">{{ $post->title }}</a></h2>
            <a wire:navigate href="#" class="text-primary fw-bold">Read More</a>
        </div>
    </article>
</div>