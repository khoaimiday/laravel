{{-- <div class="card" style="width: 18rem;">
    <img src="{{ !empty($image)?: "https://picsum.photos/300/375" }}" class="card-img-top" alt="...">
<div class="card-body">
    <h5 class="card-title">{{ $name }}</h5>
    <p class="card-text">{{ $description }}</p>
    <p class="card-text">{{ $price }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div> --}}


<div class="card">
    <img src="{{ !empty($image)?: "https://picsum.photos/300/375" }}" alt="Denim Jeans" style="width:100%">
    <div class="card-body">
        <h5 class="card-title">{{$name}}</h5>
    <p class="price">{{$price}}</p>
    <p>{{$description}}</p>
    <p><button>Add to Cart</button></p>
    </div>
</div>

<style>
    
</style>

