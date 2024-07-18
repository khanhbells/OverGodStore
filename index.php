<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OverGod Shop</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
    <div class="wrapper">
            <?php
            session_start();
            include("admincp/config/config.php");
            include("pages/menu.php");
            include("pages/main.php");
            include("pages/footer.php");
            ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
                    // Show the first tab and hide the rest
            $('#tabs-nav li:first-child').addClass('active');
            $('.tab-content').hide();
            $('.tab-content:first').show();

            // Click function
            $('#tabs-nav li').click(function(){
            $('#tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').hide();
            
            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
            });
    </script>
</body>
<script>
        // Cố định menu
        const header = document.querySelector("header")
        window.addEventListener("scroll",function(){
        x = window.pageYOffset
        // console.log(x)
        if(x>0){
            header.classList.add("sticky")
        }
        else{
            header.classList.remove("sticky")
                }
            }
        )
        // const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
        // itemsliderbar.forEach(function(menu,index){
        //     menu.addEventListener("click",function(){
        //         menu.classList.toggle("block")
        //     })
        // })
</script>
<script type="text/javascript">
    $(document).ready(function() {

        var back = $(".prev");
        var next = $(".next");
        var steps = $(".step");

    next.bind("click", function() {
        $.each(steps, function(i) {
            if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
            $(steps[i]).addClass('current');
            $(steps[i - 1]).removeClass('current').addClass('done');
            return false;
            }
        })
        });
    back.bind("click", function() {
        $.each(steps, function(i) {
            if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
            $(steps[i + 1]).removeClass('current');
            $(steps[i]).removeClass('done').addClass('current');
            return false;
            }
        })
        });
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AbHM0V4siXCiNQut3sLuuxBPKyqRh7BwVAYEupulI8L_aR43qJsinco7ILH2KS_lvJfQKG3Je5CgZX5E&currency=USD"></script>
<script>
      paypal.Buttons({

      	style: {
		    layout:  'vertical',
		    color:   'blue',
		    shape:   'rect',
		    label:   'paypal'
		  },
        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
        	var tongtien = document.getElementById('tongtien').value;
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: tongtien // Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {

          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                window.location.replace('http://localhost:81/thuctapcsdl/index.php?quanly=camon&thanhtoan=paypal');
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        },
        onCancle:function(data){
        	 window.location.replace('http://localhost:81/thuctapcsdl/index.php?quanly=thongtinthanhtoan');
        }
      }).render('#paypal-button');
      let searchForm = document.querySelector('.search-form');
    document.querySelector('#search-btn').onclick = () =>{
        searchForm.classList.toggle('active');
    }

    </script>
</html>