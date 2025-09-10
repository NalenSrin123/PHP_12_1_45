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
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</button>
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
                <tr>
                    <td>1</td>
                    <td>Prius</td>
                    <td>11500$</td>
                    <td>10</td>
                    <td>Toyota</td>
                    <td>White</td>
                    <td><img width="80" src="https://img.autotrader.co.za/18010572/Ensure360x270" alt=""></td>
                    <td style="width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">Prius Car</td>
                    <td>
                        <button class="btn btn-warning ">Edit</button>
                        <button class="btn btn-danger ms-1 ">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                     <div class="form-group">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" id="" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Stock</label>
                        <input type="text" name="stock" id="" class="form-control">
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
                        <input type="text" name="color" id="" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
