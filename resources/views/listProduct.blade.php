<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Products</title>
</head>
<body>
    <div class="container-fluid px-5">
        <h3>Product Lists</h3>
        <button class="btn btn-primary float-end" id="btnAdd" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</button>
        <table class="table text-center align-middle" style="table-layout: fixed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Brand</th>
                    <th>Color</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $pro )
                    <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->price}}$</td>
                    <td>{{$pro->stock}}</td>
                    <td>{{$pro->brand}}</td>
                    <td>{{$pro->color}}</td>
                    <td><img width="80" src="{{$pro->image}}" alt=""></td>
                    <td style="width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$pro->description}}</td>
                    <td>
                        <button class="btn btn-warning" attr="{{$pro->id}}"  id="btnEdit" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                        <button class="btn btn-danger ms-1 ">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('submit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                     <div class="form-group">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Stock</label>
                        <input type="text" name="stock" id="stock" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Brand</label>
                        <select name="brand" id="brand" class="form-select">
                        <option value="" disabled selected>--Select Brand--</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Ford">Ford</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Kia">Kia</option>
                        <option value="Lexus">Lexus</option>
                        <option value="BMW">BMW</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Isuzu">Isuzu</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Haval">Haval</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Color</label>
                        <input type="text" name="color" id="color" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                        <input type="hidden" name="old_image" id="old_img" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <textarea name="description" class="form-control" id="des" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end mt-3 gap-2">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <input type="submit" id="save" name="btn" value="Save" class="btn btn-primary">
                <input type="submit" id="edit" name="btn" value="Edit" class="btn btn-success">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $('#btnAdd').click(function(){
            $('#exampleModalLabel').html('Add Product');
            $('#save').show();
            $('#edit').hide()
        })
        $(document).on('click','#btnEdit',function(){
            $('#exampleModalLabel').html('Edit Product');
            $('#save').hide();
            $('#edit').show();
            // get data from table
            let tr=$(this).parents('tr');
            let id=tr.find('td:nth-child(1)').text().trim();
            let name=tr.find('td:nth-child(2)').text().trim();
            let price=tr.find('td:nth-child(3)').text().split('.')[0].trim();
            let stock=tr.find('td:nth-child(4)').text().trim();
            let brand=tr.find('td:nth-child(5)').text().trim();
            let color=tr.find('td:nth-child(6)').text().trim();
            let image=tr.find('img').attr('src').trim();
            let des=tr.find('td:nth-child(8)').text().trim();

            // push data into form
            $('#id').val(id)
            $('#name').val(name)
            $('#stock').val(stock)
            $('#price').val(price)
            $('#brand').val(brand)
            $('#color').val(color)
            $('#old_img').val(image);
            $('#des').val(des);

        })
    })
</script>

