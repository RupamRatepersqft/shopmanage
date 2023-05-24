{% include 'commons/header.php' %}
{% include 'commons/header_breadcrumbs.php' %}
{% include 'commons/sidebar.php' %}
<style type="text/css">
  label{
    font-size: 16px;
    font-weight: 600;
    color: black;
  }
  .btn{
    background-color: #6362e7;
    color: white;
    margin-top: 10px;
  }
  .btn:hover{
    color: white;
  }
  .form-control:focus{
    box-shadow: none;
  }
  a#cke_48{
    display: none;
  }
  .button-group{
    text-align: right;
  }
</style>

<div class="page-body">
  <!-- Container-fluid starts-->
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
            <form id="post_blog" action="{{u}}sales/save_sales" method="post" enctype="multipart/form-data">
              <hr>
              <h3>Customer Info</h3>
              <hr>

              <div class="row">
                <div class="col-md-3 mb-3">
                  <label class="form-control-label">Customer Name</label>
                  <input class="form-control" type="text" name="customername" id="customername">
                </div>
             
                <div class="col-md-3 mb-3">
                  <label class="form-control-label">Grand Total</label>
                  <input class="form-control" type="text" name="gtotal" id="gtotal" disabled>
                </div>
             
                <div class="col-md-3 mb-3">
                  <label class="form-control-label">Total Item</label>
                  <input class="form-control" type="text" name="totalitem" id="totalitem" value="1" disabled>
                </div>
              </div>
              <hr>

              <h3>Product Info</h3>
              <hr>

              <div id="fieldadd">
                <div class="row addmore">
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label">Product</label>
                      <input class="form-control" type="text" name="product_name[]" placeholder="Product Name">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class=" form-control-label">Category</label>
                      <select name="blog_sub_category[]" id="blog_sub_category" class="form-control">
                        <option value="Category">Category</option>
                        <option value="Category">Category</option>
                        <option value="Category">Category</option>
                        <option value="Category">Category</option>                   
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label">Product Code</label>
                      <input class="form-control" type="text" name="product_code[]" placeholder="Product Code">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label">Price</label>
                      <input class="form-control" type="number" id="product_price0" name="product_price[]" onkeyup="gettotalprice(0)">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label">Quantity</label>
                      <input class="form-control" type="number" id="product_qty0" name="product_qty[]" onkeyup="gettotalprice(0)">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label">Measurement Type</label>
                      <input class="form-control" type="text" name="product_qty_type[]">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label">Total</label>
                      <input class="form-control total" type="number" id="total_bill0" name="total_bill[]" onchange="getTotalQuantity()">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label" >Comment</label>
                      <textarea class="form-control" name="comment[]" id="comment"></textarea>
                    </div>
                </div>
                <hr>
              </div>

              <div class="row">
                <div class="col-md-12 button-group mb-4 px-3">
                  <input type="button" name="addmore" id="addmore" value="Add more" onclick="addmorefield()">
              </div>
              </div>
              <div class="row">
                <div class="col-md-12 button-group mb-4 px-3">
                  <button class="btn me-2" id="submit-btn">Submit</button>
                </div>
              </div>
            </form>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

<script>

  var u = "{{ u }}";

</script>
<script>
    function gettotalprice(id){
        var product_qty = $('#product_qty'+id).val();
        var product_price = $('#product_price'+id).val();

        if(product_qty.length > 0 && product_price.length > 0){
          let total_price=product_qty*product_price;
          $('#total_bill'+id).val(total_price);
          getTotalQuantity();
        }
        else{
          $('#total_bill'+id).val(0);
          getTotalQuantity();
        }
    }

    function getTotalQuantity() {
      var sum = 0;
      $('.total').each(function() {
        var val = parseFloat($(this).val());
        if (!isNaN(val)) {
          sum += val;
        }
      });
      $('#gtotal').val(sum);
      $('#totalitem').val(sum);
      // return sum;
    }

    function addmorefield(){
        let trno = $('#fieldadd div.addmore').length;
        // alert(trno);
        let prevselect = trno - 1; 
        let slno = trno;

        let html='';
        html += '<div class="row addmore" id="addmoregodown'+slno+'">';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label">Product</label>';
        html += '<input class="form-control" type="text" name="product_name[]" placeholder="Product Name">';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class=" form-control-label">Category</label>';
        html += '<select name="blog_sub_category[]" id="blog_sub_category'+slno+'" class="form-control">';
        html += '<option value="Category">Category</option>';
        html += '<option value="Category">Category</option>';
        html += '<option value="Category">Category</option>';
        html += '<option value="Category">Category</option>';            
        html += '</select>';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label">Product Code</label>';
        html += '<input class="form-control" type="text" name="product_code[]" placeholder="Product Code">';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label">Price</label>';
        html += '<input class="form-control" type="number" id="product_price'+slno+'" name="product_price[]" onkeyup="gettotalprice('+slno+')">';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label">Quantity</label>';
        html += '<input class="form-control" type="number" id="product_qty'+slno+'" name="product_qty[]" onkeyup="gettotalprice('+slno+')">';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label">Measurement Type</label>';
        html += '<input class="form-control" type="text" name="product_qty_type[]">';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label">Total</label>';
        html += '<input class="form-control total" type="number" id="total_bill'+slno+'" name="total_bill[]" onchange="getTotalQuantity()">';
        html += '</div>';
        html += '<div class="col-md-3 mb-3">';
        html += '<label class="form-control-label" >Comment</label>';
        html += '<textarea class="form-control" name="comment[]" id="comment'+slno+'"></textarea>';
        html += '</div>';
        html += '<div><input class="mb-2" type="button" value="Remove" onclick="remove('+slno+')"></div>';
        html += '<hr>';
        html += '</div>';

        $('#fieldadd').append(html);

        let totalitem = parseInt($('#totalitem').val());
        totalitem = totalitem + 1;
        $('#totalitem').val(totalitem);

    }

    function remove(slno){
      $('#addmoregodown'+slno).remove();

      let totalitem = parseInt($('#totalitem').val());
      totalitem = totalitem - 1;
      $('#totalitem').val(totalitem);
    }


    function addcategory()
    {
        var modal_body = $('#modal_display >  div.modal-dialog > div.modal-content > div.modal-body');
        var modal_header = $('#modal_display >  div.modal-dialog > div.modal-content > div.modal-header');
        var modal_footer = $('#modal_display > modal_dialog div.modal-dialog > div.modal-content > div.modal-footer');
        var html='';
        modal_header.html('Add Category');

        html+='<form>';
        html+='<div class="form-group"><lable for="addcat" class="form-label">Enter Category</lable>';
        html+='<input class="form-control" type="text" id="addcat" name="addcat" value=""/></div>';      
        html+='<br><div><button class="btn btn-success" type="button" onclick="savecategory(`category`)">Submit</button></div></form>';
        modal_body.html(html);
        $("#modal_display").modal("show"); 
    }

</script>

<!--  -->

{% include 'commons/footer.php' %}