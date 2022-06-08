<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="cart-header">Product</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0 ?>
                            @foreach($products as $item) 
                            <?php $no++ ?>
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $item->title }}</td>
                                <td>Rp {{ number_format($item->price,2,",",".") }}</td></td>
                                <td>
                                    <button class="btn btn-sm btn-info text-white">Edit</button>
                                    <button class="btn btn-sm btn-danger text-white">Delete</button>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
