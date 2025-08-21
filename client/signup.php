<div class="container">
<h1 class="heading">Sign Up</h1>
<form method="POST" action="./server/request.php">

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="User Name" class="form-label">User Name</label>
    <input type="text" name="username"  class="form-control" id="User Name"  placeholder="Enter your name">
  </div>
    <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="User Email " class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="User Email"  placeholder="User email address">
  </div>
   <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="Password " class="form-label">User  Password</label>
    <input type="password" name="password" class="form-control" id="Password"  placeholder="User Password">
  </div>
   <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="User address " class="form-label">User  Address</label>
    <input type="text" name="address" class="form-control" id="User address"  placeholder="Enter your Address">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
      <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
</div>
  
</form>
</div>