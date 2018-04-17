<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href=" <?=base_url('assets/css/main.css'); ?> ">
  <link rel="stylesheet" type="text/css" href=" <?=base_url('assets/dashboard/dashboard.css'); ?> ">
  <link rel="stylesheet" type="text/css" href=" <?=base_url('assets/css/table_products.css'); ?> ">
  <!-- Font-icon css-->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




  <title>Tradition admin</title>
</head>
<body class="app sidebar-mini">



  <?php $this->load->view('dashboard/table_header.php'); ?>  



  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Basic Tables</h1>
        <p>Basic bootstrap tables</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tables</li>

        <li class="breadcrumb-item active"><a href="#">Products</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-11">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal" data-whatever="@mdo">Add new product</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catalogModal" data-whatever="@mdo">Add new Catalog</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catalogNameModal" 
        data-whatever="@mdo">Show Catalogs</button>
        
      </div>

      <div class="col-md-1">
        <button  class="btn btn_refresh"  type="button" id="refresh_slide" >
          <i class="fas fa-sync"></i>
        </button>
      </div>
        
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="tile" id="slide_tab">
          <h3 class="tile-title">Products Table</h3>
           <div class="row justify-content-around d-flex align-items-center " id="catalogs_table">
             <?php if (isset($catalog)): ?>
            <?php foreach ($catalog as $value): ?>
              <?php if($value->status == 1): ?>
              <div  class="col-md-2 col-lg-2 catalog_names btn" data-id="<?= $value->id ?>"> <?= $value->name ?> </div>
            
              <?php endif ?>     
           <?php endforeach ?>
         <?php endif ?>     
       </div>
    <br>
    <hr>
          <div class="row" id="products_table">

           


        </div>
      </div>
    </div>
  </div>
</main>



<div class="modal fade" id="catalogModal" tabindex="-1" role="dialog" aria-labelledby="catalogModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="catalogModal1">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="row">
            <div class="input-field col s12">
              <div class="form-group col-md-6">
                <label for="catalogName">New Catalog Name</label>
                <input type="name" class="form-control" name="catalogName" id="catalogName" placeholder="Name of Catalog">
              </div>
            </div>
          </div>

          <button type="button" data-dismiss="modal" class="btn add_catalog" > Add </button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="catalogNameModal" tabindex="-1" role="dialog" aria-labelledby="catalogNameModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="catalogs_names">
      <div class="modal-header">
        <h5 class="modal-title" id="catalogModal1">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <?php if (isset($catalog)): ?>
            <?php foreach ($catalog as $value): ?>
              <div class="col-md-6">

               <div data-id="<?= $value->id ?>">  <?= $value->name  ?></div> 
             </div>
             <div class="col-md-1"> <?= $value->status  ?></div>

             <div class="col-md-2"> <button class=" btn active_catalog_status" data-id="<?= $value->id ?>"> Active</button></div>
             <div class="col-md-2"> <button class="btn btn-danger deactive_catalog_status" data-id="<?= $value->id ?>"> Deactive</button></div>

           <?php endforeach ?>
         <?php endif ?>     
       </div>




     </div>
   </div>
 </div>
</div>



<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-product">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalh5  ">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="col-md-12" id="products_insert" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col-md-12">
             
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Name of product">
                  </div>

                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input"   name="photo" id="photo ">
                  <label class="custom-file-label" for="photo">Choose file</label>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" name="price" class="form-control" id="price"  onchange="setTwoNumberDecimal" min="0" max="10" step="0.1" value="0.00">
                </div>
                <div class="form-group">
                  <label for="description">Write about product</label>
                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="weight">weight</label>
                    <input type="number" class="form-control" id="weight" name="weight" onchange="setThreeNumberDecimal" min="0" max="10" step="0.001" value="0.000">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="MenuCatalogs">Catalogs</label>
                    <select class="form-control" name="catalog_name" id="MenuCatalogs">

                      <?php if (isset($catalog)): ?>
                        <?php foreach ($catalog as $value): ?>
                          <?php if($value->status == 1):?>

                            <option value="<?= $value->id ?> ">  <?= $value->name  ?></option>

                          <?php endif ?> 
                        <?php endforeach ?>
                      <?php endif ?>   
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary new_product" data-dismiss="modal" >Add product     </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


  

      <!-- Button trigger modal -->

<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-product">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalh5  ">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body edit_product_modal_body">
       

       <form class="col-md-12" id="products_editing_form" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col-md-12">
             
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="productName">Name</label>
                    <input type="name" class="form-control" id="productName" name="productName" placeholder="Name of product"> 
                    <input type="hidden" name="id"  id="id">
                  </div>

                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input"   name="productPhoto" id="productPhoto ">
                  <label class="custom-file-label" for="photo">Choose file</label>
                </div>
                <div class="form-group">
                  <label for="productPrice">Price</label>
                  <input type="number" name="productPrice" class="form-control" id="productPrice"  onchange="setTwoNumberDecimal" min="0" max="10" step="0.1" value="0.00">
                </div>
                <div class="form-group">
                  <label for="productDescription">Write about product</label>
                  <textarea class="form-control" name="productDescription" id="productDescription" rows="3"></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="productWeight">weight</label>
                    <input type="number" class="form-control" id="productWeight" name="productWeight" onchange="setThreeNumberDecimal" min="0" max="10" step="0.001" value="0.000">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="MenuCatalogs">Catalogs</label>
                    <select class="form-control" name="productCatalogName" id="productCatalogName">
                       <?php if (isset($catalog)): ?>
                        <?php foreach ($catalog as $value): ?>

                            <option value="<?= $value->id ?> ">  <?= $value->name  ?></option>

                        <?php endforeach ?>
                      <?php endif ?>   
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary edit_product" data-dismiss="modal" >Add changes    </button>                  <input type="checkbox" name="status" id="product_status"> 
                 <input type="checkbox" name="recomend" id="recomend">  <input type="checkbox" name="popular" id="popular">

            </div>
          </div>
        </form>
             

                    


            </div>

          </div>
        </div>




        <input type="hidden" id="base" value="<?= base_url()?>">
        <!-- Essential javascripts for application to work-->
        
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/js/main.js') ?>"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="<?= base_url('assets/js/plugins/pace.min.js') ?>"></script>
        <!-- Page specific javascripts-->
        <script src="<?= base_url('assets/dashboard/table_products.js') ?>"></script>
        <!-- Google analytics script-->
<!--    <script type="text/javascript">
if(document.location.hostname == 'pratikborsadiya.in') {
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-72504830-1', 'auto');
ga('send', 'pageview');
}
</script> -->
<script type="text/javascript">


  function setTwoNumberDecimal(event) {
    this.value = parseFloat(this.value).toFixed(2);
  }
  function setThreeNumberDecimal(event) {
    this.value = parseFloat(this.value).toFixed(3);
  }


  // $('#send_slide_image').on('click', function(e){
  //   e.preventDefault()
  // // console.log($('#textarea1').val())
  // var obj = new FormData(document.querySelector('#slide-inserting-form'))

  // $.ajax ({
  //   type: 'post',
  //   url: $('#base').val()+"admin/upload_slide_image",
  //   data:obj,
  //   contentType :false,
  //   processData :false,
  //   success:r=>{

  //     console.log(r)
  //   }

  // })

</script>
</html>