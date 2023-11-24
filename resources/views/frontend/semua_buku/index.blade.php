@extends('frontend.app')
@section('title', 'SemuaBuku')
@section('content')


<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "Electronics"</h2>
					<p>123 Results on 12 December, 2017</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
                        <h4 class="widget-header">All Category</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Laptops <span>93</span></a></li>
                            <li><a href="category.html">Iphone <span>233</span></a></li>
                            <li><a href="category.html">Microsoft  <span>183</span></a></li>
                            <li><a href="category.html">Monitors <span>343</span></a></li>
                        </ul>
                    </div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Short</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="javascript:void(0);"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid-list">
					<div class="row mt-30">
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="">
                                            <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                    @foreach($buku as $book)
                                        <div class="col-sm-12 col-lg-4 col-md-6">
                                            <!-- product card -->
                                            <div class="product-item bg-light">
                                                <div class="card" >
                                                    <div class="thumb-content">
                                                        <!-- <div class="price">$200</div> -->
                                                        <a href="">
                                                            <img class="card-img-top img-fluid" src="{{ url('assets/backend/img/'. $book->image) }}" alt="Card image cap">
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="card-title"><a href="">{{$book->nama_penulis}}</a></h4>
                                                        <ul class="list-inline product-meta">
                                                            <li class="list-inline-item">
                                                                <a href=""><i class="fa fa-folder-open-o"></i>{{$book->nama}}</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href=""><i class="fa fa-calendar"></i>{{$book->created_at}}</a>
                                                            </li>
                                                        </ul>
                                                        <p class="card-text">{{($book->sinopsis)}}</p>
                                                        <div class="product-ratings">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>                                    
                                </div>
                            </div>
                            <div class="pagination justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection