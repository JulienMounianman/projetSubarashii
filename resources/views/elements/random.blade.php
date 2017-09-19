
<br><h1 class="text-center">
    <a href="{{route('AnimeShow', ['id'=>$randomAnime->id])}}">{{$randomAnime->title}}</a>
</h1><br>
<img src="{{asset('img/'.$randomAnime->pictures)}}" alt="image-anime" class="image-anime-random">
{{$randomAnime->summary}}<br>









