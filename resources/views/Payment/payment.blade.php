<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src ="https://www.paypal.com/sdk/js?client-id={{config('paypal.client_id')}}&currency=USD&intent=capture"></script>
</head>
<body>


  
    <div class="container text-center">
        <div class="row mt-3">
            <div class="col-12 col-lg-6 offset-log-3 alert alert-success"
            role="alert"
            id="paypal-success"
            style="display: none;">
                you have successfully paid
            </div>
            <div class="col-12 col-lg-6 offset-log-3 mt-3 mb-3">
                <div class="input-group">
                    <span class="input-group-text">Enter Transaction ID</span>
                    <input type="text" class="form-control" id="paypal-amount" value="10" aria-label="Amount (to the nearest usd)">
                    <span class="input-group-text">.00</span>
                </div>
            
            </div>
            <div class="col-12 col-lg-6 offset-lg-3" id="paypal_options">
             
        </div>
    </div>

        
    


</body>
<script>
    paypal.Buttons({
        createOrder: function() {
            return fetch("/create/" + document.getElementById('paypal-amount').value)
            .then((response)=> response.text())
            .then((id) => {
                return id;
            });
        },
        onApprove: function() {
            return fetch("/complete/", {
                method: "post",
                headers: {
                    "X-CSRF-TOKEN": '{{csrf_token()}}'}})
                    .then((response) => response.json())
                    .then((order_details) => {
                        document.getElementById('paypal-success').style.display = 'block';
                      
                    })
                    .catch((error) => {
                    console.log(error);
                });

        },
        onCancel : function(data) {
            console.log(data);
        },
        onError: function(err) {
            console.log(err);
        }
    }).render('#paypal_options');
</script>
</html>