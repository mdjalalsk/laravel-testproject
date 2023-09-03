@php
    $user="jalal";
    $fruits = ["apple", "banana", "orange", ];
@endphp
<script>
    // var data=@json($fruits);
    // blade use 
    var data ={{Js::from($fruits)}}

    data.forEach(element => {
       console.log(element); 
    });
    
</script>