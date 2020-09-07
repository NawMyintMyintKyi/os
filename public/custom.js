$(document).ready(function(){

	show_cart();
	update_cart_count();

	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});

	 $(".addtocartBtn").click(function () {
    //console.log('Hello');
    var id=$(this).data('id');
    var product_name=$(this).data('name');
    var product_price=$(this).data('price');
    var product_photo=$(this).data('photo');
    var product_discount=$(this).data('discount');
    //console.log(id,product_name,product_price,product_photo);
    var product={
      id:id,
      product_name:product_name,
      product_price:product_price,
      product_photo:product_photo,
      product_discount:product_discount,
      qty:1
    }
    //console.log(product);
    add_to_cart(product);
    update_cart_count();
  })
    function add_to_cart(product){
      var mycart=localStorage.getItem('mycart');
      if(!mycart){
        mycart='{"product_list":[]}';
      }
      var mycart_obj=JSON.parse(mycart);
     // console.log(mycart_obj);
      var has_id=false;
      $.each(mycart_obj.product_list,function(i,v){
        if(v.id==product.id){
          has_id=true;
          v.qty+=1;
        }
      })
      if(!has_id){
      mycart_obj.product_list.push(product);//push product into mycart_obj
      }
      localStorage.setItem('mycart',JSON.stringify(mycart_obj));//convert mycart to JSON string and store in local storage

    }

    $("#shoppingcart_table").on('click','.fa-plus-circle',function(){
      var id=$(this).data('id');
      //alert(id);
      var mycart=localStorage.getItem('mycart');
      var mycart_obj=JSON.parse(mycart);
      $.each(mycart_obj.product_list,function(i,v){
        if(v.id==id){
          v.qty++;
        }
      })

      localStorage.setItem('mycart', JSON.stringify(mycart_obj));
      show_cart();
      update_cart_count();

    })

   // show_cart();

    $("#shoppingcart_table").on('click','.fa-minus-circle',function(){
      var myid=$(this).data('id');
      //alert(id);
      var mycart=localStorage.getItem('mycart');
      var mycart_obj=JSON.parse(mycart);
      $.each(mycart_obj.product_list,function(i,v){
        if(v){
        if(v.id==myid){
          if(v.qty==1){
            var ans=confirm('Are you sure to delete?');
            if(ans){
              //console.log(mycart_obj);
              mycart_obj.product_list.splice(i,1);
            }
          }
            else{
          
          v.qty--;
        }
      }
    }

      })


      localStorage.setItem('mycart', JSON.stringify(mycart_obj));
      show_cart();
      update_cart_count();

    })

    $("#shoppingcart_table").on('click','.btn_delete',function(){
      var myid=$(this).data('id');
      //alert(id);
      var mycart=localStorage.getItem('mycart');
      var mycart_obj=JSON.parse(mycart);
      $.each(mycart_obj.product_list,function(i,v){
        if(v){
        if(v.id==myid){
          
            var ans=confirm('Are you sure to delete?');
            if(ans){
              //console.log(mycart_obj);
              mycart_obj.product_list.splice(i,1);
            }
          
           
      }
    }

      })


      localStorage.setItem('mycart', JSON.stringify(mycart_obj));
      show_cart();
      update_cart_count();

    })


    
    

    function show_cart(){
      var mycart=localStorage.getItem('mycart');
      if(mycart){
        var mycart_obj=JSON.parse(mycart);
        if(mycart_obj.product_list.length){
          var html='';
          var j=1;
          var total=0;
          $.each(mycart_obj.product_list,function(i,v){
            if(v){
            var id=v.id;
            var product_name=v.product_name;
            var product_price=v.product_price;
            var product_photo=v.product_photo;
            var qty=v.qty;
            var subtotal=qty*product_price;
            total+=subtotal;
            html+=`<tr>
              
              <td>${product_name}</td>
              <td><img src='${product_photo}' width = 120 height=100></td>
             <td>${product_price}</td>
              <td><i class='btn fa fa-plus-circle fa-2x' style='color:blue' data-id=${v.id}></i>
              <span class='badge badge-success' style='font-size:20px'>
              ${qty}</span><i class='btn fa fa-minus-circle fa-2x' style='color:red' data-id=${v.id}></i></td>
              <td>${subtotal} Ks</td>
              <td><a href='#' class='btn btn-danger btn_delete' data-id=${v.id}>Delete</a></td>

            </tr>`;
            j++;
          }
          })
          html+=`<tr><td colspan = 5>Total</td>
                      <td colspan=2>${total}</td></tr>`;
              $("#shoppingcart_table").html(html);
              $("#total").html(total);

        }else{
          $("#shoppingcart_table").html('');
        }
      }else{
        $("table").html('');
        
      }
    }

    function update_cart_count(){
        var mycart=localStorage.getItem('mycart');
        if(mycart){
          //json string to object
          var mycart_obj=JSON.parse(mycart);
          //check product_list array
          if(mycart_obj.product_list.length){
            var total=0;
            $.each(mycart_obj.product_list,function(i,v){
              console.log(i,v);
              total+=v.qty;
            })
            //console.log(total);
            $(".cart_item_count").html(total);
          }else{
            $(".cart_item_count").html(0);
          }
        }else{
          $(".cart_item_count").html(0);
        }
    }

    //click checkout button

    $('.buy_now').on('click',function(){
    	var notes=$('.notes').val();
    	var shopString=localStorage.getItem("mycart");
    	//alert(shopString);
    	//alert(notes);
    	if(shopString){
    		//var shopArray=JSON.parse(shopString);

    		$.post('/orders',{shop_data:shopString,notes:notes},function(response){
    			if(response){
    				alert(response);
    				localStorage.clear();
    				getData();

    				location.href="/";

    			}
    		})
    	}
    })
 

    $(".product_table").on('click','.delete_btn',function(){
      var myid=$(this).data('id');
      //alert(id);
      var mycart=localStorage.getItem('mycart');
      var mycart_obj=JSON.parse(mycart);
      $.each(mycart_obj.product_list,function(i,v){
        if(v){
        if(v.id==myid){
          
            var ans=confirm('Are you sure to delete?');
            if(ans){
              //console.log(mycart_obj);
              mycart_obj.product_list.splice(i,1);
            }
          
           
      }
    }

      })


      localStorage.setItem('mycart', JSON.stringify(mycart_obj));
      show_cart();
      update_cart_count();

    })


 })


