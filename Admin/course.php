
<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../connection.php';
    global $con;
    $email=$_SESSION['login'];
    $select_user="SELECT `id` FROM `users` WHERE `email`='$email'";
    $exe=$con->query($select_user);
    $user=$exe->fetch_assoc();  
?>
<div class="modal">
    <form action="" method="post" enctype="multipart/form-data">
        <h1 id="title">Add Course</h1>
        <div class="form-group">
            <input type="hidden" name="" id="user_id" value="<?php echo $user['id'] ?>">
            <label for="">Course Name</label>
            <select name="name" id="name" class="form-control">
                <option value="Web Design">Web Design</option>
                <option value="Web Design/React">Web Design/React</option>
                <option value="Web Backend">Web Backend</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Time</label>
            <select name="time" id="time" class="form-control">
                <option value="8:00-11:00">8:00-11:00</option>
                <option value="11:00-1:30">11:00-1:30</option>
                <option value="2:00-5:00">2:00-5:00</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <img class="w-[60px] rounded-md cursor-pointer"  id="img" src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" alt="">
            <input type="hidden" name="image_name" id="image_name">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="button mt-2 flex justify-end gap-2">
            <button type="button" class="py-2 px-3 text-white rounded-md bg-blue-500" id="save">Save</button>
            <button type="button" class="py-2 px-3 text-white rounded-md bg-green-500" id="edit">Edit</button>
            <button type="button" class="py-2 px-3 text-white rounded-md bg-red-500" id="cancel">Cancel</button>
        </div>
    </form>
</div>  
<?php 
    include 'sidebar.php';
?>
<link rel="stylesheet" href="index.css">
   <div class="overflow-x-auto">
                 <button class="bg-blue-400 py-2 px-3 text-white rounded-md hover:bg-blue-600" id="addCourse">Add Course</button>   
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Time
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Image
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
    
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">1</div>
                                       
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">JS</div>
                              
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                59$
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                12:30-1:45
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <img class="w-[40px] h-[40px] rounded-md" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                      
                        
                        
                        
                    </tbody>
                </table>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $('.modal').hide();
        $('#addCourse').click(function(){
            $('.modal').show();
            $('#save').show();
            $('#edit').hide();
            $('#title').html('Add Course')
        })
        $('#cancel').click(function(){
            $('.modal').hide();
        })
        $('#image').hide();
        $('#img').click(function(){
            $('#image').click();
        })
        $('#image').change(function(){
            var formData=new FormData();
            let file=this.files[0];
            formData.append('image',file);
            $.ajax({
                url:'moveFile.php',
                method:'post',
                data:formData,
                contentType:false,
                processData:false,
                cache:false,
                success:function(respone){
                    $('#img').attr('src','../upload/'+respone)
                    $('#image_name').val(respone)
                }
            });
        })
        $('#save').click(function(){
            // get data from form
            let user_id=$('#user_id').val();
            let name=$('#name').val();
            let price=$('#price').val();
            let time=$('#time').val();
            let image=$('#image_name').val();
            let des=$('#description').val();
            $.ajax({
                url:'insert.php',
                method:'post',
                data:{
                    user_id:user_id,
                    name:name,
                    price:price,
                    time:time,
                    image:image,
                    des:des
                },
                cache:false,
                success:function(response){
                    console.log(response);
                    
                }
            });
            $('.modal').hide();
        })
    })
</script>          