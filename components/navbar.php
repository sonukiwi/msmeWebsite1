<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-weight:bold;color:gray;
    animation-name:companyName;animation-iteration-count:infinite;animation-duration:1s;" href="#">Sanyug Drugs</a>
    <button onclick="clickBurger()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style=""></span>
      <span style="display:none;margin-right:8px;" id="cancelNavbar">
      <i class="fas fa-times" style="font-size:28px;"></i>
      </span>
    </button>
    <div style="margin-left:40px;" class="collapse navbar-collapse menuOptions" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color:gray;" class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item" id="aboutOption">
          <a style="color:gray;" class="nav-link active" aria-current="page" href="#">About Us</a>
          <ul id="aboutDropdown" 
          style="background:black;position:absolute;z-index:3;
          list-style-type:none;margin-top:0px;padding:0px;padding-top:0px;color:gray;display:none;">
            <li style="padding:4px 16px;">Company Profile</li>
            <li style="padding:4px 16px;">Milestones</li>
            <li style="padding:4px 16px;">Chairman's Desk</li>
          </ul>
        </li>
        <li class="nav-item" id="productsOption">
          <a style="color:gray;" class="nav-link active" aria-current="page" href="#">Products</a>
          <ul id="productsDropdown" 
          style="background:black;position:absolute;z-index:3;
          list-style-type:none;margin-top:0px;padding:0px;padding-top:0px;color:gray;display:none;">
            <li style="padding:4px 16px;">Allopathic</li>
            <li style="padding:4px 16px;">Pharma</li>
            <li style="padding:4px 16px;">Latest Products</li>
          </ul>
        </li>
        <li class="nav-item">
          <a style="color:gray;" class="nav-link active" aria-current="page" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>