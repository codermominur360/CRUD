<script>
    $(document).ready(function () {
        $.get('{{url("products")}}', function (data) {
            $("#product-list").empty().append(data);
        });

        $('#product-list').on('click',".add-product-btn",function(e) {
            e.preventDefault();
            $.get('{{url("products/create")}}',function(data){
                $("#add_product").empty().append(data);
                $("#create-add-product").modal("show");
            });
        });

        $('#add_product').on('click',".create-product-form",function(e){
             e.preventDefault();
             var formData=$(this).serialize();
             var url="{{url('/products')}}"
                $.ajax({
                    url:url,
                    method:"post",
                    data:formData,
                    success:function(data) {
                        $("#product-list").empty().append(data);
                        $("#create-add-product").modal("hide");
                    }
                })
        });

        $('#product-list').on('click',"#action",function(e){
            e.preventDefault();
              var id =$(this).data('target');
              var url='{{url('products')}}/'+ id + '/edit';
              $.get(url,function (data) {
                  $('#add_product').empty().append(data);
                 $('#edit-product').modal('show');
             })
        });

        $('#add_product').on('click','#edit-product-btn',function (e) {
            e.preventDefault();
            var id=$(this).data('target');
            var url='{{url('products')}}/'+ id;
            var dataForm=$('#edit-product-form').serialize();
            $.ajax({
                url:url,
                data:dataForm,
                method:'POST',
                success:function(data) {
                    $("#product-list").empty().append(data);
                    $("#edit-product").modal('hide');
                }
            });
        });

        $('#add_product').on('click','#delete-product-form',function (e) {
            e.preventDefault();
           var id=$(this).data('target');
           var url= '{{url('products')}}/'+id;
           var dataForm=$(this).serialize();
           $.ajax({
               url:url,
               method:"post",
               data:dataForm,
               success:function (data) {
                   $("#product-list").empty().append(data);
                   $("#edit-product").modal('hide');
               }
           })


        });

    });
</script>

