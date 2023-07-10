<h1>this is include page</h1>
@forelse ($fruits as $key=> $fruit)
<li>{{$key}}={{$fruit}}</li>

    
@empty
<p>No vale</p>
    
@endforelse