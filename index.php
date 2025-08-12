<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Product list</h1>
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnAdd">Add Product</button>
        <table class="table text-center align-middle mt-5" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Iamge</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'connection.php';
                    global $con;
                    $select="SELECT * FROM `tb_products`";
                    $exe=$con->query($select);
                    $no=0;
                    if($exe->num_rows>0){
                        while($row=$exe->fetch_assoc()){
                            $no+=1;
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$row['code'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['price'].'</td>
                                    <td>'.$row['stock'].'</td>
                                    <td>
                                        <img width="80" src="./uploads/'.$row['image'].'" alt="">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnEdit">Edit</button>
                                        <button class="btn btn-danger" pro-id="'.$row['code'].'" data-bs-toggle="modal" data-bs-target="#exampleModal1" id="btnDelete">Delete</button>
                                    </td>
                                </tr>
                            ';
                        }
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    <!-- Modal add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <input type="hidden" name="code" id="code" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" min="0">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <input type="hidden" name="old_image" id="old_image">
            </div>
            <div class="form-group mt-3 d-flex justify-content-end gap-2">
                <input type="submit" id="save" class="btn btn-primary" name="btn" value="Save">
                <input type="submit" id="edit" class="btn btn-success" name="btn" value="Edit">
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal delete -->
 <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="delete.php" method="post">
            <input type="hidden" name="delete_id" id="delete_id">
            <div class="form-group d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Yes, delete it.</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php 
    include 'connection.php';
?>
<script>
    $(document).ready(function(){
        $('#btnAdd').click(function(){
            $('#save').show();
            $('#edit').hide();
            $('#title').html("Add Product")
        })
        $(document).on('click','#btnDelete',function(){
            let id=$(this).attr('pro-id');
            $('#delete_id').val(id);   
        })
        $(document).on('click','#btnEdit',function(){
            $('#save').hide();
            $('#edit').show();
            $('#title').html("Edit Product");
            // get data from table
            const tr=$(this).parents('tr');
            const code=tr.find('td').eq(1).text();
            const name=tr.find('td').eq(2).text();
            const price=tr.find('td').eq(3).text();
            const stock=tr.find('td').eq(4).text();
            const image=tr.find('img').attr('src').split('/').pop();
            // set into form
            $('#code').val(code);
            $('#name').val(name);
            $('#price').val(price);
            $('#stock').val(stock);
            $('#old_image').val(image);  
        })
    })
</script>