@if (count($posts))
	@foreach ($posts as $post)
		@include('public.posts.excerpt')
	@endforeach
@endif