<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

  @foreach($resources as $resource) 
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-semibold mb-2">{{ $resource->title }}</h2> 
      <iframe class="p-2" width="560" height="315" src="https://www.youtube.com/embed/{{ $resource->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <p class="text-gray-600 text-justify leading-loose"> <strong>[{{ $resource->author }}]</strong> {{ Str::of($resource->description)->limit(300) }}</p>
    </div>
  @endforeach

</div>