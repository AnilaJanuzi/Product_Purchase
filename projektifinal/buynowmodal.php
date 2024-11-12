<html>
  <head>
    <title>projektifinal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-5f3gYd8+5h3vLdLJ7Tn6G05HlwO3jsQk0biC4Irg8zpg6q3S5jM7pxK2rYr09tcT" crossorigin="anonymous">

    <link rel="icon" href="appleICONN.jpg"> 
    <meta name="theme-color" content="#7952b3">
    
    <style>
    
   
      .modal-dialog {
        max-width: 600px;
      
        margin: 50px auto;
      }

      .modal-content {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .modal-header {
        border-bottom: 2px solid #e9ecef;
        background-color: #f8f9fa;
       height:100px;
      }

      .modal-title {
        font-weight: bold;
        color: #333;
        font-size: 40px;
        text-align: center;
        padding-top: 30px;
      }

      .modal-body {
        padding-top: 20px;
        padding-left:20px;
      }

      .form-control, .form-select {
        border-radius: 8px;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
      }

      .form-label {
        font-weight: bold;
        color: #555;
      }

      .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        width: 30%;
        margin: 20px 3px;
      }

    
      .btn-primary:hover {
        background-color: #0056b3;
      }

      .modal-footer {
        border-top: 2px solid #e9ecef;
      }

      .radio-group {
        display: flex;
        flex-direction: column;
      }

      .radio-group input {
        margin-bottom: 10px;
      }


     
    </style>
  </head>

  <body>
    
    <!-- Modal -->
    <div class="modal fade" id="buynow" tabindex="-1" aria-labelledby="buynowLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          
            <h5 class="modal-title" id="buynowLabel">Buy Now</h5>
           
          </div>
          <div class="modal-body">
            <form method="POST" action="buynow.php">
              <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" required>
              </div>
              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" required>
              </div>
              <div class="form-group">
                <label for="product">Product</label>
                <input type="text" class="form-control" name="product" id="product" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" required>
              </div>
              <div class="form-group">
                <label for="country">Country</label>
                <select class="form-select" name="country" id="country" required>
                <option value="">Choose...</option>
                  <option value="Albania">Albania</option>
                  <option value="USA">USA</option>
                  <option value="Canada">Canada</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Australia">Australia</option>
                  <option value="Germany">Germany</option>
                </select>
              </div>
              <div class="form-group">
                <label for="state">State</label>
                <select class="form-select" name="state" id="state" required>
                <option value="">Choose...</option>
                <option value="Kosovo">Kosovo</option>
                <option value="Albania">Albania</option>
                  <option value="California">California</option>
                  <option value="Texas">Texas</option>
                  <option value="Roi de Janeiro">Roi de Janeiro</option>
                  <option value="South Australia">South Australia</option>
                  <option value="New York">New York</option>
                </select>
              </div>
              <div class="form-group">
                <label for="zip">ZIP</label>
                <input type="text" class="form-control" name="zip" id="zip" required>
              </div>
              <div class="form-group">
                <label for="paymentMethod">Payment Method</label><br>
                <input type="radio" name="paymentMethod" value="Credit Card" required> Credit Card<br>
                <input type="radio" name="paymentMethod" value="Debit Card" required> Debit Card<br>
                <input type="radio" name="paymentMethod" value="PayPal" required> PayPal
              </div>
      
              <div class="form-group">
                <label for="card_name">Name on Card</label>
                <input type="text" class="form-control" name="card_name" id="card_name" required>

                <div class="form-group">
                <label for="card_number">Credit Card Number </label>
                <input type="number" class="form-control" name="card_number" id="card_number" required>
              </div>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
